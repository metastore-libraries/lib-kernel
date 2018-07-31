<?php

namespace MetaStore\App\Kernel;

/**
 * Class Date
 * @package MetaStore\App\Kernel
 */
class Date {

	/**
	 * @return \DateTime
	 */
	private static function createDate() {
		$out = new \DateTime();

		return $out;
	}

	/**
	 * @param string $format
	 * @param $date
	 *
	 * @return false|string
	 */
	public static function convert( $date, $format = 'Y-m-d H:i:s' ) {
		$out = date( $format, strtotime( $date ) );

		return $out;
	}

	/**
	 * UNIX timestamp.
	 *
	 * @return int
	 */
	public static function getTimestamp() {
		$out = self::createDate()->getTimestamp();

		return $out;
	}

}