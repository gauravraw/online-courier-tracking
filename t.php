
<html>
<head>
	<title>Track</title>
</head>
<body>
		<marquee direction="right"><h1>COURIER TRACKING SYSTEM </h1></marquee>
		<center><div style="border-style:solid;border-color:skyblue; margin-left: 400px;margin-right: 400px;background-image:radial-gradient(skyblue, white, lightblue);">
		<h1>Trackinig Detail<h2>
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
$cno=$_POST['cno'];
$q = " select * from track  where cno='$cno' ";
$result = mysqli_query($db, $q);

$num = mysqli_num_rows($result);

/*f($num == 1){
	$res = mysqli_fetch_array($result);
	$cur_count = $res["city1"];*/
	//header('location:project1.php');
	echo "consignment no:";echo $cno;echo "<br><br>";
	while($row = mysqli_fetch_array($result))
	{
      echo "city  :";echo $row[1] ;echo ";    status  :";echo $row[2];echo "<br><br>";
	}

?>
	
			
		</div>
		</body>
		<a href="project.php"><h2>HOME</h2></a>
</html>