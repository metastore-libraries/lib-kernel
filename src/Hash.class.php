<?php

namespace METASTORE\Kernel;

/**
 * Class Hash
 * @package METASTORE\Kernel
 */
class Hash {

	/**
	 * @param $algo
	 * @param $data
	 *
	 * @return string
	 */
	public static function get( $algo, $data ) {
		$out = hash( $algo, $data );

		return $out;
	}

	/**
	 * Random hash generator.
	 *
	 * @param string $algo
	 * @param int $length
	 *
	 * @return string
	 * @throws \Exception
	 */
	public static function generator( $algo = 'crc32b', $length = 32 ) {
		$out = self::get( $algo, Date::timestamp() . uniqid( bin2hex( random_bytes( $length ) ), true ) );

		return $out;
	}

	/**
	 * @param $data
	 * @param $encode
	 *
	 * @return bool|string
	 */
	public static function base64( $data, $encode = 0 ) {
		$out = $encode ? base64_encode( $data ) : base64_decode( $data );

		return $out;
	}

}