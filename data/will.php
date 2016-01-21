<?php

require_once 'db.php';

class Will {
	
	private $id = -1;
	private $testator_id = "";
	private $testator_name = "";
	private $testator_surname = "";
	private $timestamp = -1;
	private $lawyer_id = -1;
	private $departmental_id = -1;
	private $codicil_id = -1;
	private $creation_date = "";
	
	public function __construct($id) {
		$this->id = $id;
		$this->make();
		
	}
	
	private function make() {
		$result = select("wills", "id = $this->id");
		
		while($row = mysqli_fetch_array($result)) {
			$this->testator_id = $row['testator_id'];
			$this->testator_name = $row['testator_name'];
			$this->testator_surname = $row['testator_surname'];
			$this->timestamp = $row['timestamp'];
			$this->lawyer_id = $row['lawyer_id'];
			$this->departmental_id = $row['departmental_id'];
			$this->codicil_id = $row['codicil_id'];
			$this->creation_date = $row['creation_date'];
		}
	}
	
	public function get_id(){ return $this->id; }
	
	public function get($key){
		
		switch($key) {
			case "id": return $this->id; 
			case "testator_id": return $this->testator_id;
			case "testator_name": return $this->testator_name;
			case "testator_surname": return $this->testator_surname;
			case "timestamp": return $this->timestamp;
			case "lawyer_id": return $this->lawyer_id;
			case "departmental_id": return $this->departmental_id;
			case "codicil_id": return $this->codicil_id;
			case "creation_date": return $this->creation_date;
			default: return null;
		}
		
	}
	
}