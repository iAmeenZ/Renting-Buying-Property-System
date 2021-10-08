<?php include('server.php') ?>

<!DOCTYPE html>

<html>

	<style>
		body
		{
			background-color: rgb(0, 134, 255);
			background-image: url('login2.jpg');
			background-size: cover;

		}
		input[type=text], select 
		{
			  width: 95%;
			  padding: 12px 20px;
			  margin: 8px ;
			  border: 3px solid rgb(0, 134, 255);
			  border-radius: 30px;
			  box-sizing: border-box;
		}
		input[type=password], select 
		{
			  width: 95%;
			  padding: 12px 20px;
			  margin: 8px ;
			  border: 3px solid rgb(0, 134, 255);
			  border-radius: 30px;
			  box-sizing: border-box;
		}


		input[type=submit] 
		{
			  width: 95%;
			  background-color: rgb(0, 134, 255);
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  border-radius: 30px;
			  cursor: pointer;
		}

		input[type=submit]:hover
		{
		  	background-color: rgb(0, 80, 260);
		}

		div
		{
			display: inline-block;
		  	width: 30%;
		 	border-radius: 30px;
		  	background-color: none;
		  	padding: 20px;
		}

		#login
		{
			color: white; 
			font-family: arial; 
			text-decoration: none;"
		}
		#login:hover
		{
			color: rgb(0, 193, 255);
		}



	</style>

	<body style="background-color: rgb(0, 134, 255);" align="middle">

		<br>
		<br>
		<h2 style="font-family: Comic Sans MS; color: rgb(255,255,255);"><img style="margin: -30px 10px;" src="man city logo.png" alt="Man City Logo" width="100px">MANCHESTER CITY FOOTBALL CLUB<img style="margin: -30px 10px;" src="man city logo.png" alt="Man City Logo" width="100px"></h2>
		<br>
		<div style="background-image: none;">
			<h3 style="color: white; font-family: sans-serif;">REGISTRATION</h6>
		  <form action="submit.php" method="post">
		  	<?php include('errors.php'); ?>
		    <label style="font-family: Arial; color: white;">Username</label>
		    <br>
		    <input type="text" id="username1" name="username1" placeholder="Your username..">

		    <br><br>
		    <label style="font-family: Arial; color: white;">Password</label>
		    <br>
		    <input type="password" id="password1" name="password1" placeholder="Your password..">

		    <br><br>
		    <label style="font-family: Arial; color: white;">Confirm Password</label>
		    <br>
		    <input type="password" id="password2" name="password2" placeholder="Confirm your password..">

		    
		    <br>
		    <br>
		    <input type="submit" class="btn" name="reg_user" value="Submit">
		  </form>
		  	<br>
		  	<br>
			<hr>
			<br>
			<a id="login" href="index.php">Already have an account? Login here</a>
		</div>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<hr>
		<h6 style="color: rgb(255, 255, 255); text-align: center;">HTML Code by Nur Ameerul Ameen ©2020</h6>

	</body>

</html>

