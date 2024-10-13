<?php


        $name = $_POST['name'];
        
        
        $email = $_POST['email'];
        $email = $_POST['phone'];
        $message = $_POST['message'];

        $email_form = 'unitystandardbank@Nasirabadh.com';

        $eail_subject = "New Form Submission";

        $email_body = "User Name: $name.\n".  
                      "User Email: $email.\n". 
                         "User Message: $message.\n". 

        $to = "unitystandardbank@gmail.com";

        $headers = "From: $email_form\r\n";
        $headers = "From: $email\r\n";

        mail($to,$email_subject,$email_body,$header);

        header("Location: index.html");
        ?>