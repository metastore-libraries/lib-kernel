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
	public static function Get( $length = 32 ) {
		$out = base64_encode( random_bytes( $length ) );

		return $out;
	}

}