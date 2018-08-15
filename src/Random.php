<?php

namespace MetaStore\App\Kernel;

/**
 * Class Random
 * @package MetaStore\App\Kernel
 */
class Random {

	/**
	 * @param $min
	 * @param $max
	 *
	 * @return int
	 * @throws \Exception
	 */
	public static function number( $min, $max ) {
		$out = random_int( $min, $max );

		return $out;
	}
}