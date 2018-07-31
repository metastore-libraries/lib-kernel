<?php

namespace MetaStore\App\Kernel;

/**
 * Class Translit
 * @package MetaStore\App\Kernel
 */
class Translit {

	/**
	 * @param $rule
	 *
	 * @return \Transliterator
	 */
	private static function createTranslit( $rule ) {
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
		$trans  = self::createTranslit( $rule );
		$string = preg_replace( '/[-\s]+/', '-', $trans->transliterate( $string ) );
		$out    = trim( $string, '-' );

		return $out;
	}

}