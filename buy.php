<?php

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
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Homee Raub</title>
	<script src= "https://code.jquery.com/jquery-1.12.4.min.js"></script> 
	<style>
		body
		{
			background-color: rgb(0, 134, 255);
			background-image: url('white.jpg');
			background-size: 100%;
		}
		h1
		{
			background-image: none;
  			-webkit-text-fill-color: rgb(50, 255, 255);
  			-webkit-text-stroke-width: 4px;
  			-webkit-text-stroke-color: black;
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
		#container
		{
    		text-align: center;
		}
		.center
		{
			margin-left: auto;
			margin-right: auto;
		}
		table
		{
			font-family: arial;
			border-collapse: collapse;
		  	width: 55%;
		}
		th {
		  border: 1px solid black;
		  background-color: rgb(255, 255, 255);
		  text-align: left;
		  padding: 8px;
		}
		td {
		  border: 1px solid black;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: rgb(240, 240, 240);
		}

		tr:nth-child(odd) {
		  background-color: rgb(225, 255, 255);
		}

		input[type=radio] 
	    {
		    border: 0px;
		    width: 30px;
		    height: 1.3em;
		}

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
		}
		.search
		{
			float: right;
			margin: 0px -5% 0 -60%;
			display: inline;
		}
		.sort
		{
			margin: -10px 28% 0 1%;

		}
		.sea
		{
			width: 200px;
			height: 18px;
		}

	</style>
</head>

<body align="middle">
	
	<br><br>
	<h2 style="font-family: lucida handwriting; color: black;"><img style="margin: -16px 10px;" src="logo.png" alt="Homee Raub Logo" width="100px"> H O M E E<span style="color: transparent;">aa</span>R A U B <img style="margin: -16px 10px;" src="logo.png" alt="Homee Raub Logo" width="100px"></h2>
	<p style="color: black; font-family: Comic Sans MS;">The best platform for finding home around Raub</p>

	<br><br><br>
	<div id="container">
    	<button type="topbutton" onclick="window.location='home.php'" style="margin:10px 10px;" id="topbutton">Home</button>
    	<button type="topbutton" onclick="window.location='buy.php'" style="margin:10px 10px; box-shadow: 0 3px 0 0 black;" id="topbutton">Buy</button>
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

    </div>
	<hr><br>
	<p style="font-size: 18px; font-family: arial; margin: 0px 45% 20px 0;">Sort By :</p>
	<div class="sort">
			
            <label style="font-family: Comic Sans MS; font-size: 20px; margin: 2% 2%;">
                <input checked="checked" id="nasi" type="radio" name="type" value="All1" style="font-size: 15px;">All</label> 
            <label style="font-family: Comic Sans MS; font-size: 20px; margin: 2% 2%;">
                <input type="radio" name="type" value="Rent" style="font-size: 15px;">Rent only</label> 
                <label style="font-family: Comic Sans MS; font-size: 20px; margin: 2% 2%;">
                <input type="radio" name="type" value="Sale" style="font-size: 15px;">Sale only</label>
                <div class="search">
                <form>
                	<input class="sea" type="type" placeholder="Search.." name="search">
                	<button style="height: 24px;" type="submit"><i class="fa fa-search"></i></button>
                </form> 
                </div>
	</div>
 
	<br>

	<!-- Start of for ALL -->
	<div class="All1 selectt"> 
		<table class="center" style="box-shadow: 10px 10px gray;">
				<tr>
					<th style="text-align: center;">Property Details</th>
					<th style="text-align: center;">Contact Details</th>
				</tr>
			<?php
				$sql = "SELECT type, propertyname, propertyaddress, propertyprice, sellername, phonenum1, email1 FROM property ORDER BY propertyid DESC";
				$result = $db->query($sql);
				
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<tr><td><div style='color : transparent;'><p style='float: left;'>__<img src='logo.png' style='width:150px;'>__</p></div><br><strong>For ". $row["type"]. "</strong><br> ". $row["propertyname"]. "<br><span style='font-family : Calibri;'><i>" . $row["propertyaddress"]. "</i></span><br><span style='color : red;'>RM</span>";
				        if ($row["type"] == 'Rent')
				        	echo "<span style='color : red;'>" . $row["propertyprice"] . " / month</span>";
				        else
				        	echo "<span style='color : red;'>" . $row["propertyprice"] . "</span>";
				        echo "<br><br></td><td><br>" . $row["sellername"] . "<br>" . $row["phonenum1"] . "<br><span style='font-family : Times New Roman;'>" . $row["email1"] ."</span><br><br></tr>";
				    }
				} else {
				    echo "<br>No property to be shown yet";
				}

			?>
		</table>
	</div> 
	<!-- End of for ALL -->

	<!-- Start of for Rent -->
	<div class="Rent selectt"> 
		<table class="center" style="box-shadow: 10px 10px gray;">
				<tr>
					<th style="text-align: center;">Property Details</th>
					<th style="text-align: center;">Contact Details</th>
				</tr>
			<?php
				$sql = "SELECT type, propertyname, propertyaddress, propertyprice, sellername, phonenum1, email1 FROM property ORDER BY propertyid DESC";
				$result = $db->query($sql);
				
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	if ($row["type"] == 'Rent'){
					        echo "<tr><td><div style='color : transparent;'><p style='float: left;'>__<img src='logo.png' style='width:150px;'>__</p></div><br><strong>For ". $row["type"]. "</strong><br> ". $row["propertyname"]. "<br><span style='font-family : Calibri;'><i>" . $row["propertyaddress"]. "</i></span><br><span style='color : red;'>RM</span>";
					        if ($row["type"] == 'Rent')
					        	echo "<span style='color : red;'>" . $row["propertyprice"] . " / month</span>";
					        else
					        	echo "<span style='color : red;'>" . $row["propertyprice"] . "</span>";
					        echo "<br><br></td><td><br>" . $row["sellername"] . "<br>" . $row["phonenum1"] . "<br><span style='font-family : Times New Roman;'>" . $row["email1"] ."</span><br><br></tr>";
				    	}
					}
				} else {
				    echo "<br>No property to be shown yet";
				}

			?>
		</table>
	</div> 
	<!-- End of for Rent -->

	<!-- Start of for Sale -->
	<div class="Sale selectt"> 
		<table class="center" style="box-shadow: 10px 10px gray;">
			<tr>
				<th style='text-align: center;'>Property Details</th>
					<th style='text-align: center;'>Contact Details</th>
				</tr>
			<?php
				$sql = "SELECT type, propertyname, propertyaddress, propertyprice, sellername, phonenum1, email1 FROM property ORDER BY propertyid DESC";
				$result = $db->query($sql);

				
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	if ($row["type"] == 'Sale'){
					        echo "
					
				<tr><td><div style='color : transparent;'><p style='float: left;'>__<img src='logo.png' style='width:150px;'>__</p></div><br><strong>For ". $row["type"]. "</strong><br> ". $row["propertyname"]. "<br><span style='font-family : Calibri;'><i>" . $row["propertyaddress"]. "</i></span><br><span style='color : red;'>RM</span>";
					        if ($row["type"] == 'Rent')
					        	echo "<span style='color : red;'>" . $row["propertyprice"] . " / month</span>";
					        else
					        	echo "<span style='color : red;'>" . $row["propertyprice"] . "</span>";
					        echo "<br><br></td><td><br>" . $row["sellername"] . "<br>" . $row["phonenum1"] . "<br><span style='font-family : Times New Roman;'>" . $row["email1"] ."</span><br><br></tr>";
				    	}
					}
				} else {
				    echo "<br>No property to be shown yet";
				}

			?>
		</table>
	</div> 
	<!-- End of for Sale -->

        <br><br>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script type="text/javascript"> 
			
			// set timeout clicked
			$( function() {
			    setTimeout(function() {
			        $('#nasi').trigger('click');
			    }, 0);
			});

            $(document).ready(function() { 
                $('input[type="radio"]').click(function() { 
                    var inputValue = $(this).attr("value"); 
                    var targetBox = $("." + inputValue); 
                    $(".selectt").not(targetBox).hide(); 
                    $(targetBox).show(); 
                }); 
            }); 

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

	<br><br><br><br><br><br><br><br>
	<br>
	<br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br>
	<br>
	
	
	<br>
	<br>
	<br><br><br><br>
	<br>
	<hr>
	<h6 style="color: black; text-align: center;">©2020 ITS232 Homee Raub</h6>


</body>
</html>