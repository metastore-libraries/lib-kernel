<?php

namespace MetaStore\App\Kernel;

/**
 * Class View
 * @package MetaStore\App\Kernel
 */
class View {

	/**
	 * @param $template
	 * @param $type
	 *
	 * @return mixed
	 */
	public static function get( $template, $type ) {
		$out = require( Route::DOCUMENT_ROOT() . 'resources/views/' . $type . '/' . $template . '.php' );

		return $out;
	}

}