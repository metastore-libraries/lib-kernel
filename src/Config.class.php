<?php

namespace METADATA\Kernel;

/**
 * Class Config
 * @package METADATA\Kernel
 */
class Config {

	/**
	 * @param $file
	 *
	 * @return mixed
	 */
	public static function Get( $file ) {
		$file = file_get_contents( Server::DOCUMENT_ROOT() . 'engine/config/' . $file . '.json' );
		$out  = JSON::Decode( $file );

		return $out;
	}

}
