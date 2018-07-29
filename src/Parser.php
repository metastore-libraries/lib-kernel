<?php

namespace METASTORE\App\Kernel;

/**
 * Class Parser
 * @package METASTORE\App\Kernel
 */
class Parser {

	/**
	 * Clear DATA (escape html).
	 *
	 * @param $string
	 *
	 * @return string
	 */
	public static function clear( $string ) {
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
	public static function normalize( $string ) {
		$replace = str_replace( ' ', '-', $string );
		$out     = mb_strtolower( $replace, 'UTF-8' );

		return $out;
	}

	/**
	 * Decode JSON data.
	 *
	 * @param $src
	 * @param int $encode
	 *
	 * @return mixed|string
	 */
	public static function json( $src, $encode = 0 ) {
		$options = JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT;
		$out     = $encode ? json_encode( $src, $options ) : json_decode( $src, true );

		return $out;
	}

}