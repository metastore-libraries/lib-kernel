<?php

namespace METASTORE\App\Kernel;

/**
 * Class cURL
 * @package METASTORE\App\Kernel
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
}