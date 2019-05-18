<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<head>
<body>
 <div class="loginbox">
    <img src="logo1.png" class="avatar">
        <h1>User <br>Login Here</h1>
        <form action="userconn.php" method="post" name="login">
            <p>User id</p>
            <input type="text" name="id" placeholder="Enter Userid" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
           <input name="submit" type="submit"  value="Login" ><br>
		   New User?<a href="user_signup.php"><h1>Sign Up</a>
            <a href="#">Lost your password?</a><br>
        </form>
         
    </div>
	

</body>
</html>