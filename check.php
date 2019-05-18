<?php
session_start();

$user='root';
$pass='';
$db='login';
$db=new mysqli('localhost',$user,$pass,$db) ;
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
mysqli_select_db($db, 'login');
	$cno = $_POST['cno'] ;
	//$loc=$_POST['location'];
	$sql = "SELECT location from book where cno='$cno' "  ;
	$records = mysqli_query($db,$sql);
	if(!$records)
	{
		echo 'error' ;
	}

?>
<html>
<head>
</head>
<body>
		<p>current location: <?php echo $cno;?></p>
</body>
