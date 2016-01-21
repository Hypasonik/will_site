<?php

require_once 'db.php';

class User {
	
	/* These members have the same name as the columns in the "users" table */
	private $id = -1;
	private $password = ""; 
	private $email = ""; 
	private $type = -1; 
	private $creation_date = -1; 
	private $approved = -1; 
	
	public function __construct($id){
		$this->id = $id; 
		$this->make();
	}
	
	private function make(){
		$result = select("users", "id = " . $this->id); 
		while ($row = mysqli_fetch_array($result)) { 
			$this->password = $row['password'];
			$this->email = $row['email']; 
			$this->type = $row['type'];
			$this->creation_date = $row['creation_date']; 
			$this->approved = $row['approved']; 
		}
	}
	
	/* 
	 * Generic get method for all the private fields. 
	 * All subclasses shoud return super as default
	 * CAUTION when changing the member names
	 * May return null for unknown keys
	 */
	public function get($key) {
		switch($key) {
			case "id": return $this->id; 
			case "password": return $this->password; 
			case "email": return $this->email; 
			case "type": return $this->type;
			case "creation_date": return $this->creation_date; 
			case "approved": return $this->approved; 
			default: return null;
		}
	}
	
}