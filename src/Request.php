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
	public static function getParam( $id ) {
		$out = Parser::clearData( $_GET[ $id ] ?? '' ?: '' );

		return $out;
	}

	/**
	 * @param $id
	 *
	 * @return string
	 */
	public static function setParam( $id ) {
		$out = Parser::clearData( $_POST[ $id ] );

		return $out;
	}

	/**
	 * @return string
	 */
	public static function getScheme() {
		$out = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://' );

		return $out;
	}

}