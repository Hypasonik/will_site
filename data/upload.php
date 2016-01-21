<?php

include_once 'db.php';

//person = testator
$testator_id = $_POST['id'];
$testator_name = $_POST['n'];
$testator_surname = $_POST['sn'];
$date = $_POST['d'];
$lawyer_id = $_POST['l'];
$codicil_id = $_POST['c'];
$now = time();

$file_name = $testator_id . "-" . $now . ".pdf"; 
 
if (!file_exists("files/" . $testator_id . "/"))
	mkdir("files/" . $testator_id . "/"); 
    
// save the file
if (move_uploaded_file($_FILES['f']['tmp_name'], "files/". $testator_id . "/" . $file_name)){
	
	$will_id = insert("wills", "testator_id, testator_name, testator_surname, timestamp, lawyer_id, codicil_id, creation_date",
	   "'$testator_id', '$testator_name', '$testator_surname', $now, '$lawyer_id', 'null', '$date'");
	
	$receipt_number = generate_receipt_number();
	   
	insert("receipts", "will_id, value", "$will_id, '$receipt_number'");
	
	// redirect back to the homepage
	header("Location: ../receipt.php?r=" . $receipt_number); 

}

else {
	echo("Error uploading the pdf. Click <a href=\"upload.php\"> here </a> to return.");
	echo("<br><br>ERROR CODE: " . $_FILES['f']['error']); 
}

function generate_receipt_number(){
	
	$rndm =  "NWR" . rand(10000, 99999);
	
	if(mysqli_num_rows(select("receipts", "value = '$rndm'") == 1)){
		return generate_receipt_number();
	} 
	else {
		return $rndm;
	}
}