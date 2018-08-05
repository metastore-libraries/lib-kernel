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

		curl_setopt_array( $ch, [
			CURLOPT_URL            => $url,
			CURLOPT_POST           => 0,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_SSL_VERIFYPEER => 0,
			CURLOPT_USERAGENT      => 'Mozilla/5.0',
			CURLOPT_HTTPHEADER     => $headers,
		] );

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
	public static function getJSON( $url, $headers = '', $cache = 1, $time = 60 * 60 ) {
		$cachePath = Route::DOCUMENT_ROOT() . 'storage/cache/';
		$cacheFile = $cachePath . Hash::get( 'md5', $url );
		$refresh   = $time;

		if ( ( ( $refresh ) < ( time() - filectime( $cacheFile ) ) || filesize( $cacheFile ) == 0 ) || ! $cache ) {
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