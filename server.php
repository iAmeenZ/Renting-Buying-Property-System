<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

  // initializing variables
  $username = "";
  $firstname = "";
  $lastname = "";
  $phonenum = "";
  $age = "";
  $email    = "";
  $errors = array(); 

  // connect to the database
  $db = mysqli_connect('localhost', 'root', '', 'homee_raub');

  // REGISTER USER
  if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $phonenum = mysqli_real_escape_string($db, $_POST['phonenum']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) 
      { array_push($errors, "Username is required"); }
    if (empty($age)) 
      { array_push($errors, "Age is required"); }
    if (empty($email)) 
      { array_push($errors, "Email is required"); }
    if (empty($password_1)) 
      { array_push($errors, "Password is required"); }

    if ($password_1 != $password_2) 
    {
  	   array_push($errors, "Passwords not match");
    }

    if ($age < 18 && $age != "") 
    {
        array_push($errors, "You must be 18 or older");
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM usermain WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
        
      }

      if ($user['email'] === $email) {
        array_push($errors, "Email already exists");
      }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
    	$password = md5($password_1);//encrypt the password before saving in the database

    	$query = "INSERT INTO usermain (username, firstname, lastname, phonenum, age, email, password) 
    			  VALUES('$username', '$firstname', '$lastname', '$phonenum', '$age','$email','$password')";
    	mysqli_query($db, $query);
    	$_SESSION['username'] = $username;
      $_SESSION['phonenum'] = $phonenum;
      $_SESSION['email'] = $email;
      $_SESSION['sellername'] = $firstname;
    	$_SESSION['success'] = "You are now logged in";
    	header('location: login.php');
    }
  }

  // ... 

  // LOGIN USER
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM usermain WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);

      if (mysqli_num_rows($results) == 1) {
        $row = mysqli_fetch_assoc($results);
        $_SESSION['userid'] = $row["userid"];
        $_SESSION['username'] = $username;
        $_SESSION['phonenum'] = $row["phonenum"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['sellername'] = $row["firstname"];
        $_SESSION['firstname'] = $row["firstname"];
        $_SESSION['lastname'] = $row["lastname"];
        $_SESSION['age'] = $row["age"];
        $_SESSION['password'] = $row["password"];
        header('location: home.php');
      }
      else {
        array_push($errors, "Wrong username or password");
      }
    }
   }


  $type = "";
  $propertyname = "";
  $propertyaddress = "";
  $propertyprice = "";
  $sellername = "";
  $email1 = "";

  
    // SELL FORM 

  if (isset($_POST['reg_form'])) {
    // receive all input values from the form
      $username = mysqli_real_escape_string($db, $_SESSION['username']);
      $type = mysqli_real_escape_string($db, $_POST['type']);
      $propertyname = mysqli_real_escape_string($db, $_POST['propertyname']);
      $propertyaddress = mysqli_real_escape_string($db, $_POST['propertyaddress']);
      $propertyprice = mysqli_real_escape_string($db, $_POST['propertyprice']);
      $sellername = mysqli_real_escape_string($db, $_POST['sellername']);
      $phonenum1 = mysqli_real_escape_string($db, $_POST['phonenum1']);
      $email1 = mysqli_real_escape_string($db, $_POST['email1']);
      
    $user_check_query = "SELECT userid FROM usermain WHERE username='$username'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    $userid = $user['userid'];

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($propertyname) || empty($propertyaddress) || empty($propertyprice) || empty($phonenum1) || empty($email1) || empty($sellername)) 
      { array_push($errors, "Every section is required"); }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $query1 = "INSERT INTO property (type, propertyname, propertyaddress, propertyprice, sellername, phonenum1, email1, userid) 
            VALUES('$type', '$propertyname', '$propertyaddress', '$propertyprice', '$sellername', '$phonenum1', '$email1', '$userid')";
      mysqli_query($db, $query1);
      header('location: sell.php');
    }
  }



  // EDIT PROFILE

  if (isset($_POST['edit_form'])) {
    $_SESSION['emailtemp'] = $_SESSION['email'];

      $username = mysqli_real_escape_string($db, $_SESSION['username']);
      $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
      $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
      $phonenum = mysqli_real_escape_string($db, $_POST['phonenum']);
      $age = mysqli_real_escape_string($db, $_POST['age']);
      $email = mysqli_real_escape_string($db, $_POST['email']);

    $user_check_query = "SELECT * FROM usermain WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    

    if (empty($age)) 
      { array_push($errors, "Age is required"); }
    if (empty($email)) 
      { array_push($errors, "Email is required"); }
    if ($age < 18 && $age != "") 
     { array_push($errors, "You must be 18 or older"); }
   /*
    if ($user['email'] === $email ) 
     { array_push($errors, "Email already exists"); }
     */

    if ($user) { // if user exists
          if ($user['email'] === $email && $_SESSION['emailtemp'] != $email) {
            array_push($errors, "Email already exists");
          }
        }

    if (count($errors) == 0) {

        mysqli_query($db, "UPDATE usermain SET firstname='$firstname', lastname='$lastname', phonenum='$phonenum', age='$age', email='$email' WHERE username='$username'");

        $_SESSION['phonenum'] = $phonenum;
        $_SESSION['email'] = $email;
        $_SESSION['sellername'] = $firstname;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['age'] = $age;

        header('location: profile.php');
      }

      
  }

  // EDIT PROPERTY
  if (isset($_POST['edit2'])) {

      $id = mysqli_real_escape_string($db, $_POST['nasi']);

    $user_check_query = "SELECT * FROM property WHERE propertyid='$id'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

        $_SESSION['type'] = $user['type'];
        $_SESSION['propertyname'] = $user['propertyname'];
        $_SESSION['propertyaddress'] = $user['propertyaddress'];
        $_SESSION['propertyprice'] = $user['propertyprice'];
        $_SESSION['sellername'] = $user['sellername'];
        $_SESSION['phonenum1'] = $user['phonenum1'];
        $_SESSION['email1'] = $user['email1'];
        $_SESSION['tempid'] = $id;
    
        header('location: edit2.php');
      }

  if (isset($_POST['edit2_form'])) {

      $temp = $_SESSION['tempid'];

      $type = mysqli_real_escape_string($db, $_POST['type']);
      $propertyname = mysqli_real_escape_string($db, $_POST['propertyname']);
      $propertyaddress = mysqli_real_escape_string($db, $_POST['propertyaddress']);
      $propertyprice = mysqli_real_escape_string($db, $_POST['propertyprice']);
      $sellername = mysqli_real_escape_string($db, $_POST['sellername']);
      $phonenum1 = mysqli_real_escape_string($db, $_POST['phonenum1']);
      $email1 = mysqli_real_escape_string($db, $_POST['email1']);

      if (empty($type) || empty($propertyname) || empty($propertyaddress) || empty($propertyprice) || empty($phonenum1) || empty($email1) || empty($sellername)) 
      { array_push($errors, "Every section is required"); }
   

    if (count($errors) == 0) {
       mysqli_query($db, "UPDATE property SET type='$type', propertyname='$propertyname', propertyaddress='$propertyaddress', propertyprice='$propertyprice', sellername='$sellername', phonenum1='$phonenum1', email1='$email1' WHERE propertyid='$temp'");
        

        header('location: property.php');
      }

      
  }
  


?>