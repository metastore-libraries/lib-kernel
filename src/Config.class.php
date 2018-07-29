<?php

namespace METASTORE\Kernel;

/**
 * Class Config
 * @package METASTORE\Kernel
 */
class Config {

	/**
	 * @param $file
	 *
	 * @return mixed
	 */
	public static function get( $file ) {
		$file = Storage::get( Route::DOCUMENT_ROOT() . 'engine/config/' . $file . '.json' );
		$out  = Parser::json( $file );

		return $out;
	}

}
