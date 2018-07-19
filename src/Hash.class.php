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
	public static function Get( $algo, $data ) {
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
	public static function Generator( $algo = 'crc32b', $length = 32 ) {
		$out = self::Get( $algo, Timestamp::Get() . uniqid( bin2hex( random_bytes( $length ) ), true ) );

		return $out;
	}

}