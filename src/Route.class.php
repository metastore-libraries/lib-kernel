<?php

namespace METADATA\Kernel;

/**
 * Class Route
 * @package METADATA\Kernel
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
		$out = $_SERVER['DOCUMENT_ROOT'];

		return $out;
	}

	/**
	 * @return mixed
	 */
	public static function REMOTE_ADDR() {
		$out = $_SERVER['REMOTE_ADDR'];

		return $out;
	}

}