<?php

namespace MetaStore\App\Kernel;

/**
 * Class Route
 * @package MetaStore\App\Kernel
 */
class Route {

	/**
	 * @return mixed
	 */
	public static function HTTP_HOST() {
		$out = $_SERVER['HTTP_HOST'];

		return $out;
	}

	/**
	 * @return mixed
	 */
	public static function DOCUMENT_ROOT() {
		$out = ( defined( 'ABSPATH' ) ) ? ABSPATH . '/' : $_SERVER['DOCUMENT_ROOT'];

		return $out;
	}

	/**
	 * @return mixed
	 */
	public static function REMOTE_ADDR() {
		$out = $_SERVER['REMOTE_ADDR'];

		return $out;
	}

	/**
	 * @return mixed
	 */
	public static function REQUEST_URI() {
		$out = $_SERVER['REQUEST_URI'];

		return $out;
	}

}