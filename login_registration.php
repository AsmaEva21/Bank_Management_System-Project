<?php

require('connection.php');
session_start();

#for login
if(isset($_POST['login']))
{
    $query="SELECT * FROM  `registred_user` WHERE `email`='$_POST[email_username]' OR `username` = '$_POST[email_username]'";
    $result=mysqli_query($con,$query);

    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
          /*  if(password_verify($_POST['password'],$result_fetch['passsword']))*/
            {
                #if password matched
               # echo"right";
                $_SESSION['logged_in'] = true;
                $_SESSION['username']=$result_fetch['username'];
                header("location:bank_management_system.php");
            }
         /*    else
            {
                #if incorrect password
                echo"
                <script>
                alter('Incorrect password');
                window.location.href='pag.php';
                </script>
                ";
            }*/

        }
        else
        {
            if($con)
            {
                echo 'Email or username not registered ';
            }


            echo"
            <script>
            alter('Email or username not registered');
            window.location.href='bank_management_system.php';
            </script>
            ";
        }

    }
    else
    {
        echo"
        <script>
        alter('Cannot run query');
        window.location.href='bank_management_system.php';
        </script>
        ";

    }

}




#for registration
if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM  `registred_user` WHERE `username`='$_POST[username]' OR `email` = '$_POST[email]'";
    $result=mysqli_query($con,$user_exist_query);

    if($result)
    {
        #it will be executed if username or email already taken
        if(mysqli_num_rows($result)>0)
        {
            
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {
                #error for username already registered
                echo"
                <script>
                alter('$result_fetch[username] - username already taken');
                window.location.href='bank_management_system.php';
                </script>
                "; 

            }
            else
            {
                #error for email already registered
                echo"
                <script>
                alter('$result_fetch[email] - email already register');
                window.location.href='bank_management_system.php';
                </script>
                "; 

            }
        }
        #it will be execute if no one has taken username or email before
        else
        {
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $query="INSERT INTO `registred_user`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
            if(mysqli_query($con,$query))
            {
                #if data insert successfully
                echo"
               <script>
               alter('registration successful');
               window.location.href='bank_management_system.php';
               </script>
               ";
                

            }
            else
            {
                #if data cannot be inserted
                echo"
                <script>
                 alter('Cannot run query');
                 window.location.href='bank_management_system.php';
                 </script>
                 ";

            }

        }

    }

    else
    {
        echo"
        <script>
        alter('Cannot run query');
        window.location.href='bank_management_system.php';
        </script>
        ";

    }
}
?>