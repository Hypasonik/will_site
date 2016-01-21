<?php
<<<<<<< HEAD
class Cfg {
	
	static function get($key){
	
		switch ($key) {
			default: return "INVALID_KEY";
			case "DATABASE_URI": return "localhost";
			case "DATABASE_USER": return "root";
			case "DATABASE_PASSWORD": return "";
			case "DATABASE_NAME": return "new_will";
			case "COOKIE_LIFETIME": return 3600;
		}
	}
}
=======

function get_value($key){
	
	switch ($key) {
		default: return "INVALID_KEY";
		case "DATABASE_URI": return "localhost";
		case "DATABASE_USER": return "f0348322_will";
		case "DATABASE_PASSWORD": return "Ilovepie456";
		case "DATABASE_NAME": return "f0348322_hypadesigns";
	}
}
>>>>>>> refs/remotes/origin/Dev_alex
