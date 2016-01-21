<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NWR-NEW-searchpage</title>
<link rel="stylesheet" href="styles/style.css" type="text/css">
</head>
<?php

require "data/config.php";
require "data/db.php";
require "data/will.php";
require "data/exuser.php";

$receipt_number = $_GET['r'];
$will = get_will($receipt_number);
$ex = new Exuser($will->get('lawyer_id'));


function get_will($receipt_number){
		
	$result = select("receipts", "value = '$receipt_number'");
	
	while($row = mysqli_fetch_array($result)) {
		$will_id = $row['will_id'];
		return new Will($will_id);
	}
}

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
        	<h1>RECIEPT PAGE</h1>
            
            <div id="receipt">
            <p>Receipt Number: <?php echo $_GET['r']; ?></p>
            <p>Testator id: <?php echo $will->get('testator_id'); ?></p>
            <p>Testator name: <?php echo $will->get('testator_name'); ?></p>
            <p>Testator surname: <?php echo $will->get('testator_surname'); ?></p>
            <p>Extended_user name: <?php echo $ex->get('first_name'); ?></p>
            <p>Extended_user surname: <?php echo $ex->get('last_name'); ?></p>
            <p>date submitted: <?php echo date("Y-m-d H:i:s", $will->get('timestamp')); ?></p>
            <p>submitted by: <?php echo $will->get('lawyer_id'); ?></p>
            <p>codicil or new will: <?php echo $will->get('codicil_id'); ?></p>
            <p>date on will: <?php echo $will->get('creation_date'); ?></p>
            
            <a href="javascript:window.print()"><button>PRINT</button></a>
            </div>
            
        </div>
        <!--content end-->
              
	</div>
    <!--wrapper end-->
</body>
</html>