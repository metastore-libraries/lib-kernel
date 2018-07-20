<?php

namespace METADATA\Kernel;

/**
 * Class Cookie
 * @package METADATA\Kernel
 */
class Cookie {

	/**
	 * Cookie: save value.
	 *
	 * @param $type
	 * @param $name
	 * @param $value
	 * @param string $time
	 *
	 * @return bool
	 */
	public static function set( $type, $name, $value, $time = '+30 days' ) {
		if ( $type === 'form' ) {
			$out = setcookie( $name, Parser::clear( $_POST[ $value ] ), strtotime( $time ) );
		} else {
			$out = setcookie( $name, Parser::clear( $value ) );
		}

		return $out;
	}

	/**
	 * Cookie: load value.
	 *
	 * @param $name
	 *
	 * @return mixed
	 */
	public static function get( $name ) {
		$out = $_COOKIE[ $name ];

		return $out;
	}

}