
<!doctype html>
<html>
<head>
	<title> courier tracking system </title>
	<style>
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
	<link rel="stylesheet" type="text/css" href="mystyle_2.css" />
</head>
<body style=" background-size: 100% 100vh; background-repeat: no-repeat; background-position: relative;">
	<marquee direction="right"><h1>COURIER TRACKING SYSTEM </h1></marquee>
		<div class="navbar">
   <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
 
 
  <div class="dropdown">
    <button class="dropbtn">LOGIN
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="index.php">admin</a>
      <a href="userlogin.php">user</a>
      
    </div>
  </div> 
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