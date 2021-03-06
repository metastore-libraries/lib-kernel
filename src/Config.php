<?php

namespace MetaStore\App\Kernel;

/**
 * Class Config
 * @package MetaStore\App\Kernel
 */
class Config {

	/**
	 * @param $file
	 *
	 * @return mixed
	 */
	public static function getFile( $file ) {
		$file = Storage::getFile( Route::DOCUMENT_ROOT() . 'app/config/' . $file . '.json' );
		$out  = Parser::json( $file );

		return $out;
	}

}
