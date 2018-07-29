<?php

namespace METASTORE\Kernel;

/**
 * Class Cache
 * @package METASTORE\Kernel
 */
class Cache {
	/**
	 * cURL: JSON cache.
	 *
	 * @param $url
	 *
	 * @return mixed
	 */
	public static function json( $url ) {
		$path    = Route::DOCUMENT_ROOT() . 'storage/cache/';
		$cache   = $path . Hash::get( 'md5', $url );
		$refresh = 60 * 60;
		$devMode = 0;

		if ( ( ( $refresh ) < ( time() - filectime( $cache ) ) || filesize( $cache ) == 0 ) || $devMode ) {
			$out = Parser::json( cURL::get( $url ) );

			$handle = fopen( $cache, 'wb' ) or die( 'no fopen' );
			$json_cache = cURL::get( $url );

			fwrite( $handle, $json_cache );
			fclose( $handle );
		} else {
			$out = Parser::json( Storage::get( $cache ) );
		}

		return $out;
	}
}