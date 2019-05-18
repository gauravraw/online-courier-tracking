<?php

session_start();
if(!isset($_SESSION['id'])){
	header('location:index.php');
	
}
?>

<!doctype html>
<html>
<head>
	<title> courier tracking system </title>
	<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
	<link rel="stylesheet" type="text/css" href="mystyle_2.css" />
</head>
<body style=" background-size: 100% 100vh; background-repeat: no-repeat; background-position: relative;">
	<marquee direction="right"><h1>COURIER TRACKING SYSTEM </h1></marquee>
		<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="update.php">Update</a>
</div>
	<div>
			<h3>welcome  Admin <u><?php echo $_SESSION['id']; ?></u></h3>
			<a href="logout.php">LOGOUT</a>
		</div>
		<br>
		<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="i2.jpg" style="width:100%">
  
</div>



<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="i3.jpg" style="width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="i5.png" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
 
</div>

		<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); 
}
</script>

</body>
</html>