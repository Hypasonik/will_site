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
        	<h1>UPLOAD PAGE</h1>
            <form action="data/upload.php" method="POST">
                <input type="text" name="name" placeholder="NAME">
                <input type="text" name="id" placeholder="ID">
                <input type="file" name="upload" accept="application/pdf">
                <input type="submit" name="submit" value="UPLOAD">
            </form>
        </div>
        <!--content end-->
              
	</div>
    <!--wrapper end-->
</body>
</html>