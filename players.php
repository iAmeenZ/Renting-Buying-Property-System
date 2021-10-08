
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
		#logoutbutton:hover
		{
			box-shadow: 0 3px 0 0 black;
		}
		#container
		{
    		text-align: center;
		}
		
		div.gallery {
		  border: none;
		  height: 130px;
		  width: 130px;
		}

		.roles {
			text-align: center;
			color: red;
			font-size: 150%;
			opacity: 90%;
			font-family: franklin gothic medium;
		}
		.roles2 {
			text-align: center;
			color: rgb(255, 255, 255);
			font-size: 150%;
			opacity: 90%;
			font-size: 110%;
			font-family: franklin gothic medium;
		}

		div.gallery img {
		  width: 100%;
		  height: auto;
		}

		div.desc {
		  padding: 15px;
		  text-align: center;
		  color: black;
		  font-family: arial;
		}

		* {
		  box-sizing: border-box;
		}

		.responsive {
		  padding: 0 6px;
		  width: 24.99999%;
		  display: inline-block;
		}

		@media only screen and (max-width: 700px) {
		  .responsive {
		    width: 49.99999%;
		    margin: 6px 0;
		  }
		}

		@media only screen and (max-width: 500px) {
		  .responsive {
		    width: 100%;
		  }
		}
		img.center{
			display: block;
			margin-left: auto;
			margin-right: auto;
			border-radius: 50%;
  			height: 150px;
  			width: 150px;
  			border: 3px solid black;
		}
		a.center{
			display: block;
			margin-left: auto;
			margin-right: auto;
			border-radius: 50%;
  			height: 150px;
  			width: 150px;
		}

		.clearfix:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		#container
		{
    		display: block;
			margin-left: auto;
			margin-right: auto;
		}
		.main-container1 {
	      float: left;
	      position: relative;
	      left: 34.4%;
	      padding: 0 6px;
		  width: 20%;
	    }
	    .fixer-container1 {
	      float: left;
	      position: relative;
	      left: -50%;
	    }
	    .main-container2 {
	      float: left;
	      position: relative;
	      left: 45.4%;
	      padding: 0 6px;
		  width: 20%;
	    }
	    .fixer-container2 {
	      float: left;
	      position: relative;
	      left: -50%;
	    }
		.main-container3 {
	      float: left;
	      position: relative;
	      left: 34.4%;
	      padding: 0 6px;
		  width: 20%;
	    }
	    .fixer-container3 {
	      float: left;
	      position: relative;
	      left: -45%;
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
    	<button type="topbutton" onclick="window.location='players.php'" style="margin:10px 10px; box-shadow: 0 3px 0 0 black;" id="topbutton">About</button>


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
	<br>
	<p class="roles">Supervisor</p>
		  <div class="fixer-container">
		    <a class="center" target="_self" href="azim.PNG">
		      <img class="center" src="azim.PNG" alt="Cinque Terre" >
		    </a>
		    <div class="desc">Azim Zainal</div>
		 </div>
	
		  <br><br><br><br>

		  <p class="roles">Members</p>
		  <!--<p class="roles2">Forward</p>-->

		  <div class="main-container3">
			<div class="fixer-container3">
		    <a class="center" target="_self" href="ameen.png">
		      <img class="center" src="ameen.png" alt="Cinque Terre" >
		    </a>
		    <div class="desc">Ameerul Ameen</div>
		 </div>
		 </div>

		<div class="main-container3">
			<div class="fixer-container3">
		    <a class="center" target="_self" href="syahid.png">
		      <img class="center" src="syahid.png" alt="Cinque Terre" >
		    </a>
		    <div class="desc">Syahid Ezuan</div>
		</div>
		</div>

		 <div class="main-container3">
			<div class="fixer-container3">
		    <a class="center" target="_self" href="amir.png">
		      <img class="center" src="amir.png" alt="Cinque Terre" >
		    </a>
		    <div class="desc">Amir Iqbal</div>
		 </div>
		 </div>

		 <p style="clear:both;">
		 	<br><br><br><br>
			<div class="main-container2">
			<div class="fixer-container2">
		    <a class="center" target="_self" href="sterling.jpg">
		      <img class="center" src="megat.png" alt="Cinque Terre" >
		    </a>
		    <div class="desc">Megat Putra</div>
		 </div>
		 </div>

		 <div class="main-container2">
			<div class="fixer-container2">
		    <a class="center" target="_self" href="sterling.jpg">
		      <img class="center" src="afiq.png" alt="Cinque Terre" >
		    </a>
		    <div class="desc">Afiq Izzuddin</div>
		 </div>
		 </div>
</div>
	<div class="clearfix"></div>

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

		<br>
		<br>
		<br>
		<hr>
		<h6 style="color: black; text-align: center;">©2020 ITS232 Homee Raub</h6>


</body>
</html>