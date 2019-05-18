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

$name = $_POST['username'];
$pass = $_POST['password'];
$id=$_POST['id'];


$q = " select * from user  where id = '$id' ";

$result = mysqli_query($db, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	
	echo "<script>
window.location.href='user_signup.php';
alert('userid already exist');
</script>";
	//header('location:signup.php');


}else{
	$q1="insert into user values('$id','$name','$pass')";
	 mysqli_query($db, $q1);
	header('location:userlogin.php');
}

?>