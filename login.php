<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<style>
    body
    {
      background-color: rgb(0, 134, 255);
      background-image: url('white.jpg');
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
        text-align: center;
        outline: none;
    }
    input[type=password], select 
    {
        width: 95%;
        padding: 12px 20px;
        margin: 8px ;
        border: 3px solid rgb(0, 134, 255);
        border-radius: 30px;
        box-sizing: border-box;
        text-align: center;
        outline: none;
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
        outline: none;
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
      color: black; 
      font-family: arial; 
      text-decoration: none;"
    }
    #login:hover
    {
      color: rgb(0, 100, 255);
    }
    .btn:active
    {
        transform: translateY(2px);
        background-color: blue;
        outline: none;
    }


  </style>

<head>
  <title>Homee Raub</title>
</head>


<body align="middle">

  <br>
    <br>
    <h2 style="font-family: lucida handwriting; color: black;"><img style="margin: -16px 10px;" src="logo.png" alt="Homee Raub Logo" width="100px"> H O M E E<span style="color: transparent;">aa</span>R A U B <img style="margin: -16px 10px;" src="logo.png" alt="Homee Raub Logo" width="100px"></h2>
    <p style="color: black; font-family: Comic Sans MS;">The best platform for finding home around Raub</p>
    <br>
    <br>
    <br>
	 
<div style="background-image: none;">
      <form action="login.php" method="post" autocomplete="off">
        <?php include('errors.php'); ?><br><br>
        <input type="text" name="username" placeholder="Username">
        <br><br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <br>
        <input type="submit" class="btn" name="login_user" value="Login">
      </form>
        <br>
        <br>
      <hr>
      <br>
      <a id="login" href="register.php">Create New Account</a>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <h6 style="color: black; text-align: center;">©2020 ITS232 Homee Raub</h6>
<!--
  <form method="post" action="login.php">
  	<?php //include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
-->
</body>
</html>