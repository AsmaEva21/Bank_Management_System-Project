<?php

include_once("connection.php");

/*$sql = "SELECT * from booking";

$result = mysqli_query($con,$sql);*/

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scal">
        <title> Document</title>
        <link rel="stylesheet" href="Registration.css">
    </head>
    <body>
        <div class="main">
            <div class="navbar">
                <div class="icon"> 
                    <h2 class="logo">UNITY STANDARD BANK  </h2>
                   
                                     

                </div>
            </div>

            <div class="form">

                <form method="POST" action="login_registration.php">

                <h1>User Register</h1>
              <!---  <input type="P_Name" name="P_Name"placeholder="   Full Name">
                <input type="Phone_Num " name="Phone_Num "placeholder="   Mobile Number">
                <input type="password" name="password" placeholder="   Enter password">
                <input type="Email" name="Email" placeholder="   Enter email address">

                <button class="btnn"><a href="#">Sign Up</a></button>
                <button class="btnn"><a href="#">Already Registered?</a></button>--->
                
                <input type="text" name="fullname"placeholder="   Full Name">
                <input type="text" name="username"placeholder="   Username">
                <input type="email" name="email" placeholder="   Enter email address">
                
                <input type="password" name="password" placeholder="   Enter password">
                <button type="submit" class="registter-btn" name="register">Register</button>

              <!---  <button class="btnn"><a href="#">Sign Up</a></button>
                <button class="btnn"><a href="#">Already Registered?</a></button>--->
                
                
            </div>

        </div>
    </body>
</html>