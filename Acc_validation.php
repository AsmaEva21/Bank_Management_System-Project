<?php

include_once('connection.php');
if($con)
{
    echo" connection successful" ;
}
else
{
    echo "no connection";
}
/*mysqli_select_db($con,'dbconnection');*/
$acc_number=$_POST['Acc_Number'];
        $cid=$_POST['Cid'];
        $branch_id=$_POST['Branch_ID'];
        $acc_type=$_POST['Acc_Type'];
        $act_date=$_POST['Act_Date'];
        $opening_balance=$_POST['Opening_Balance'];
        

$q ="select* from Account where Acc_Number='$acc_number',Cid= '$cid', Branch_ID = '$branch_id',Acc_Type= '$acc_type',Act_Date='$act_date',Opening_Balance='$opening_balance'  ";
$result= mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==1)
{
   
    header('location:bank_management_system.php');

}
else{
    header('location:create account.php');
    echo "<font color='green'>wrong password!</font>";
    
}
?>