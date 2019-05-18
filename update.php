<html>
<head>
	<title>update</title>
</head>
<body>
		<marquee direction="right"><h1>COURIER TRACKING SYSTEM </h1></marquee>
		<center><div style="border-style:solid;border-color:skyblue; margin-left: 400px;margin-right: 400px;background-image:radial-gradient(skyblue, white, lightblue);">
		<h1>UPDATE STATUS<h2>
		<form action="u.php" method="post" name="update">
			<p>Consignment no.</p>
			<input type="number" name="cno" value=""><br>
			<p>Current city:</p>
			<input type="text" name="city" value=""><br>
			<p>Current Status:</p>
			<br>
			<select name="status"> 
			<option value="">--choose--</option>
			<option value="pass">pass</option>
			<option value="deliver">deliver</option>
			</select>
			<input type="submit" value="update" name="update">

		</form>
		
		
		</body>
</html>