<?php
require './admin/class/myclass.php';

echo "<center><h1>Invoice</h1></center>";

$qry = "SELECT * from tbl_ordermaster where Order_Id = '{$_GET['oid']}'";
$result = mysqli_query($connection, $qry) or die(mysqli_error($connection));
$row = mysqli_fetch_array($result);


$useq = mysqli_query($connection, "select * from tbl_user where User_id ='{$_SESSION['uid']}'") or die(mysqli_error($connection));
$userdata = mysqli_fetch_array($useq);

echo "Order ID: {$row['Order_Id']} ";
echo "<br/><br/>Date : {$row['Order_date']} ";

echo "<br/><br/>User: {$userdata['User_name']} ";
echo "<br/><br/>Phone: {$userdata['phn_no']} "; 
?><br/><br/><br/>
<table border='1'  align='center' width='50%' class="table table-striped table-hover table-fw-widget">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Sub Total</th>





        </tr>
    </thead>

<?php
$qry = "SELECT
    `tbl_orderdetails`.`Order_id`
    , `tbl_product`.`Product_name`
    , `tbl_product`.`Price`
    , `tbl_orderdetails`.`Qty`
    , `tbl_orderdetails`.`Order_id`
FROM
    `tbl_product`
    INNER JOIN `tbl_orderdetails` 
        ON (`tbl_product`.`Product_id` = `tbl_orderdetails`.`Pro_id`) WHERE   `tbl_orderdetails`.`Order_id` = {$_GET['oid']} ;";

        $totalsum = array(); 
$result = mysqli_query($connection, $qry) or die(mysqli_error($connection));
while ($row = mysqli_fetch_array($result)) {
    $qty = $row[3] * $row[2];
    $totalsum[]  = $qty;
    echo "<tr>";
    echo "<td>{$row[0]}</td>";
    echo "<td>{$row[1]}</td>";
    echo "<td>{$row[2]}</td>";
    echo "<td>{$row[3]}</td>";
        echo "<td>{$qty}</td>";
        
    echo "</tr>";
    
}


echo "<tr>";
echo "<td></td>";
echo "<td><b>Inclusive All Taxes</b></td>";

echo "<td colspan='2'>Total</td>";


echo "<td>".  array_sum($totalsum) ."</td>";
 

echo "</tr>";
?>

</tbody>
</table>

