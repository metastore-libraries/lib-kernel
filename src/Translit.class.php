<?php

namespace METADATA\Kernel;

/**
 * Class Translit
 * @package METADATA\Kernel
 */
class Translit {

	/**
	 * Transliterate a string.
	 *
	 * @param $string
	 * @param string $rule
	 *
	 * @return string
	 */
	public static function get( $string, $rule = 'Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; Lower();' ) {
		$trans  = \Transliterator::create( $rule );
		$string = preg_replace( '/[-\s]+/', '-', $trans->transliterate( $string ) );
		$out    = trim( $string, '-' );

		return $out;
	}

}