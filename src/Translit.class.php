<?php

namespace METASTORE\Kernel;

/**
 * Class Translit
 * @package METASTORE\Kernel
 */
class Translit {

	/**
	 * @param $rule
	 *
	 * @return \Transliterator
	 */
	private static function translit( $rule ) {
		$out = \Transliterator::create( $rule );

		return $out;
	}

	/**
	 * Transliterate a string.
	 *
	 * @param $string
	 * @param string $rule
	 *
	 * @return string
	 */
	public static function get( $string, $rule = 'Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; Lower();' ) {
		$trans  = self::translit( $rule );
		$string = preg_replace( '/[-\s]+/', '-', $trans->transliterate( $string ) );
		$out    = trim( $string, '-' );

		return $out;
	}

}