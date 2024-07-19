<?php
 
require './admin/class/myclass.php';
?>

<!DOCTYPE HTML>
<html>
    <head>
        <style>
        tr.product_head {
    background-color: #262626;
}
    tr.product_details {
    background-color: white;
}
    h2.c_title {
        text-align: center;
        font-size: 3em;
        color: white;
        background-color: #3e3e3e;
    }
    
    
        </style>
        <title> </title>
        <!--css-->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/font-awesome.css" rel="stylesheet">
        <!--css-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="js/jquery.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
        <!--search jQuery-->
        <script src="js/main.js"></script>
        <!--search jQuery-->

        <!--mycart-->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
        <!-- cart -->
        <script src="js/simpleCart.min.js"></script>
        <!-- cart -->

    </head>
    <body>
        <!--header-->

        <?php
        include './themepart/header.php';
        ?>
        <!--header-->
        <!--banner-->
        <div class="banner1">
            <div class="container">
                <h3><a href="#">Home</a> / <span>Cart</span></h3>
            </div>
        </div>
        <!--banner-->
        <!--content-->
        <div class="content">
            <!--contact-->
            <div class="mail-w3ls">
                <div class="container">
                    <h2 class="c_title">Product in your Cart</h2>
                    <div class="mail-grids">


                        <div class="mail-bottom">




                            <?php
//Value will stores your product id 


                            if (isset($_GET['did'])) {
                                $did = $_GET['did'];

                                unset($_SESSION['cart'][$did]);
                                unset($_SESSION['key'][$did]);
                            }

 if (isset($_GET['qty'])) {

                        $key = $_GET['keyu'];
                        $pid = $_GET['pid'];
                        $qty = $_GET['qty'];
                        $_SESSION['qty'][$key] = $qty;
                        //echo "Yes";
                    }
                            if (!isset($_SESSION['cart'])) {
                                echo "Cart is Empty";
                            } else {

                                echo "<table border='1' class='table'>";

                                echo "<tr class='product_head'>";
                                
                                echo "<th style='color:white;'>ID</th>";
                                echo "<th style='color:white;'>Name</th>";
                                echo "<th style='color:white;'>Price</th>";
                                echo "<th style='color:white;'>Qty</th>";
                                echo "<th style='color:white;'>Qty</th>";
                                echo "<th style='color:white;'>SubTotal</th>";
                                echo "<th style='color:white;'>Image</th>";
                                echo "<th style='color:white;'>Action</th>";
                                
                                
                                echo "</tr>";
                                $i = 0;
                                $sumarray = array();
                                foreach ($_SESSION['cart'] as $key => $value) {

                                    $qty = $_SESSION['qty'][$key];


                                    $productq = mysqli_query($conn, "select * from tbl_product where Product_id ='{$value}'") or die(mysql_error());
                                    $prodata = mysqli_fetch_row($productq);
                                    $qtysum = $qty * $prodata[3];
                                    $productimageq = mysqli_query($conn, "SELECT * FROM `tbl_product_images` where Pro_id ='{$value}'") or die(mysqli_error($conn));
                                    $prodictimagedata = mysqli_fetch_array($productimageq);
                                    $i++;

                                    echo "<tr class='product_details'>";

                                    echo "<td>$i</td>";
                                    echo "<td>$prodata[1]</td>";
                                     
                                    echo "<td>$prodata[3]</td>";
                                    echo "<td>$qty</    td>";
                                     echo "<td>Qty :<form method='get'><input type='hidden' name='keyu' value='{$key}'><input type='hidden' name='pid' value='{$value}'><input type='number' name='qty' style='width:50px;' style='color:red;' value='{$qty}' min='1' max='{$prodata[12]}'><input type='submit' name='udpate' value='✔'></form></td>";
                          
                                    echo "<td>$qtysum</td>";
                                    echo "<td><img src='admin/upload/$prodictimagedata[2]' style='width:100px;'></td>";
                                    //Key will store Session index and we have to delete product from session.
                                    echo "<td><a href='?did=$key'>Delete</a></td>";
                                    $sumarray[] = $qtysum;
                                    echo "</tr><br/>";
                                    echo"<tr>";
                                    echo"<td style='border:hidden;'></td>";
                                    echo"<td style='border:hidden;'></td>";
                                    echo"<td style='border:hidden;'></td>";
                                    echo"<td style='border:hidden;'></td>";
                                    echo"<td style='border:hidden;'></td>";
                                    echo"<td style='border:hidden;'></td>";echo"<td style='border:hidden;'></td>";
                                    echo"<td style='

    background-color: #262626;
    border-radius: 5px;
    border: hidden;
    color:white;
    font-size:20px;
'><i class='fa fa-money' aria-hidden='true'> Total is " . array_sum($sumarray); echo"</i></td>";
                                    echo"</tr>";
                                    // $sumarray[] = $qtysum;
                                }


                                echo "</table>";
                                // echo "Total is " . array_sum($sumarray);
                                echo "<br/><br/><br/><a style='float:right; background-color: #262626;
    border-radius: 5px;
    border: hidden;
    color:white;
    font-size:15px;padding:15px;' href='products.php'><i class='fa fa-shopping-cart' aria-hidden='true'> Buy More</i></a>";
                                
                             
                                if(isset($_SESSION['uid']))
                                {
                                     echo "<br/><a href='place-order.php'style='float:right; background-color: #262626;
    border-radius: 5px;
    border: hidden;
    color:white;
    font-size:15px;padding:15px;margin-top:-20px;margin-right:7px;'><i class='fa fa-shopping-cart' aria-hidden='true'> Place Order</i></a>";
                      
                                }else
                                {
                                     echo "<br/><a style='float:right; background-color: #262626;
    border-radius: 5px;
    border: hidden;
    color:white;
    font-size:15px;padding:15px;padding-right:41px;padding-left:41px;margin-top:-20px;margin-right:7px;' href='login.php'>Login</a>";
                      
                                }
                            }
                                ?>
                                      
                            




                        </div>
                    </div>
                </div>
            </div>
            <!--contact-->
        </div>
        <!--content-->
        <!---footer--->

        <?php
        include './themepart/footer.php';
        ?>
        <!--copy-->
    </body>
</html>