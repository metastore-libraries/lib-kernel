<?php

namespace MetaStore\App\Kernel;

/**
 * Class MetaCR
 * @package MetaStore\App\Kernel
 */
class MetaCR {

	/**
	 * METADATA CR.
	 *
	 * @return mixed
	 */
	public static function getCR() {
		$cr  = 'PHNwYW4gY2xhc3M9Im1ldGEtY3IiPjxpIGNsYXNzPSJmYXMgZmEtY29kZSI+PC9pPiB3aXRoIDxpIGNsYXNzPSJmYXMgZmEtaGVhcnQiIHN0eWxlPSJjb2xvcjogI2ZlNmUzYTsiPjwvaT4gYnkgPGEgdGl0bGU9IldlYiBBcHBsaWNhdGlvbiBEZXZlbG9wbWVudCBDb21wYW55IiBocmVmPSJodHRwczovL21ldGFkYXRhLmZvdW5kYXRpb24vIj48c3Ryb25nPk1FVEFEQVRBPC9zdHJvbmc+PC9hPjwvc3Bhbj4=';
		$out = Hash::base64( $cr );

		return $out;
	}

}