
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
		  background-color: rgb(255, 255, 255);
		}

		tr:nth-child(odd) {
		  background-color: rgb(255, 255, 255);
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
		input[type=radio] {
		    border: 0px;
		    width: 0%;
		    height: 0em;
		}
		input[type=submit] {
		    margin: 0px -30px;
		    border: 5px solid transparent;
		    background-color: transparent;
		    font-size: 23px;
		    cursor: pointer;
		    text-align: center;
		    outline: none;
		}
		input[type=submit]:hover {
		    color: red;
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

		
		<h2 style="color: black; font-family: lucida handwriting;">MY PROPERTY</h2>
		<span style="color: gray;">_____________________________________________________________________________________________________________________________</span>
		<br><br>
		

		<table class="center" style="box-shadow: 10px 10px gray;">
				
			<?php
				$userid = $_SESSION['userid'];
				$sql = "SELECT * FROM property WHERE userid='$userid' ORDER BY propertyid DESC";
				$result = $db->query($sql);
				
				if ($result->num_rows > 0) {
					echo"<br><tr>
					<th style='text-align: center;'>" . $_SESSION['sellername'] . "'s Property</th>
					<th style='text-align: center;'>Contact Details</th>
					<th style='text-align: center;'> Edit </th>
				</tr>";
				    // output data of each row
				     while($row = $result->fetch_assoc()) {
				echo "
				
				<tr>
				<td>
					<div style='color : transparent;'><p style='float: left;'>__<img src='logo.png' style='width:150px;'>__</p></div><br><strong>For ". $row["type"]. "</strong><br> ". $row["propertyname"]. "<br><span style='font-family : Calibri;'><i>" . $row["propertyaddress"]. "</i></span><br><span style='color : red;'>RM</span>";
				        if ($row["type"] == 'Rent')
				        	echo "<span style='color : red;'>" . $row["propertyprice"] . " / month</span>";
				        else
				        	echo "<span style='color : red;'>" . $row["propertyprice"] . "</span>";


				        echo "<br><br>
				</td>
				<td>

				        <br>" . $row["sellername"] . "<br>" . $row["phonenum1"] . "<br><span style='font-family : Times New Roman;'>" . $row["email1"] ."</span><br><br>
				</td>

				<td style='text-align:center;'>
					<form action='edit2.php' method='post' autocomplete='off'>
						<input type='radio' name='nasi' value='" . $row["propertyid"] . "' checked></input><br>
						<input type='submit' class='btn' name='edit2' value='&#9998'></input><br><span style='color:transparent;'>.</span>
					</form>
				</td></tr>";
				}
			} else {
				 echo "<br><i>You did not submit any property</i>";
			}

			?>
		</table>




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

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br>
		<hr>
		<h6 style="color: black; text-align: center;">©2020 ITS232 Homee Raub</h6>


</body>
</html>