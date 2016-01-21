<?php 

require_once 'db.php';
require_once 'user.php'; 


class Exuser extends User {

	/* These members have the same name as the columns in the "extended_users" table */
	private $user_id = -1; 
	private $first_name = ""; 
	private $last_name = ""; 
	private $firm_name = ""; 
	private $registration_number = ""; 
	private $sa_id = ""; 
	private $tel_number = ""; 
	private $tel_number_2 = ""; 
	private $business_address = ""; 
	private $postal_address = "";
	
	
	public function __construct($id){
		parent::__construct($id);
		$this->user_id = $id; 
		$this->make();
	}
	
	private function make(){
		$result = select("extended_users", "user_id = " . $this->user_id); 
		while ($row = mysqli_fetch_array($result)) {
			$this->first_name = $row['first_name']; 
			$this->last_name = $row['last_name']; 
			$this->firm_name = $row['firm_name']; 
			$this->registration_number = $row['registration_number']; 
			$this->sa_id = $row['sa_id']; 
			$this->tel_number = $row['tel_number']; 
			$this->tel_number_2 = $row['tel_number_2']; 
			$this->bussiness_address = $row['business_address']; 
			$this->postal_address = $row['postal_address']; 
		}
	}
	
	
	/* 
	 * Generic get method for all the private fields. 
	 * CAUTION when changing the member names
	 * May return null for unknown keys
	 */
	public function get($key) {
		switch($key){
			case "first_name": return $this->first_name; 
			case "last_name": return $this->last_name; 
			case "firm_name": return $this->firm_name; 
			case "registration_number": return $this->registration_number; 
			case "sa_id": return $this->sa_id; 
			case "tel_number": return $this->tel_number; 
			case "tel_number_2": return $this->tel_number_2; 
			case "business_address": return $this->business_address; 
			case "postal_address": return $this->postal_address; 
			default: return parent::get($key);
		}
	}
}