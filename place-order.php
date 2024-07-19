<?php
require './admin/class/myclass.php';


//
//if(isset($_POST['address'])){
//    
//   
////    $opt_address = $_POST['opt_address'];
////    
////    $qry = "update `tbl_user` set `optional_address`='{$opt_address}' where User_id='{$_SESSION['uid']}'";
//    
//    
//    
//    
//}

if (isset($_POST['address'])) {

      $Shipping_name = $_POST['Shipping_name'];
      $Contact  = $_POST['Contact'];
      $Address = $_POST['Address'];
      $area = $_POST['area'];
      $add = $_POST['add'];
      
      $order_address ="";
      if($add == '1'){
           $order_address = $_POST['Address'];
      }else{
          $order_address = $_POST['opt_address'];
      }
      echo $_SESSION['cart'];
      exit;
//      echo $order_address;
    
//      exit;
    if (!isset($_SESSION['cart'])) {
       // header("location:shipping-details.php");
    }
    ///Insert OrderMaster Query 
    $date = date('d-m-y');
    mysqli_query($conn, "insert into tbl_ordermaster (Order_date,User_id) values('{$date}','{$_SESSION['uid']}')") or
            die(mysqli_error($conn));

    $orderid = mysqli_insert_id($conn);
    
    foreach ($_SESSION['cart'] as $key => $value) {

        $productq = mysqli_query($conn, "select * from tbl_product where Product_id ='{$value}'") or die(mysqli_error($conn));
        $prodata = mysqli_fetch_row($productq);
        mysqli_query($conn, "insert into tbl_orderdetails (Order_id,Pro_id,Qty,Price) values('{$orderid}','{$value}','{$_SESSION['qty'][$key]}','{$prodata[2]}')") or die(mysqli_error($conn));
         $newqty = $prodata[12] - $_SESSION['qty'][$key];
        mysqli_query($conn, "update tbl_product  set stock_qty='{$newqty}' where  Product_id ='{$value}'") or die(mysqli_error($conn));
              
    }
    
    $shippingq = mysqli_query($conn, "INSERT INTO `tbl_shippingcompany`"
            . "(`Shipping_name`, `Address`, `Contact`, `Area_id`, `Order_id`)"
            . " Values ('{$Shipping_name}','{$Address}','{$Contact}','{$area}','{$orderid}')") or die(mysqli_error($conn));
    
    unset($_SESSION['cart']);
    unset($_SESSION['counter']);
    unset($_SESSION['qty']);
    //echo "<script>alert('Order Placed');window.location='thanks.php';</script>";
    
    if($shippingq){
        
    //    header("location:shipping-details.php");
        
      echo "<script>alert('Order Placed');window.location.href='thanks.php';</script>";
    }
}
?>



<!DOCTYPE HTML>
<html>
    <head>
        <title>A One Fashion </title>
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
                <h3><a href="index.html">Home</a> / <span>Registered</span></h3>
            </div>
        </div>
        <!--banner-->

        <!--content-->
        <div class="content">
            <!--login-->
            
            <div class="login">
                <div class="main-agileits">
                    <div class="form-w3agile form1" >
                        
                        <h3>Shipping Details</h3>
                      
                        
                   <?php      $user = mysqli_query($conn, "select * from tbl_user where User_id='{$_SESSION['uid']}'") or die(mysqli_error($conn));
                                $user_Result = mysqli_fetch_assoc($user);
                                   
                   ?>
                        <form action="#" method="post">
                          
                            <input type="text" hidden="" name="Shipping_name" value="<?php echo $user_Result['User_name']; ?>">
                            <input type="text" hidden="" name="Contact" value="<?php echo $user_Result['phn_no']; ?>">
                            <input type="text" hidden="" name="area" value="<?php echo $user_Result['Area_id']; ?>">


                            Permanent  Address  (Delivery):
                            <div class="key">
                             
                                <input type="radio" name="add" value="1" checked="">   <textarea  type="text" placeholder="Address" class="form-control" readonly=""  name="Address" required=""><?php echo $user_Result['Address']; ?></textarea>
                                <div class="clearfix"></div>
                            </div>
                            
                            
                            Delivery Address :
                            <div class="key">
                               
                                <input type="radio" name="add" value="0">     <textarea  type="text" placeholder="Address" class="form-control"  name="opt_address"><?php echo $user_Result['optional_address']; ?></textarea>
                                <div class="clearfix"></div>
                            </div>
                            
                            
                            
                            
                            
                            
<br/>

<input type="submit" name="address" value="Submit">
                        </form>
                    </div>

                </div>
            </div>
            <!--login-->
        </div>
        <!--content-->
        <!---footer--->
<?php
include './themepart/footer.php';
?>
        <!--copy-->


    </body>
</html>
