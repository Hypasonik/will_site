<?php
<<<<<<< HEAD
require_once 'db.php';
require_once 'session.php';

$email = $_POST['e'];
$password = $_POST['p'];
=======

include 'config.php';

$name = $_POST['name'];
$password = $_POST['password'];
>>>>>>> refs/remotes/origin/Dev_alex

//hash password with sha512 algorithm
$password = hash('sha512', $password);

<<<<<<< HEAD
$result = select("users", "email = '$email' and password = '$password'");

if(mysqli_num_rows($result) == 1) {
	$user_id = mysqli_fetch_array($result)['id'];
	Session::create($user_id);
}
else {
	echo 'failed to login, please try again';
	echo '<a href="../login.php"></a>';
}
=======
$con = connectDB();

//selects the needed information for login
$result = mysqli_query($con, "select id, name, email, password from users where(( name = '$name' or email = '$name') and password = '$password')");

if(mysqli_num_rows($result) == 1) {
	create_session_for_user($con, mysqli_fetch_array($result)['id']);
} else {
	echo 'failed to login, please try again';
	echo '<a href="../login.php"></a>';
}

mysqli_close($con); 

//create a session id for logged in user
function create_session_for_user($con, $id){
	$session_id = generate_random_string();
	$time = time();
	
	$result = mysqli_query($con, "insert into login values('$id', '$session_id', '$time')");
}

//generates random string for session id
function generate_random_string($length = 24) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//*TODO*
//check session id
//
>>>>>>> refs/remotes/origin/Dev_alex
