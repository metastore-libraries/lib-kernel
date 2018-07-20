<?php

namespace METADATA\Kernel;

/**
 * Class Token
 * @package METADATA\Kernel
 */
class Token {

	/**
	 * Random token generator.
	 *
	 * @param int $length
	 *
	 * @return string
	 * @throws \Exception
	 */
	public static function get( $length = 32 ) {
		$out = Base64::encode( random_bytes( $length ) );

		return $out;
	}

}