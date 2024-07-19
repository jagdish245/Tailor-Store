<?php 
require './admin/class/myclass.php';
?>

<!DOCTYPE HTML>
<html>
    <head>
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
                <h3><a href="index.html">Home</a> / <span>View Order</span></h3>
            </div>
        </div>
        <!--banner-->
        <!--content-->
        <div class="content">
            <!--contact-->
            <div class="mail-w3ls">
                <div class="container">
                    <h2 class="tittle">View Order</h2>
                    <div class="mail-grids">


                        <div class="mail-bottom">



                            <a href="feedback.php">Give us a Feedback</a>
                               
                  <table  class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>User</th>
                        

                       
                       <th class="tg-5xsc">Action</th>
                      </tr>
                    </thead>
                    
 <?php


$qry = "SELECT * from tbl_ordermaster where User_id = '{$_SESSION['uid']}'";

$result = mysqli_query($connection,$qry) or die(mysqli_error($connection));
 while ($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>{$row['Order_Id']}</td>";
    echo "<td>{$row['Order_date']}</td>";
    echo "<td>{$_SESSION['User_name']}</td>";
    echo "<td><a href='view-order-details.php?oid=$row[0]'>Details</a> | <a href='invoice.php?oid=$row[0]'>Invoice</a></td>";
    echo "</tr>";
}
?>
                      
                    </tbody>
                  </table>
                    
                    



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