<?php

namespace METADATA\Kernel;

/**
 * Class Checksum
 * @package METADATA\Kernel
 */
class Checksum {

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