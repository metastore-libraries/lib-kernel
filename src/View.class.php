<?php

namespace METADATA\Kernel;

/**
 * Class View
 * @package METADATA\Kernel
 */
class View {

	/**
	 * @param $template
	 * @param $theme
	 *
	 * @return mixed
	 */
	public static function Get( $template, $theme ) {
		$out = require( Route::DOCUMENT_ROOT() . 'themes/' . $theme . '/templates/' . $template . '.php' );

		return $out;
	}

}