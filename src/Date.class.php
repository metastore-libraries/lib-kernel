<?php

namespace METADATA\Kernel;

/**
 * Class Date
 * @package METADATA\Kernel
 */
class Date {

	/**
	 * @param string $format
	 * @param $date
	 *
	 * @return false|string
	 */
	public static function convert( $format = 'Y-m-d H:i:s', $date ) {
		$out = date( $format, strtotime( $date ) );

		return $out;
	}

}