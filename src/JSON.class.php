<?php

namespace METADATA\Kernel;

/**
 * Class JSON
 * @package METADATA\Kernel
 */
class JSON {

	/**
	 * Decode JSON data.
	 *
	 * @param $src
	 *
	 * @return mixed
	 */
	public static function Decode( $src ) {
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
	public static function Encode( $src ) {
		$out = json_encode( $src, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT );

		return $out;
	}

}