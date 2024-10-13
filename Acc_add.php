<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <?php

    include_once('connection.php');

    if(isset($_POST['submit']))
    {
        $acc_number=$_POST['Acc_Number'];
        $cid=$_POST['Cid'];
        $branch_id=$_POST['Branch_ID'];
        $acc_type=$_POST['Acc_Type'];
        $act_date=$_POST['Act_Date'];
        $opening_balance=$_POST['Opening_Balance'];
        

        
        
        if(empty($acc_number) || empty($cid) || empty($branch_id) || empty($acc_type) ||empty($act_date) || empty($opening_balance) )

         
        {
            echo "<font color = 'red'>Field is empty</font></br>";
        }
        

        else
        {
            $sql="insert into Account(Acc_Number,Cid,Branch_ID,Acc_type,Act_Date,Opening_Balance) values('{$acc_number}','{$cid}','{$branch_id_}','{$acc_type}','{$act_date}','{$opening_balance}')"; 
            
           
           
            $result = mysqli_query($con,$sql);

            if($result)
            {
                echo "<font color='green'>Data Added Successfully!</font>";
                echo "</br> <a href='Acc_index.php'>View All</a>";

            }

            else
            {
                echo("Error Description: ".mysqli_error($con));
            }

            
        }
    }

    ?>
</body>
</html>
