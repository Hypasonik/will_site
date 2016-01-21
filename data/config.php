<?php
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