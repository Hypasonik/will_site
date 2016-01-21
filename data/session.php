<?php
require_once 'db.php';

class Session {

	static function try_login(){
		if(isset($_COOKIE['id']) && isset($_COOKIE['session_id'])){
			
			return true;
		}
		else {
			return false;
		}
	}
	
	
	static function create($user_id) {		
		$session_id = self::generate_random_string();
		$time = time();
		
		setcookie('id', $user_id, time() + Cfg::get('COOKIE_LIFETIME'), '/');
		setcookie('session_id', $session_id, time() + Cfg::get('COOKIE_LIFETIME'), '/');
		
		insert("login", "", "$user_id, '$session_id', $time, 0,0");
		
		
		return true;
	}
	
	
	//generates random string for session id
	 function generate_random_string($length = 64) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	
}