<?php 
require_once 'db.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$firm_name = $_POST['firm_name'];
$registration_number = $_POST['registration_number'];
$sa_id = $_POST['sa_id'];
$tel_number = $_POST['tel_number'];
$tel_number_2 = $_POST['tel_number_2'];
$business_address = $_POST['business_address'];
$postal_address = $_POST['postal_address'];
$password = generate_strong_password();

//hash password with sha512 algorithm
$password_hash = hash('sha512', $password);

<<<<<<< HEAD
//TODO duplicate email
if (!send_confimation_email($email, $password)){
	header("location: error.php");
	//die();
=======
if (!send_confimation_email($email, $password)){
	header("location: error.php");
	die();
>>>>>>> refs/remotes/origin/Dev_alex
}

// Inserting a new extended user, so type is 1
$user_id = insert( "users", 
  				   "email, password, type, creation_date, approved",
  				   "'$email', '$password_hash', 1, " . time() . ", 0");

// Inser the additional information that is required for lawyers (extended users)
insert( "extended_users",
		"user_id, first_name, last_name, firm_name, registration_number, sa_id, tel_number, tel_number_2, business_address, postal_address", 
  		"$user_id, '$first_name', '$last_name', '$firm_name', '$registration_number', '$sa_id', '$tel_number', '$tel_number_2', '$business_address', '$postal_address'");

<<<<<<< HEAD
//header ("location: ../index.php");
=======
header ("location: ../index.php");
>>>>>>> refs/remotes/origin/Dev_alex

function generate_strong_password($length = 10, $nr_special = 2, $nr_numbers = 2) {
    
 // Character sets 
 $chars_numbers = '0123456789';
    $chars_special = '!@#$%&*?'; 
 $chars_normal = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 

 // password string 
 $pw = '';
   
 // add the normal characters 
 for ($i = 0; $i < $length - $nr_special - $nr_numbers; $i++)
  $pw .= $chars_normal[rand(0, strlen($chars_normal)-1)]; 

 // add the special characters
 for ($i = 0; $i < $nr_special; $i++)
  $pw .= $chars_special[rand(0, strlen($chars_special)-1)]; 
 
 // add the numbers 
 for ($i = 0; $i < $nr_numbers; $i++)
  $pw .= $chars_numbers[rand(0, strlen($chars_numbers)-1)]; 
 
 // finally shuffle and return the password string 
    return str_shuffle($pw);
}

<<<<<<< HEAD
//sends approval email
=======

>>>>>>> refs/remotes/origin/Dev_alex
function send_confimation_email($email, $password){
	$msg = "NOOB";
	
	return mail("$email", "Approved", $msg);
}