<?php

namespace METADATA\Kernel;

/**
 * Class View
 * @package METADATA\Kernel
 */
class View {

	/**
	 * @param $template
	 * @param $type
	 *
	 * @return mixed
	 */
	public static function get( $template, $type ) {
		$out = require( Route::DOCUMENT_ROOT() . 'app/views/' . $type . '/' . $template . '.php' );

		return $out;
	}

}