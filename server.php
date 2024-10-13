<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Customername = mysqli_real_escape_string($db, $_POST['customername']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $contactno= mysqli_real_escape_string($db, $_POST['contactno']);

 $customer_nid = mysqli_real_escape_string($db, $_POST['customer_nid']);


  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Customer WHERE Customername='$Customername' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($Custoer) { // if user exists
    if ($Customer['Customername'] === $Customername) {
      array_push($errors, "Username already exists");
    }

    if ($Customer['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO Customer (Customername,Address,Contactno,Customer_nid, email, password) 
  			  VALUES('$Customername','$Address','$Contactno','$Customer_nid', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['Customername'] = $Customername;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $Customername = mysqli_real_escape_string($db, $_POST['Customername']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($Customername)) {
  	array_push($errors, "Custoername is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM Customer WHERE Customername='$Customername' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION[C'ustomername'] = $Customername;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>