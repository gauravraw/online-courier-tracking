<html>
<head>
<title>signup Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<head>
<body>
 <div class="loginbox">
    <img src="logo1.png" class="avatar">
        <h1>User <br>signup Here</h1>
        <form action="userconn1.php" method="post" name="signup">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
			 <p>User ID</p>
            <input type="text" name="id" placeholder="Enter User ID" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
           <input name="submit" type="submit"  value="signup" >
            <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account?</a>
        </form>
         
    </div>
	

</body>
</html>