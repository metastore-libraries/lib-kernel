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
		$src = file_get_contents( $src );
		$out = json_decode( $src, true );

		return $out;
	}

}