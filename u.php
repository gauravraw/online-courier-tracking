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
$cno = $_POST['cno'];
$city=$_POST['city'];
$status=$_POST['status'];
$q="select * from book where cno='$cno'";
$result1 = mysqli_query($db, $q);
$num = mysqli_num_rows($result1);

if($num ==1){
	$q2="select * from track where cno='$cno' && status='deliver'";
	$result2 = mysqli_query($db, $q2);
	$num1 = mysqli_num_rows($result2);
	if($num1==0)
	{
	$q1="insert into track values('$cno','$city','$status')";
	$result = mysqli_query($db, $q1);
	echo "<script>
window.location.href='project1.php';
alert('update successfully');
</script>";
	}
	else{
		echo "<script>
window.location.href='update.php';
alert('Data delievered');
</script>";
	}
}else{
	echo "<script>
window.location.href='update.php';
alert('No data found');
</script>";
	//header('location:index.php');
}
?>