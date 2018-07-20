<?php

namespace METADATA\Kernel;

/**
 * Class Hash
 * @package METADATA\Kernel
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
		$out = self::get( $algo, Timestamp::get() . uniqid( bin2hex( random_bytes( $length ) ), true ) );

		return $out;
	}

}