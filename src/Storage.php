<?php

namespace MetaStore\App\Kernel;

/**
 * Class Storage
 * @package MetaStore\App\Kernel
 */
class Storage {

	/**
	 * @param $src
	 *
	 * @return bool|string
	 */
	public static function getFile( $src ) {
		$out = file_get_contents( $src );

		return $out;
	}

	/**
	 * @param $form
	 * @param $meta
	 *
	 * @return mixed
	 */
	public static function fileInfo( $form, $meta ) {
		$out = $_FILES[ $form ][ $meta ];

		return $out;
	}

	/**
	 * Calculate the md5 hash of a file.
	 *
	 * @param $file
	 *
	 * @return string
	 */
	public static function md5( $file ) {
		$out = md5_file( $file );

		return $out;
	}

	/**
	 * Calculate the sha1 hash of a file.
	 *
	 * @param $file
	 *
	 * @return string
	 */
	public static function sha1( $file ) {
		$out = sha1_file( $file );

		return $out;
	}

}