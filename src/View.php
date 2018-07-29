<?php

namespace METASTORE\App\Kernel;

/**
 * Class View
 * @package METASTORE\App\Kernel
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