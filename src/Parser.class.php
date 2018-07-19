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

}