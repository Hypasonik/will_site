<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NWR-NEW-searchpage</title>
<link rel="stylesheet" href="styles/style.css" type="text/css">
</head>

<body>
	<!--header start-->
    <div class="header">
    </div>
    <!--header end-->
    
    <!--wrapper start-->
	<div class="wrapper">
    
        <!--content start-->
        <div class="content">
        	<h1>REGISTER PAGE</h1>
            <form action="data/register.php" method="POST">
                <input type="text" name="first_name" placeholder="NAME"><br>
                <input type="text" name="last_name" placeholder="SURNAME"><br>
                <input type="email" name="email" placeholder="EMAIL"><br>
                <input type="text" name="firm_name" placeholder="FIRM NAME (OPTIONAL)"><br>
                <input type="text" name="registration_number" placeholder="REGISTRATION NUMBER"><br>
                <input type="text" name="sa_id" placeholder="SOUTH AFRICAN ID/PASSPORT"><br>
                <input type="text" name="tel_number" placeholder="TEL NUMBER"><br>
                <input type="text" name="tel_number_2" placeholder="TEL NUMBER 2 (OPTIONAL)"><br>
                <textarea name="business_address" placeholder="BUSINESS ADDRESS"></textarea><br>
                <textarea name="postal_address" placeholder="POSTAL ADDRESS (OPTIONAL)"></textarea><br>
                <h3>CAPTCHA PLACEHOLDER</h3><br>
                <input type="submit" name="submit" value="REGISTER">
            </form>
        </div>
        <!--content end-->
              
	</div>
    <!--wrapper end-->
</body>
</html>