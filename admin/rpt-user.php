<?php
 require './class/myclass.php';
?>
<center><h1>A One Tailor</h1> </center>

<center><h2>UserReport</h2></center>
<hr/>

<a href="#" onclick="window.print();">Print</a>
    <?php

echo " Date:" . date("d-m-Y");


?>




<?php 


$productquery = mysqli_query($connection, " select * from tbl_user ") or die(mysqli_error($connection));

$count = mysqli_num_rows($productquery);

echo "<br/><center>$count Records Found</center>";
if ($count > 0) {

    echo "<table align='center' width='100%' border='1'> ";
    echo "<tr>";

    echo "<th>ID</th>";
    echo "<th>User</th>";
    echo "<th>DOB</th>";
    echo "<th>Gender</th>";   
    echo "<th>Email</th>";    
    echo "<th>Address</th>";
   echo "<th>Phone</th>";
   
    

    echo "</tr>";
    while ($productdata = mysqli_fetch_array($productquery)) {
        
        echo "<tr>";
        echo "<td>{$productdata[0]}</td>";
        echo "<td>{$productdata[1]}</td>";
        echo "<td>{$productdata[2]}</td>";
        echo "<td>{$productdata[3]}</td>";
        echo "<td>{$productdata[4]}</td>";
                echo "<td>{$productdata[8]}</td>";
                echo "<td>{$productdata[6]}</td>";
        
        
        echo "</tr>";
    }

    echo "</table>";
}else
{
    echo "No Records Found";
}

?>

