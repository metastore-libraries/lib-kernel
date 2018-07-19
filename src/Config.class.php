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
		$file = Storage::Get( Route::DOCUMENT_ROOT() . 'engine/config/' . $file . '.json' );
		$out  = JSON::Decode( $file );

		return $out;
	}

}
