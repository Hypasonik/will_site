<?php
require_once 'config.php';

function connectDB(){
    
    // connect to the SQL database
<<<<<<< HEAD
    $con = mysqli_connect(Cfg::get("DATABASE_URI"),
						  Cfg::get("DATABASE_USER"), 
						  Cfg::get("DATABASE_PASSWORD"),
						  Cfg::get("DATABASE_NAME"));
=======
    $con = mysqli_connect(get_value("DATABASE_URI"),
						  get_value("DATABASE_USER"), 
						  get_value("DATABASE_PASSWORD"),
						  get_value("DATABASE_NAME"));
>>>>>>> refs/remotes/origin/Dev_alex
 
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        return null;
    }
    
    return $con;
}

//insert into a will_table
function insert($table, $keys, $values) {
	
	$con = connectDB();
	
	
<<<<<<< HEAD
	if(isset($keys)){
		mysqli_query($con, "insert into will_$table ($keys) values($values)");
	}
	else {
		mysqli_query($con, "insert into will_$table values($values)");
	}
=======
	mysqli_query($con, "insert into will_$table ($keys) values($values)");
>>>>>>> refs/remotes/origin/Dev_alex
	
	//echo "insert into will_$table ($keys) values($values)";
	
	$insert_id = mysqli_insert_id($con);
	
	mysqli_close($con); 
	
	return $insert_id;
}

//selects from a will_table
function select($table, $where) {
	
	$con = connectDB();
	
	if (isset($where)){
		$result = mysqli_query($con, "select * from will_$table where " . $where);
	}
	else {
		$result = mysqli_query($con, "select * from will_$table");
	}
	
	
	mysqli_close($con); 
	
	return $result;	 
}