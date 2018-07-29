<?php

namespace METASTORE\App\Kernel;

/**
 * Class Request
 * @package METASTORE\App\Kernel
 */
class Request {

	/**
	 * @param $id
	 *
	 * @return string
	 */
	public static function get( $id ) {
		$out = Parser::clear( $_GET[ $id ] );

		return $out;
	}

	/**
	 * @param $id
	 *
	 * @return string
	 */
	public static function post( $id ) {
		$out = Parser::clear( $_POST[ $id ] );

		return $out;
	}

}