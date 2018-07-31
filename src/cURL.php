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
	 *
	 * @return mixed
	 */
	public static function getURL( $url ) {
		$ch = curl_init() or die( 'curl issue' );

		curl_setopt( $ch, CURLOPT_URL, $url );
		curl_setopt( $ch, CURLOPT_POST, false );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch, CURLOPT_USERAGENT, 'Mozilla/5.0' );

		$out = curl_exec( $ch );
		curl_close( $ch );

		return $out;
	}

	/**
	 * cURL: Get JSON.
	 *
	 * @param $url
	 * @param int $cache
	 * @param float|int $time
	 *
	 * @return mixed|string
	 */
	public static function getJSON( $url, $cache = 1, $time = 60 * 60 ) {
		$cachePath = Route::DOCUMENT_ROOT() . 'storage/cache/';
		$cacheFile = $cachePath . Hash::get( 'md5', $url );
		$refresh   = $time;

		if ( ( ( $refresh ) < ( time() - filectime( $cacheFile ) ) || filesize( $cacheFile ) == 0 ) || ! $cache ) {
			$out = Parser::json( self::getURL( $url ) );

			$handle = fopen( $cacheFile, 'wb' ) or die( 'no fopen' );
			$json_cache = self::getURL( $url );

			fwrite( $handle, $json_cache );
			fclose( $handle );
		} else {
			$out = Parser::json( Storage::getFile( $cacheFile ) );
		}

		return $out;
	}

}