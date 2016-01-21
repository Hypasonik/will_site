<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NWR-NEW-searchpage</title>
<link rel="stylesheet" href="styles/style.css" type="text/css">
<?php
	/*TODO
	/COOKIES
	/*if(isset($_COOKIE['session_id']){
			create_new_session_id_for_user();
	}


	$_COOKIE['session_id'];
	$_COOKIE['user_id'];
	*/
?>
</head>

<body>
	<!--header start-->
    <div class="header">
    <!--Logo/Menu's etc-->
    </div>
    <!--header end-->
    
	<!--wrapper start-->
	<div class="wrapper">
    
    	<!--content start-->
    	<div class="content">
    		<h1>NWR search page</h1>
       		<a href="login.php" >LOGIN</a>     
            
            <h2>search</h2>
            
            <form action="" method="GET">
            	<input type="search" name="q" placeholder="SEARCH FOR WILL OR SA ID">
               	<input type="submit" value="SEARCH">
            </form>
    	</div>
    	<!--content end-->
    
	</div>
    <!--wrapper end-->
</body>
</html>