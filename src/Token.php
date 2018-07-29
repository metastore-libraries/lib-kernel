<?php

namespace METASTORE\App\Kernel;

/**
 * Class Token
 * @package METASTORE\App\Kernel
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
		$out = Hash::base64( random_bytes( $length ), 1 );

		return $out;
	}

}