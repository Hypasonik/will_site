<?php
require_once 'db.php';
require_once 'session.php';

$email = $_POST['e'];
$password = $_POST['p'];

//hash password with sha512 algorithm
$password = hash('sha512', $password);

$result = select("users", "email = '$email' and password = '$password'");

if(mysqli_num_rows($result) == 1) {
	$user_id = mysqli_fetch_array($result)['id'];
	Session::create($user_id);
}
else {
	echo 'failed to login, please try again';
	echo '<a href="../login.php"></a>';
}
