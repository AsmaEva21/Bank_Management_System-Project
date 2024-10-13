<?php

include("connection.php");

$id = $_GET['Acc_Number'];

$sql = "DELETE from Account where Acc_Number=$acc_number  ";
$result = mysqli_query($con,$sql);

if($result)
{
    header("Location:Acc_index.php");
}



?>