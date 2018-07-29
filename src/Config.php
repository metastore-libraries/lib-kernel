<?php

namespace METASTORE\App\Kernel;

/**
 * Class Config
 * @package METASTORE\App\Kernel
 */
class Config {

	/**
	 * @param $file
	 *
	 * @return mixed
	 */
	public static function get( $file ) {
		$file = Storage::get( Route::DOCUMENT_ROOT() . 'app/config/' . $file . '.json' );
		$out  = Parser::json( $file );

		return $out;
	}

}
