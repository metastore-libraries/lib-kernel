<?php

namespace METADATA\Kernel;

/**
 * Class Base64
 * @package METADATA\Kernel
 */
class Base64 {

	/**
	 * @param $data
	 *
	 * @return bool|string
	 */
	public static function Decode( $data ) {
		$out = base64_decode( $data );

		return $out;
	}

	/**
	 * @param $data
	 *
	 * @return string
	 */
	public static function Encode( $data ) {
		$out = base64_encode( $data );

		return $out;
	}

}