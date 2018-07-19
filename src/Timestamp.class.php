<?php

namespace METADATA\Kernel;

/**
 * Class Timestamp
 * @package METADATA\Kernel
 */
class Timestamp {

	/**
	 * UNIX timestamp.
	 *
	 * @return int
	 */
	public static function Get() {
		$date = new \DateTime();
		$out  = $date->getTimestamp();

		return $out;
	}

}