<?php

namespace METADATA\Kernel;

/**
 * Class Parser
 * @package METADATA\Kernel
 */
class Parser {

	/**
	 * Clear DATA (escape html).
	 *
	 * @param $string
	 *
	 * @return string
	 */
	public static function Clear( $string ) {
		$trim = trim( $string );
		$out  = htmlspecialchars( $trim, ENT_QUOTES );

		return $out;
	}

	/**
	 * Normalize DATA (lower case & replace space).
	 *
	 * @param $string
	 *
	 * @return string
	 */
	public static function Normalize( $string ) {
		$replace = str_replace( ' ', '-', $string );
		$out     = mb_strtolower( $replace, 'UTF-8' );

		return $out;
	}

	public static function getJSON( $src ) {
		$src = file_get_contents( $src );
		$out = json_decode( $src, true );

		return $out;
	}

}