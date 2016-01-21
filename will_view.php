<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NWR-NEW-searchpage</title>
<link rel="stylesheet" href="styles/style.css" type="text/css">
</head>
<?php
	
?>
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
            <form action="data/upload.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="n" placeholder="NAME">
                <input type="text" name="sn" placeholder="SURNAME">
                <input type="text" name="id" placeholder="ID">
                <input type="file" id="f" name="f" accept="application/pdf">
                <input type="hidden" name="l" value="1234">
                <input type="text" name="c" value="1">
                <input type="date" name="d" max="<?php echo date("Y-m-d", time()); ?>">
                <input type="submit" name="submit" value="UPLOAD">
            </form>
            
            
        </div>
        <!--content end-->
              
	</div>
    <!--wrapper end-->
</body>
</html>