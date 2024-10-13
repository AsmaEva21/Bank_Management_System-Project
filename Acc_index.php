<?php

include_once("connection.php");

$sql = "SELECT * from Account";

$result = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

<a href="Acc_add.html">Add new data</a> </br>

<table width='80%' >
    <tr bgcolor="#CCCCCC">

        <td>Acc_Number</td>
        <td>Cid</td>
        <td>Branch_ID</td>
        <td>Acc_type</td>
        <td>Act_Date</td>
        <td>Opening_Balance</td>
        
      
    </tr>

    <?php
    while($r = mysqli_fetch_array($result))
    {

        echo "<tr>";

        echo "<td>".$r['Acc_Number']."</td>";
        echo "<td>".$r['Cid']."</td>";
        echo "<td>".$r['Branch_ID']."</td>";
        echo "<td>".$r['Acc_type']."</td>";
        echo "<td>".$r['Act_Date']."</td>";
        echo "<td>".$r['Opening_Balance']."</td>";
      
      
       
        echo "<td><a href=\"Acc_edit.php?Acc_Number=$r[Acc_Number]\">Edit</a></td>";
        echo "<td><a href=\Acc_delete.php?Acc_Number=$r[Acc_Number]\" onClick=\"return confirm('Are you sure?')\">Delete</a></td>";
        echo "</tr>";
    }

    ?>
</table>

    
</body>
</html>


<?php










