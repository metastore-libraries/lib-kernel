<?php

namespace METADATA\Kernel;

/**
 * Class cURL
 * @package METADATA\Kernel
 */
class cURL {

	/**
	 * cURL: Get.
	 *
	 * @param $url
	 *
	 * @return mixed
	 */
	public static function get( $url ) {
		$url = urlencode( $url );
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
	 * cURL: JSON cache.
	 *
	 * @param $url
	 *
	 * @return mixed
	 */
	public static function cache( $url ) {
		$path    = Route::DOCUMENT_ROOT() . 'engine/cache/';
		$cache   = $path . Hash::get( 'md5', $url );
		$refresh = 60 * 60;
		$devMode = 0;

		if ( ( ( $refresh ) < ( time() - filectime( $cache ) ) || filesize( $cache ) == 0 ) || $devMode ) {
			$out = Json::decode( self::get( $url ) );

			$handle = fopen( $cache, 'wb' ) or die( 'no fopen' );
			$json_cache = self::get( $url );

			fwrite( $handle, $json_cache );
			fclose( $handle );
		} else {
			$out = Json::decode( Storage::get( $cache ) );
		}

		return $out;
	}

}