<?php
require './class/myclass.php';
?>
<center><h3>A One Tailor </h3> </center>

<center><h2>Order Report</h2></center>
<hr/>

<a href="#" onclick="window.print();">Print</a>
    <?php

echo " Date:" . date("d-m-Y");
$query = mysqli_query($connection, "SELECT
    `tbl_orderdetails`.`Order_id`
    , `tbl_product`.`Product_id`
    , `tbl_product`.`Product_name`
    , `tbl_orderdetails`.`Qty`
    , `tbl_orderdetails`.`Price`
    , `tbl_subcategory`.`Sub_cat_name`
    , `tbl_size`.`Size`
FROM
    `tbl_product`
    INNER JOIN `tbl_orderdetails` 
        ON (`tbl_product`.`Product_id` = `tbl_orderdetails`.`Pro_id`)
    INNER JOIN `tbl_subcategory` 
        ON (`tbl_subcategory`.`Sub_cat_id` = `tbl_product`.`Sub_cat_id`)
    INNER JOIN `tbl_size` 
        ON (`tbl_size`.`Size_id` = `tbl_product`.`Size_id`);") or die(mysqli_error($connection));

$count = mysqli_num_rows($query);

echo "<br/><center>$count Records Found</center>";
if ($count > 0) {

    echo "<table align='center' width='100%' border='1'> ";
    echo "<tr>";

    echo "<th>Order_Id</th>";
    echo "<th>Order_date</th>";
    echo "<th>User_id</th>";
    
   

    echo "</tr>";
    while ($row = mysqli_fetch_array($query)) {
        
        echo "<tr>";

        echo "<td>{$row[0]}</td>";
        
        echo "<td>{$row[2]}</td>";
        echo "<td>{$row[3]}</td>";
        
         
        
        echo "</tr>";
    }

    echo "</table>";
}else
{
    echo "No Records Found";
}
?>

