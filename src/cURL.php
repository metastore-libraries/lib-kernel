<?php

namespace MetaStore\App\Kernel;

/**
 * Class cURL
 * @package MetaStore\App\Kernel
 */
class cURL {

	/**
	 * cURL: Get URL.
	 *
	 * @param $url
	 * @param string $headers
	 *
	 * @return mixed
	 */
	public static function getURL( $url, $headers = '' ) {
		$ch = curl_init() or die( 'curl issue' );

		curl_setopt( $ch, CURLOPT_URL, $url );
		curl_setopt( $ch, CURLOPT_POST, 0 );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
		curl_setopt( $ch, CURLOPT_USERAGENT, 'Mozilla/5.0' );

		if ( ! empty( $headers ) ) {
			curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		}


		$out = curl_exec( $ch );
		curl_close( $ch );

		return $out;
	}

	/**
	 * cURL: Get JSON.
	 *
	 * @param $url
	 * @param string $headers
	 * @param int $cache
	 * @param float|int $time
	 *
	 * @return mixed|string
	 */
	public static function getJSON( $url, $headers = '', $cache = 1, $time = 2 * 60 * 60 ) {
		$cachePath = Route::DOCUMENT_ROOT() . 'storage/cache/';
		$cacheFile = $cachePath . Hash::get( 'md5', $url );
		$refresh   = $time;

		if ( ( ! file_exists( $cacheFile ) || ( time() - filectime( $cacheFile ) ) > ( $refresh ) || filesize( $cacheFile ) == 0 )
		     || ! $cache ) {
			$out = Parser::json( self::getURL( $url, $headers ) );

			$handle = fopen( $cacheFile, 'wb' ) or die( 'no fopen' );
			$json_cache = self::getURL( $url, $headers );

			fwrite( $handle, $json_cache );
			fclose( $handle );
		} else {
			$out = Parser::json( Storage::getFile( $cacheFile ) );
		}

		return $out;
	}

}