<?php
 require './class/myclass.php';
?>
<center><h1>A One Tailor</h1> </center>

<center><h2>Product Search Report</h2></center>
<hr/>

<a href="#" onclick="window.print();">Print</a>
    <?php

echo " Date:" . date("d-m-Y");


?>

<form method="get">
    Sub Category  : 
    
    <select name="cat">
        <?php 
        $q = mysqli_query($connection, "select * from tbl_subcategory") or die(mysqli_error($connection));
        while($data = mysqli_fetch_array($q))
        {
            echo "<option value='{$data[0]}'>$data[1]</option>";
        }
        ?>
    </select>
    
    <input type="submit">
    
</form>


<?php 

if(isset($_GET['cat']))
{
    
    $search = $_GET['cat'];
$productquery = mysqli_query($connection, "SELECT
    `tbl_product`.`Product_id`
    , `tbl_product`.`Product_name`
    , `tbl_product`.`Details`
    , `tbl_product`.`Price`
    , `tbl_subcategory`.`Sub_cat_name`
    , `tbl_size`.`Size`
    , `tbl_color`.`Color_name`
    , `tbl_product`.`stock_qty`
FROM
    `tbl_size`
    INNER JOIN `tbl_product` 
        ON (`tbl_size`.`Size_id` = `tbl_product`.`Size_id`)
    INNER JOIN `tbl_color` 
        ON (`tbl_color`.`Color_id` = `tbl_product`.`Color_id`)
    INNER JOIN `tbl_subcategory` 
        ON (`tbl_subcategory`.`Sub_cat_id` = `tbl_product`.`Sub_cat_id`) where  `tbl_product`.`Sub_cat_id` = $search") or die(mysqli_error($connection));

$count = mysqli_num_rows($productquery);

echo "<br/><center>$count Records Found</center>";
if ($count > 0) {

    echo "<table align='center' width='100%' border='1'> ";
    echo "<tr>";

    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Details</th>";
    echo "<th>Price</th>";   
    echo "<th>Sub Category</th>";    
    echo "<th>Size</th>";
    echo "<th>Color</th>";
    echo "<th>Qty</th>";

    echo "</tr>";
    while ($productdata = mysqli_fetch_array($productquery)) {
        
        echo "<tr>";
        echo "<td>{$productdata['Product_id']}</td>";
        echo "<td>{$productdata['Product_name']}</td>";
        echo "<td>{$productdata['Details']}</td>";
        echo "<td>{$productdata['Price']}</td>";
         echo "<td>{$productdata['Sub_cat_name']}</td>";
         echo "<td>{$productdata['Size']}</td>";
           echo "<td>{$productdata['Color_name']}</td>";
        echo "<td>{$productdata['stock_qty']}</td>";
         
        
        echo "</tr>";
    }

    echo "</table>";
}else
{
    echo "No Records Found";
}
}
?>

