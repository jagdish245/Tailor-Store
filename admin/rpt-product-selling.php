<?php
 require './class/myclass.php';
?>
<center><h1>A One Tailor</h1> </center>

<center><h2>Top Selling Product Report</h2></center>
<hr/>

<a href="#" onclick="window.print();">Print</a>
    <?php

echo " Date:" . date("d-m-Y");


?>

 


<?php 

 
 
$productquery = mysqli_query($connection, "SELECT
    `tbl_product`.`Product_id`
    , `tbl_product`.`Product_name`
    , `tbl_product`.`Details`
    , `tbl_product`.`Price`
    , `tbl_product`.`stock_qty`
FROM
    `tbl_product`
    INNER JOIN `tbl_orderdetails` 
        ON (`tbl_product`.`Product_id` = `tbl_orderdetails`.`Pro_id`); ") or die(mysqli_error($connection));

$count = mysqli_num_rows($productquery);

echo "<br/><center>$count Records Found</center>";
if ($count > 0) {

    echo "<table align='center' width='100%' border='1'> ";
    echo "<tr>";

    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Details</th>";
    echo "<th>Price</th>";   
   
    echo "<th>Qty</th>";

    echo "</tr>";
    while ($productdata = mysqli_fetch_array($productquery)) {
        
        echo "<tr>";
        echo "<td>{$productdata['Product_id']}</td>";
        echo "<td>{$productdata['Product_name']}</td>";
        echo "<td>{$productdata['Details']}</td>";
        echo "<td>{$productdata['Price']}</td>";
     
        echo "<td>{$productdata['stock_qty']}</td>";
         
        
        echo "</tr>";
    }

    echo "</table>";
}else
{
    echo "No Records Found";
}
 
?>

