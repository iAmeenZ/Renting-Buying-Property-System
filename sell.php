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
	<title>Homee Raub</title>
	<script src= "https://code.jquery.com/jquery-1.12.4.min.js"> 
    </script> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		.selectt { 
            color: black; 
            padding: none; 
            display: none; 
            margin-top: 1px; 
            width: 100%; 
            background: transparent;
        } 
          
        label { 
            margin-right: 0px; 
        } 

		/* Remove arrow up/down in input number */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
		  -webkit-appearance: none;
		  margin: 0;
		}

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

	input[type=text], select 
    {
        width: 95%;
        padding: 12px 20px;
        margin: 8px ;
        border: 3px solid rgb(228, 200, 0);
        border-radius: 30px;
        box-sizing: border-box;
        text-align: center;
        outline: none;
    }
    input[type=number], select 
    {
        width: 50%;
        padding: 12px 20px;
        margin: 8px ;
        border: 3px solid rgb(228, 200, 0);
        border-radius: 30px;
        box-sizing: border-box;
        text-align: center;
        outline: none;
    }
    input[type=email], select 
    {
        width: 95%;
        padding: 12px 20px;
        margin: 8px ;
        border: 3px solid rgb(228, 200, 0);
        border-radius: 30px;
        box-sizing: border-box;
        text-align: center;
        outline: none;
    }


    input[type=submit] 
    {
        width: 95%;
        background-color: rgb(228, 177, 0);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        outline: none;
    }

    input[type=submit]:hover
    {
        background-color: rgb(228, 160, 0);
    }

    input[type=radio] 
    {
	    border: 0px;
	    width: 40px;
	    height: 1.5em;
	}

    div.form
    {
      display: inline-block;
        width: 30%;
      border-radius: 30px;
        background-color: none;
        padding: 20px;
    }

    #login
    {
      color: black; 
      font-family: arial; 
      text-decoration: none;"
    }
    #login:hover
    {
      color: rgb(0, 100, 255);
    }

		

		#button1
		{
			background-image: url('homee3.jpg');
  			color: black;
  			width: 420px;
  			height: 150px;
  			display: inline-block;
  			font-size: 280%;
  			cursor: pointer;
  			background-size: none;
		}
		#button1:hover
		{
			border: 3px solid white;
		}
		#button2
		{
			background-image: url('homee3.jpg');
  			color: black;
  			width: 420px;
  			height: 150px;
  			display: inline-block;
  			font-size: 280%;
  			cursor: pointer;
		}
		#button2:hover
		{
			border: 3px solid white;
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

label.cursor
{
  border: 2px solid black;
  box-shadow: 3px 3px gray;
}
label.cursor:hover
{
  cursor: pointer;
  background-color: rgb(228, 200, 0);
}
label.cursor:active{
  background-color: rgb(228, 150, 0);
  box-shadow: 3px 3px black;
}

input[type="radio"]:checked + span
{ 
    font-weight: bold;
    color: rgb(190, 0, 0);
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
    	<button type="topbutton" onclick="window.location='buy.php'" style="margin:10px 10px;" id="topbutton">Buy</button>
    	<button type="topbutton" onclick="window.location='sell.php'" style="margin:10px 10px; box-shadow: 0 3px 0 0 black;" id="topbutton">Sell</button>
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
    <hr>
<br><br>
<h2 style="color: black; font-family: lucida handwriting;">PROPERTY DETAILS FORM</h2>
        
        
    <div align="center" class="form" style="background-image: none; padding: 50px solid white;">
<!--
      	<input type="radio" id="rent" name="type" value="Rent">
		  <label for="rent" style="font-family: arial; font-size: 23px;">For rent</label><br>
        <input type="radio" id="sale" name="type" value="Sale">
		  <label for="sale" style="font-family: arial; font-size: 23px;">For sale</label><br>
-->
		<label style="font-family: Arial; color: black;">Property is for :</label>
		<br><br>
        <div>

          <label>

            <label class="cursor" style="font-family: arial; font-size: 23px; margin: 5% 5%;"> 
                <input type="radio" name="type" value="Rent" style="font-size:0px; opacity: 0%; cursor: pointer;"><span>Rent</span><span style="opacity: 0%;">___.</span></label> 
            <label class="cursor" style="font-family: arial; font-size: 23px; margin: 5% 5%;">
                <input type="radio" name="type" value="Sale" style="font-size: 0px; opacity: 0%; cursor: pointer;"><span>Sale</span><span style="opacity: 0%;">___.</span></label> 
          </label>
        </div>


        <br><hr><br>
        <?php include('errors.php'); ?>
        <!-- Start of for rent -->
        <div class="Rent selectt"> 
        	<form action="sell.php" method="post" autocomplete="off">
          <h3 style="color: black; font-family: sans-serif;">Rent Property Details</h3>

        <label style="font-family: Arial; color: black;">Property Name<span style="color: red;">*</span></label>
        <br>
        <input type="text" name="propertyname" value="<?php echo $propertyname; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Full Address<span style="color: red;">*</span></label>
        <br>
        <input type="text" name="propertyaddress" value="<?php echo $propertyaddress; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Rental Price<span style="color: red;">*</span></label>
        <br>
        RM
        <input type="number" name="propertyprice" value="<?php echo $propertyprice; ?>">
        / month

        <br><br>
        

		<h3 style="color: black; font-family: sans-serif;">Contact Details</h3>

        <label style="font-family: Arial; color: black;">Seller Name<span style="color: red;">*</span></label>
        <br>
        <input type="text" name="sellername" value="<?php echo $_SESSION['firstname']; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Phone Number<span style="color: red;">*</span></label>
        <br>
        <input type="text" name="phonenum1" value="<?php echo $_SESSION['phonenum']; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Email<span style="color: red;">*</span></label>
        <br>
        <input type="email" name="email1" value="<?php echo $_SESSION['email']; ?>">

        <br><p><i><span style="color: red;">*Required</span></i></p>
        <br>
        <input type="submit" class="btn" name="reg_form" value="Submit">
        <input style="opacity: 0%" type="radio" name="type" value="Rent" checked="checked">
        </form>
        </div> 
        <!-- End of for rent -->


        <!-- Start of for sale -->

        <div class="Sale selectt"> 
        	<form action="sell.php" method="post" autocomplete="off">
          <h3 style="color: black; font-family: sans-serif;">Sale Property Details</h3>

        <label style="font-family: Arial; color: black;">Property Name<span style="color: red;">*</span></label>
        <br>
        <input type="text" name="propertyname" value="<?php echo $propertyname; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Full Address<span style="color: red;">*</span></label>
        <br>
        <input type="text" name="propertyaddress" value="<?php echo $propertyaddress; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Selling Price<span style="color: red;">*</span></label>
        <br>
        RM
        <input type="number" name="propertyprice" value="<?php echo $propertyprice; ?>">
        <span style="color: transparent;">_____</span>

        <br><br>
		<h3 style="color: black; font-family: sans-serif;">Contact Details</h3>

        <label style="font-family: Arial; color: black;">Seller Name<span style="color: red;">*</span></label>
        <br>
        <input type="text" name="sellername" value="<?php echo $_SESSION['firstname']; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Phone Number<span style="color: red;">*</span></label>
        <br>
        <input type="text" name="phonenum1" value="<?php echo $_SESSION['phonenum']; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Email<span style="color: red;">*</span></label>
        <br>
        <input type="email" name="email1" value="<?php echo $_SESSION['email']; ?>">

        <br><p><i><span style="color: red;">*Required</span></i></p>
        <br>
        <input type="submit" class="btn" name="reg_form" value="Submit">
        <input style="opacity: 0%" type="radio" name="type" value="Sale" checked="checked">
        </form>
        </div>

        <!-- End of for sale -->

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

      <script type="text/javascript"> 
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
        <br>
        <br>
    </div>



	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br>
	<hr>
	<h6 style="color: black; text-align: center;">©2020 ITS232 Homee Raub</h6>


</body>
</html>