<?php

include 'config.php';

$name = $_GET['name'];
$id = $_GET['id'];

$con = connectDB();

mysqli_query($con, "insert into wills (name, email, password) values('$name', '$email', '$password')");

mysqli_close($con); 
