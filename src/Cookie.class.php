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
	 * @param $name
	 * @param $value
	 * @param string $time
	 * @param $type
	 *
	 * @return bool
	 */
	public static function set( $name, $value, $time = '+30 days', $type ) {
		$out = ( $type === 'form' ) ? setcookie( $name, Parser::clear( $_POST[ $value ] ), strtotime( $time ) ) : setcookie( $name, Parser::clear( $value ) );

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