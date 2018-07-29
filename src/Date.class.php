<?php

namespace METASTORE\App\Kernel;

/**
 * Class Date
 * @package METASTORE\App\Kernel
 */
class Date {

	/**
	 * @return \DateTime
	 */
	private static function date() {
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
	public static function timestamp() {
		$out = self::date()->getTimestamp();

		return $out;
	}

}