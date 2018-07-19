<?php

namespace METADATA\Kernel;

/**
 * Class File
 * @package METADATA\Kernel
 */
class File {

	/**
	 * @param $src
	 *
	 * @return bool|string
	 */
	public static function Get( $src ) {
		$out = file_get_contents( $src );

		return $out;
	}

	/**
	 * @param $form
	 * @param $meta
	 *
	 * @return mixed
	 */
	public static function Info( $form, $meta ) {
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
	public static function MD5( $file ) {
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
	public static function SHA1( $file ) {
		$out = sha1_file( $file );

		return $out;
	}

}