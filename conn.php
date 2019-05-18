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

//$name = $_POST['username'];
$pass = $_POST['password'];
$id = $_POST['id'];


$q = " select username from admin  where id = '$id' && password = '$pass' ";

$result = mysqli_query($db, $q);
    
$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['id'] = $_POST['id'];
	
	header('location:project1.php');


}else{
	$message = "login unsuccessful";
			echo "<script type='text/javascript'>alert('$message');</script>";
	
	//header('location:index.php');
}

?>