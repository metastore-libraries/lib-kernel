<?php

namespace MetaStore\App\Kernel;

/**
 * Class Token
 * @package MetaStore\App\Kernel
 */
class Token {

	/**
	 * Random token generator.
	 *
	 * @param int $length
	 *
	 * @return string
	 * @throws \Exception
	 */
	public static function generator( $length = 32 ) {
		$out = Hash::base64( Route::HTTP_HOST() . random_bytes( $length ), 1 );

		return $out;
	}

}