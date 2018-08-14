<?php

namespace MetaStore\App\Kernel;

/**
 * Class Session
 * @package MetaStore\App\Kernel
 */
class Session {

	/**
	 * @param $name
	 * @param $value
	 *
	 * @return mixed
	 */
	public static function set( $name, $value ) {
		return $_SESSION[ $name ] = $value;
	}

	/**
	 * @param $name
	 *
	 * @return mixed
	 */
	public static function get( $name ) {
		return $_SESSION[ $name ];
	}

	/**
	 * @param $name
	 */
	public static function destroy( $name ) {
		unset( $_SESSION[ $name ] );
	}

}