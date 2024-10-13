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
        <link rel="stylesheet" href="Login.css">
    </head>
    <body>


        <div class="main">
            <div class="navbar">
                <div class="icon"> 
                    <h2 class="logo">UNITY STANDARD BANK  </h2>
                   
                                     

                </div>
            </div>


        <div class="form">

           <!--- <form method="POST" action ="Validation.php">--->

            <form method="POST" action="login_registration.php">   
            <h1>User Login</h1>
            <input type="text" name="email_username"placeholder="   E_mail or Username">            
            <input type="password" name="password" placeholder="   Enter your password">
            
            <button type="submit" class="login-btn" name="login">Login</button>

            <button class="btnn"><a href="#">Login</a></button>
            <button class="btnn"><a href="#">Or</a></button>
            <button class="btnn"><a href="Registration.php">Register</a></button>

           
            
            
         </div>
        </div>



    </body>
 </html>