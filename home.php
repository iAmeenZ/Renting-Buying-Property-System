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
	<title>Homee Raub</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css">
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

		

		#button1
		{
			background-image: url('homee10.jpg');
  			color: black;
  			width: 420px;
  			height: 150px;
  			display: inline-block;
  			font-size: 280%;
  			cursor: pointer;
  			background-size: none;
  			box-shadow: 4px 4px gray;
		}
		#button1:hover
		{
			border: 3px solid white;
			box-shadow: 0px 0px;
		}
		#button2
		{
			background-image: url('homee10.jpg');
  			color: black;
  			width: 420px;
  			height: 150px;
  			display: inline-block;
  			font-size: 280%;
  			cursor: pointer;
  			box-shadow: 4px 4px gray;
		}
		#button2:hover
		{
			border: 3px solid white;
			box-shadow: 0px 0px;
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

		* {box-sizing: border-box;}

.mySlides {display: none;}
img.slide {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  border: 6px solid black;
  box-shadow: 8px 8px gray;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2;
  animation-name: fade;
  animation-duration: 2s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
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
}


	</style>
</head>

<body align="middle">
	
	<br><br>
	<h2 style="font-family: lucida handwriting; color: black;"><img style="margin: -16px 10px;" src="logo.png" alt="Homee Raub Logo" width="100px"> H O M E E<span style="color: transparent;">aa</span>R A U B <img style="margin: -16px 10px;" src="logo.png" alt="Homee Raub Logo" width="100px"></h2>
	<p style="color: black; font-family: Comic Sans MS;">The best platform for finding home around Raub</p>

	<br><br><br>
	<div id="container">
    	<button type="topbutton" onclick="window.location='home.php'" style="margin:10px 10px; box-shadow: 0 3px 0 0 black;" id="topbutton">Home</button>
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

    </div>
	<hr>
	<br>
	<p style="color: black; font-family: Comic Sans MS;"><strong>Welcome <?php echo $_SESSION['sellername']; ?><strong></p>


	<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="slide" src="s13.jpg" style="width:100%;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="slide" src="s2.jpg" style="width:100%;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="slide" src="s6.jpg" style="width:100%;">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}


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
	<div id="container">
    	<button type="button" onclick="window.location='buy.php'" style="margin:30px 100px;font-size: 40px;" id="button1">Buy<br><span style="color: rgb(80,80,80); font-size: 20px;">Buying or renting property</span></button>

    	<button type="button" onclick="window.location='sell.php'" style="margin:30px 100px; font-size: 40px;" id="button2">Sell<br><span style="color: rgb(80,80,80); font-size: 20px;">Sell or rent property</span></button>
	</div>

	<br><br><br><br><br><br>
	<hr>
	<h6 style="color: black; text-align: center;">©2020 ITS232 Homee Raub</h6>


</body>
</html>