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


$id = $_POST['id'];
//$name=$_POST['username'];
$pass=$_POST['password'];


$q = " select * from user where id='$id' && password='$pass' ";

$result = mysqli_query($db, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['id'] = $id;
	header('location:project.php');
}else{
	echo "<script>
window.location.href='userlogin.php';
alert('login failed');
</script>";
	//header('location:index.php');
}

?>