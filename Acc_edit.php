<?php



include_once('connection.php');

    if(isset($_POST['submit']))
    {

        $acc_number=$_POST['Acc_Number'];
        $cid=$_POST['Cid'];
        $branch_id=$_POST['Branch_ID'];
        $acc_type=$_POST['Acc_type'];
        $act_date=$_POST['Act_Date'];
        $opening_balance=$_POST['Opening_Balance'];
        
      

        if(empty($acc_number) || empty($cid) || empty($branch_id) || empty($acc_type) ||empty($act_date) || empty($opening_balance) )

    
        {
            echo "<font color = 'red'>Field is empty</font></br>";
        }

        else
        {

         $sql_update = " UPDATE Account SET Acc_Number='$acc_number',Cid= '$cid', Branch_ID = '$branch_id',Acc_Type= '$acc_type',Act_Date='$act_date',Opening_Balance='$opening_balance' where Acc_Number = $acc_number";

            $result = mysqli_query($con,$sql_update);

            header("Location:Acc_index.php");
        }
    }

?>

<?php


$acc_number = $_GET['Acc_Number'];
$sql_fetch = "SELECT * from  Account where Acc_Number=$acc_number";
     $result2 = mysqli_query($con,$sql_fetch);

    while($r = mysqli_fetch_array($result2))
{
    
    $acc_number=$_POST['Acc_Number'];
    $cid=$_POST['Cid'];
    $branch_id=$_POST['Branch_ID'];
    $acc_type=$_POST['Acc_type'];
    $act_date=$_POST['Act_Date'];
    $opening_balance=$_POST['Opening_Balance'];
}

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>

    <a href="Acc_index.php">View All</a></br>

    <form action="Acc_edit.php" method="post">
        <table width="25%" border="1">
        <tr>
                <td>Acc_Number</td>
                <td><input type="text" name = "Acc_Number" autocomplete="off" value="<?php echo $acc_number; ?>"></td>
            </tr>
            <tr>
                <td>Cid</td>
                <td><input type="text" name = "Cid" autocomplete="off" value="<?php echo $cid; ?>"></td>
            </tr>
            
            <tr>
                <td>Branch_ID</td>
                <td><input type="int" name = "Branch_ID" autocomplete="off" value="<?php echo $branch_id; ?>"></td>
            </tr>
            <tr>
                <td>Acc_type</td>
                <td><input type="text" name = "Acc_type" autocomplete="off" value="<?php echo $acc_type; ?>"></td>
            </tr>

            <tr>
                <td>Act_Date</td>
                <td><input type="text" name = "Act_Date" autocomplete="off" value="<?php echo $act_date; ?>"></td>
            </tr>   
            <tr>
                <td>Opening_Balance</td>
                <td><input type="text" name = "Opening_Balance" autocomplete="off" value="<?php echo $opening_balance; ?>"></td>
            </tr>    

            


            <tr>
              
                <td><input type="submit" name = "submit" value="Update"></td>
            </tr>

        </table>
    </form>
    
</body>
</html>