<?php

namespace METADATA\Kernel;

/**
 * Class Json
 * @package METADATA\Kernel
 */
class Json {

	/**
	 * Decode JSON data.
	 *
	 * @param $src
	 *
	 * @return mixed
	 */
	public static function decode( $src ) {
		$out = json_decode( $src, true );

		return $out;
	}

	/**
	 * Decode JSON data.
	 *
	 * @param $src
	 *
	 * @return mixed
	 */
	public static function encode( $src ) {
		$out = json_encode( $src, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT );

		return $out;
	}

}