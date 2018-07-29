<?php

namespace METASTORE\App\Kernel;

/**
 * Class Session
 * @package METASTORE\App\Kernel
 */
class Session {

	/**
	 * @param $savePath
	 * @param $sessionName
	 */
	public static function open( $savePath, $sessionName ) {
		( new \SessionHandler )->open( $savePath, $sessionName );
	}

	/**
	 *
	 */
	public static function close() {
		( new \SessionHandler )->close();
	}

	/**
	 * @param $sessionID
	 */
	public static function read( $sessionID ) {
		( new \SessionHandler )->read( $sessionID );
	}

	/**
	 * @param $sessionID
	 * @param $data
	 */
	public static function write( $sessionID, $data ) {
		( new \SessionHandler )->write( $sessionID, $data );
	}

	/**
	 * @param $sessionID
	 */
	public static function destroy( $sessionID ) {
		( new \SessionHandler )->destroy( $sessionID );
	}

	/**
	 * @param $lifetime
	 */
	public static function gc( $lifetime ) {
		( new \SessionHandler )->gc( $lifetime );
	}
}