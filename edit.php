
<?php
// Elak logout pastu back
session_start();

if(!isset($_SESSION['username']))
{
	header('Location: index.php');
}

?>

<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Man City</title>
	<style>
		body
		{
			background-color: rgb(0, 134, 255);
			background-image: url('white.jpg');
			background-size: 100%;
		}
		#topbutton
		{
			background-color: transparent;
			border: none;
  			color: black;
  			padding: 10px 40px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 100%;
  			cursor: pointer;
  			font-family: arial;
  			outline: 0;
			  border: none;
			  -moz-outline-style: none;
		}
		#topbuttonProfile
		{
			background-color: transparent;
			border: none;
  			color: black;
  			padding: 10px 40px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 100%;
  			cursor: pointer;
		}
		#topbutton:hover
		{
			box-shadow: 0 3px 0 0 black;
		}
		#logoutbutton:hover
		{
			box-shadow: 0 3px 0 0 black;
		}
		#container
		{
    		text-align: center;
		}

/* -------------------------- DROPDOWN SELECT -------------------------- */
	    .containerdp {
		  width: 500px;
		  margin: 50px auto 0;
		  text-align: center
		}

		/*Styling Selectbox*/
		.dropdown {
		  width: 100%;
		  display: inline-block;
		  background-color: transparent;
		  border-radius: none;
		  box-shadow: none;
		  transition: all .5s ease;
		  position: relative;
		  color: black;
		  height: 100%;
		  text-align: center;
		  font-family: arial;
		  outline: 0;
		  border: none;
		  -moz-outline-style: none;
		}
		.dropdown .select {
		    cursor: pointer;
		    display: block;
		    padding: 10px;
		    font-size: 100%;
		}
		.dropdown .select > i {
		    font-size: 13px;
		    color: #888;
		    cursor: pointer;
		    transition: all .1s ease-in-out;
		    float: right;
		    line-height: 20px
		}
		.dropdown:hover {
		    box-shadow: 0 3px 0 0 black;
		}
		.dropdown:active {
		    background-color: transparent;
		}

		/* Bila tekan semakin besar/kecik */
		.dropdown.active:hover,
		.dropdown.active {
		    border-radius: none;
		    background-color: transparent;
		}
		.dropdown.active .select > i {
		    transform: rotate(-90deg);
		}
		.dropdown .dropdown-menu {
		    position: absolute;
		    background: rgba(255, 255, 255, 0.9);
		    width: 100%;
		    left: 0;
		    margin-top: 1px;
		    box-shadow: 0 1px 2px rgb(204, 204, 204);
		    border-radius: none;
		    overflow: hidden;
		    display: none;
		    max-height: 144px;
		    overflow-y: auto;
		    z-index: 9;
		    font-size: 80%;
		}
		.dropdown .dropdown-menu li {
		    padding: 10px;
		    transition: all .2s ease-in-out;
		    cursor: pointer
		} 
		.dropdown .dropdown-menu {
		    padding: 0;
		    list-style: none
		}
		.dropdown .dropdown-menu li:hover {
		    background-color: rgb(230,230,230);
		}

		a:visited { text-decoration: none; color:transparent; }
		a
		{
			text-decoration: none;
			color: black;
		}

		.container1
		{
			display: flex;
			justify-content: center;
		}
		.img-col
		{
			flex-basis: 0%;
		}


		.btn
		{
			width: 28%;
			height: 6%;
	        margin: 8px;
	        border: 2px solid rgb(0, 134, 255);
	        background-color: white;
	        border-radius: 30px;
	        box-sizing: border-box;
	        cursor: pointer;
		}
		.btn:hover
		{
			cursor: pointer;
			background-color: rgb(235,235,235);
		}
		.btn:focus
		{
			transform: translateY(2px);
			background-color: rgb(200,200,200);
			outline: none;
		}
		input
		{
			background-color: white;
			width: 35%;
			height: 28px;
	        border: 2px solid black;
	        box-sizing: border-box;
	        outline: none;
		}
		input:focus
		{
			background-color: ;
		}
		a:hover
		{
			background-color: white;
		}


	</style>
</head>
<body style="background-color: rgb(0, 134, 255);" align = "middle">
	
	<br><br>
	<h2 style="font-family: lucida handwriting; color: black;"><img style="margin: -16px 10px;" src="logo.png" alt="Homee Raub Logo" width="100px"> H O M E E<span style="color: transparent;">aa</span>R A U B <img style="margin: -16px 10px;" src="logo.png" alt="Homee Raub Logo" width="100px"></h2>
	<p style="color: black; font-family: Comic Sans MS;">The best platform for finding home around Raub</p>

	<br><br><br>
	<div id="container">
    	<button type="topbutton" onclick="window.location='home.php'" style="margin:10px 10px;" id="topbutton">Home</button>
    	<button type="topbutton" onclick="window.location='buy.php'" style="margin:10px 10px;" id="topbutton">Buy</button>
    	<button type="topbutton" onclick="window.location='sell.php'" style="margin:10px 10px;" id="topbutton">Sell</button>
    	 <span style="color: transparent;">________________________</span>
    	<button type="topbutton" onclick="window.location='players.php'" style="margin:10px 10px;" id="topbutton">About</button>


    	<div id="topbuttonProfile" style="margin:10px 10px;">
		  
		      <div class="dropdown">
		        <div class="select"><img src="user.png" style="width: 20px; margin: -3px 0px"> <?php echo $_SESSION['username']; ?> &#x25BC</div>
		        <input type="hidden" name="gender">
		        <ul class="dropdown-menu">
		          <li id="male" onclick="location.href='profile.php';">My Profile</li>
		          <li id="male" onclick="location.href='property.php';">My Property</li>
		          <li id="female" onclick="location.href='logout.php';">Logout</li>
		        </ul>
		      </div>
		</div>

		<hr>
		<br>

		
		<h2 style="color: black; font-family: lucida handwriting;">&#9733 MY PROFILE &#9733</h2>
		<span style="color: gray;">_____________________________________________________________________________________</span>
		<br><br>
		<span style="color: transparent;">_____________________________________________________________________________</span>
		<a href="profile.php" style="font-family: Times New Roman; border:1.5px solid black;"><span style="color: transparent;">.</span> &#10006 Cancel <span style="color: transparent;">.</span></a>
		<?php include('errors.php'); ?>
<br>
		<div class="container1">
			<div class="img-col">
		<img src="user.png" style="width: 170px; margin: 0px -120px;">
		
			</div>

			
		<form action="edit.php" method="post" autocomplete="off">
		<div class="text-col" align="left">
			<p style="margin: 5px 150px; font-family: arial; font-size: 25px;"><span style="font-size: 17px;">Username :</span><br><?php echo $_SESSION['username']; ?>

			<br><br><span style="font-size: 17px;">Email :<br></span>
			<input style="width: 120%;" type="text" name="email" value="<?php echo $_SESSION['email']; ?>">
		</p>

		<br><br>
		<p style='margin: 5px -75px; font-family: arial; font-size: 25px;'>
			<span style='font-size: 17px;'>First Name :</span><br>
		<?php

		if ($_SESSION['firstname'] != "")
			echo "<input type='text' name='firstname' value='" . $_SESSION['firstname'] . "'>";
		else
			echo "<input type='text' name='firstname' placeholder='Not set'>";
		?>
		<br><br>
		<span style="font-family: arial; font-size: 25px;"><span style="font-size: 17px;">Last Name :</span><br>
		<?php

		if ($_SESSION['lastname'] != "")
			echo "<input type='text' name='lastname' value='" . $_SESSION['lastname'] . "'>";
		else
			echo "<input type='text' name='lastname' placeholder='Not set'>";
		?>

		<br><br>
		<span style="font-family: arial; font-size: 25px;"><span style="font-size: 17px;">Age :</span><br>
		<input type="number" name="age" value="<?php echo $_SESSION['age']; ?>">

		<br><br>
		<span style="font-family: arial; font-size: 25px;"><span style="font-size: 17px;">Phone Number :</span><br>
		<?php
		if ($_SESSION['phonenum'] != "")
			echo "<input type='text' name='phonenum' value='" . $_SESSION['phonenum'] . "'>";
		else
			echo "<input type='text' name='phonenum' placeholder='Not set'>";
		?>
		</p>

		</div>
		<br>
		<input type="submit" class="btn" name="edit_form" value="Save">
        </form>

		</div>





		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script type="text/javascript">
			/*Dropdown Menu*/
		$('.dropdown').click(function () {
		        $(this).attr('tabindex', 1).focus();
		        $(this).toggleClass('active');
		        $(this).find('.dropdown-menu').slideToggle(200);
		    });
		    $('.dropdown').focusout(function () {
		        $(this).removeClass('active');
		        $(this).find('.dropdown-menu').slideUp(200);
		    });
		    $('.dropdown .dropdown-menu li').click(function () {
		        $(this).parents('.dropdown').find('span').text($(this).text());
		        $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
		    });
		/*End Dropdown Menu*/
		</script>

		<br><br>
		<br>
		<hr>
		<h6 style="color: black; text-align: center;">©2020 ITS232 Homee Raub</h6>


</body>
</html>