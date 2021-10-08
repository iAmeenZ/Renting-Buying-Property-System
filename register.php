<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<style>

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
    input[type=number], select 
    {
        width: 50%;
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
    input[type=email], select 
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

    .div2
    {
      width: 600px;
      height: 50px;  
      padding: 10px;
      border: 1px solid red;
      color: white;
    }
    .btn:active
    {
        transform: translateY(2px);
        background-color: blue;
        outline: none;
    }
    input:focus
    {
        background-color: rgba(0, 218, 255, 0.1);
    }



  </style>

<head>
  <title>Homee Raub Registration</title>
</head>
<body>

<body style="background-color: rgb(0, 134, 255);" align="middle">

    <br>
    <br>
    <h2 style="font-family: lucida handwriting; color: black;"><img style="margin: -16px 10px;" src="logo.png" alt="Homee Raub Logo" width="100px"> H O M E E<span style="color: transparent;">aa</span>R A U B <img style="margin: -16px 10px;" src="logo.png" alt="Homee Raub Logo" width="100px"></h2>
    <p style="color: black; font-family: Comic Sans MS;">The best platform for finding home around Raub</p>
    <br>
    <h3 style="color: black; font-family: sans-serif;">REGISTRATION</h6>
        
        
    <div style="background-image: none; padding: 50px solid white;">
      <form action="register.php" method="post" autocomplete="off">
        <?php include('errors.php'); ?>
        <br><br> 
        <label style="font-family: Arial; color: black;">Username / Login ID<span style="color: red;">*</span></label>
        <br>
        <input type="text" name="username" value="<?php echo $username; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Email<span style="color: red;">*</span></label>
        <br>
        <input type="email" name="email" value="<?php echo $email; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">First Name</label>
        <br>
        <input type="text" name="firstname" value="<?php echo $firstname; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Last Name</label>
        <br>
        <input type="text" name="lastname" value="<?php echo $lastname; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Phone Number</label>
        <br>
        <input type="text" name="phonenum" value="<?php echo $phonenum; ?>">

        <br><br>
        <label style="font-family: Arial; color: black;">Age<span style="color: red;">*</span></label>
        <br>
        <input type="Number" name="age" value="<?php echo $age; ?>">

        <br><hr>
        <br>
        <label style="font-family: Arial; color: black;">Password<span style="color: red;">*</span></label>
        <br>
        <input type="password" name="password_1">

        <br><br>
        <label style="font-family: Arial; color: black;">Confirm Password<span style="color: red;">*</span></label>
        <br>
        <input type="password" name="password_2">
        <br><p><i><span style="color: red;">*Required</span></i></p>
        <br>
        <input type="submit" class="btn" name="reg_user" value="Register">
      </form>
        <br>
        <br>
      <hr>
      <br>
      <a id="login" href="login.php">Already have an account? Login here</a>
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
    <h6 style="color: black; text-align: center;">©2020 ITS232 Homee Raub</h6>


</body>
</html>