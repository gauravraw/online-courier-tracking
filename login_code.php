<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$username = $password = $pwd = '';

$username = $_POST['username'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	echo "login success";
}
else
{
	echo "Invalid username or password";
}
?>