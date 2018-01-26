<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 2018/1/26
 * Time: 12:32
 */

function getIp() {
	if ( getenv( "HTTP_CLIENT_IP" )
	     && strcasecmp( getenv( "HTTP_CLIENT_IP" ),
			"unknown" )
	) {
		$ip = getenv( "HTTP_CLIENT_IP" );
	} elseif ( getenv( "HTTP_X_FORWARDED_FOR" )
	           && strcasecmp( getenv( "HTTP_X_FORWARDED_FOR" ), "unknown" )
	) {
		$ip = getenv( "HTTP_X_FORWARDED_FOR" );
	} elseif ( getenv( "REMOTE_ADDR" )
	           && strcasecmp( getenv( "REMOTE_ADDR" ),
			"unknown" )
	) {
		$ip = getenv( "REMOTE_ADDR" );
	} elseif ( isset( $_SERVER['REMOTE_ADDR'] ) && $_SERVER['REMOTE_ADDR']
	           && strcasecmp( $_SERVER['REMOTE_ADDR'], "unknown" )
	) {
		$ip = $_SERVER['REMOTE_ADDR'];
	} else {
		$ip = "unknown";
	}

	return ( $ip );
}

function getServerIP() {
	return isset( $_SERVER['HTTP_X_FORWARDED_HOST'] )
		? $_SERVER['HTTP_X_FORWARDED_HOST']
		: ( isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : '' );
}

function listServer() {
	$server = $_SERVER;
	foreach ( $server as $key => $value ) {
		echo $key . " : " . $value . br();
	}
}
function br(){
	return nl2br(PHP_EOL);
}