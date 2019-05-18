<html>
<head>
<title>Book consignment here</title>
    
	<head>
	<style>
	
	 background-attachment: fixed;}
	 label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .4rem 0;
}


</style>
<body>
 
    <marquee direction="right"><h1>COURIER TRACKING SYSTEM </h1></marquee>
        <h1>BOOK <br>your consignment</h1>
		
			
			
        <center><div style="border-style:solid;border-color:skyblue; margin-left: 300px;margin-right: 300px;background-image:radial-gradient(skyblue, white, lightblue);"><form action="comp.php" method="post" name="book">
            <p>userid:</p>
            <?php

				session_start();
				if(!isset($_SESSION['id'])){
				header('location:index.php');
	
					}
				echo $_SESSION['id'] ;
				?>
            <p>source address</p>
            <p>city:</p>
			<input type="text" name="city1" placeholder="Enter city" required><br>
            <p>pincode:</p>
			<input type="text" name="pincode1" placeholder="Enter pincode" required><br>
			<p>destination address</p>
            <p>city:</p>
			<input type="text" name="city2" placeholder="Enter city" required><br>
			<p>pincode:</p>
			<input type="text" name="pincode2" placeholder="Enter pincode" required><br>
			<p>weight(in gm):</p>
			<input type="text" name="weight" placeholder="Enter weight" required><br>
			<p><label for="phone">sender's phone number:</label></p>

			<input type="tel"  name="phone1"
				
							required><br>
							<p><label for="phone">Receiver's phone number:</label></p>

			<input type="tel"  name="phone2"
				
							required><br>
					<p><label>booking date:</label></p>

			<input type="date" name="date"
   
					value="<?php echo date("Y-m-d") ?>"><br>

				<p>choose consignment type:</p>
				<select name="type"> 
			<option value="">--choose--</option>
			<option value="domestic">domestic</option>
			<option value="International">International</option>
			</select><br><br>
           <input name="submit" type="submit"  value="book" ><br>
		  
        </form></div>
         
    
	

</body>
</html>