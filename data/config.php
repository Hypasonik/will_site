<?php

function get_value($key){
	
	switch ($key) {
		default: return "INVALID_KEY";
		case "DATABASE_URI": return "localhost";
		case "DATABASE_USER": return "f0348322_will";
		case "DATABASE_PASSWORD": return "Ilovepie456";
		case "DATABASE_NAME": return "f0348322_hypadesigns";
	}
}
