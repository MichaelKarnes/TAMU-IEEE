<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => '68.178.143.53',
		'username' => 'ieeeDB2',
		'password' => 'IT0fficer!',
		'db' => 'ieeeDB2'
	),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800
	),
	'session' => array(
		'session_name' => 'user',
		'token_name' => 'token'
	)
);

chdir(dirname(__FILE__));

spl_autoload_register(function($class) {
	require_once '../classes/'.$class.'.php';
});

require_once '../functions/sanitize.php';

if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('sessions/session_name'))) {
	$hash = Cookie::get(Config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));
	
	if($hashCheck->count()) {
		$user = new User($hashCheck->first()->user_id);
		$user->login();
	}
}	
?>