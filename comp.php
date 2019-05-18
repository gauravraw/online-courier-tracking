<html>
<head>
	<title>Booking confirm</title>
</head>
<body>
		<marquee direction="right"><h1>COURIER TRACKING SYSTEM </h1></marquee>
		<center><div style="border-style:solid;border-color:skyblue; margin-left: 400px;margin-right: 400px;background-image:radial-gradient(skyblue, white, lightblue);">
	<h1>Booking Confirmed!<h2>
	<h2>Hello, <?php 
	 session_start();
	 if(!isset($_SESSION['id'])){
				header('location:index.php');
	
					}
				echo $_SESSION['id'] ;
	 ?>
	 	
	 </h2>
	<p><h3 style="color:red;"><u>Booking Details</u></h3></p>
	consignment Number:<?php 
	$cno = mt_rand(100,1000) ;
	echo($cno);?>
	 <p>source address:</p>
	 city: <?php 
	 $city1 = $_POST['city1'] ;
	 echo $city1; ?></h2><br>
	 pincode: <?php 
	 $pincode1 = $_POST['pincode1'] ;
	 echo $pincode1; ?></h2>
	 <p>Destination address:</p>
	 city: <?php 
	 $city2 = $_POST['city2'] ;
	 echo $city2; ?></h2><br>
	 pincode: <?php 
	 $pincode2 = $_POST['pincode2'] ;
	 echo $pincode2; ?></h2><br><br>
	 weight: <?php 
	 $weight = $_POST['weight'] ;
	 echo $weight ; ?>gm</h2>
	 <br><br>
	 sender's Mobile no.: <?php
	 $smo = $_POST['phone1'] ;
	 echo $smo ; ?></h2>
	 <br><br>
	  receiver's Mobile no.: <?php 
	  $rmo = $_POST['phone2'] ;
	  echo $rmo ; ?></h2>
	 <br><br>
	 Booking Date: <?php 
	 $date = $_POST['date'] ;
	 echo $date; ?></h2>
	 <br><br>
	 Booking Type: <?php 
	 $btype = $_POST['type'] ;
	 echo $btype ; ?></h2>
	 </div>
	 <?php
	 		$con = mysqli_connect('localhost','root','');
	 		if(!$con)
	 		{
	 			echo 'connection failed' ;
	 		}
	 		if(!mysqli_select_db($con , 'login'))
	 		{
	 			echo 'database not found' ;
	 		}
	 		$sql = "INSERT INTO book values('$cno','$city1','$pincode1','$city2','$pincode2','$smo','$rmo','$date','$btype','$del','$cost')" ;
	 		
	 		if(!mysqli_query($con,$sql))
	 		{
	 			echo 'query running field' ;
	 		}
	 		else
	 		{
	 			echo "booked";
	 		}
	 		//header("refresh:2 ; url=book.php");
	 ?>
	 <a href="project.php"><h2>HOME</h2></a>
	 
</body>
</html>