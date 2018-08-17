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
	 * @param $type
	 * @param $name
	 * @param $value
	 * @param string $time
	 * @param string $path
	 * @param string $domain
	 *
	 * @return bool
	 */
	public static function set( $type, $name, $value, $time = '+30 days', $path = '', $domain = '' ) {
		$value = ( $type === 'form' ) ? $_POST[ $value ] : $value;
		$out   = setcookie( $name, Parser::clearData( $value ), strtotime( $time ), $path, $domain );

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
		$out = $_COOKIE[ $name ] ?? '' ?: '';

		return $out;
	}

}