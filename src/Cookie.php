<?php

namespace MetaStore\App\Kernel;

/**
 * Class Cookie
 * @package MetaStore\App\Kernel
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
	public static function set( $name, $value, $type, $time = '+30 days' ) {
		$out = ( $type === 'form' ) ? setcookie( $name, Parser::clearData( $_POST[ $value ] ), strtotime( $time ) ) : setcookie( $name, Parser::clearData( $value ) );

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