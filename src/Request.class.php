<?php

namespace METADATA\Kernel;

/**
 * Class Request
 * @package METADATA\Kernel
 */
class Request {

	/**
	 * @param $id
	 *
	 * @return string
	 */
	public static function Get( $id ) {
		$out = Parser::Clear( $_GET[ $id ] );

		return $out;
	}

	/**
	 * @param $id
	 *
	 * @return string
	 */
	public static function Post( $id ) {
		$out = Parser::Clear( $_POST[ $id ] );

		return $out;
	}

}