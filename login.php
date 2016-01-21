<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NWR-NEW-searchpage</title>
<link rel="stylesheet" href="styles/style.css" type="text/css">
</head>
<?php
	require_once 'data/session.php';
	
	if(Session::try_login()){
		echo 'login_from_cookie()';
	}
?>
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
        	<h1>LOGIN PAGE</h1>
            <form action="data/login.php" method="post">
                <input type="text" name="e" placeholder="EMAIL">
                <input type="password" name="p" placeholder="PASSWORD">
                <input type="submit" value="LOGIN">
                <a href="register.php"><input type="button" value="REGISTER"></a>
            </form>            
        </div>
        <!--content end-->
        
    </div>
    <!--wrapper end-->
</body>
</html>