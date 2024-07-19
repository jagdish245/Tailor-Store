<?php
session_start();
require 'admin/class/myclass.php';


//Check User is Logged in or not 
//if user is not logged in then redirect on Login Page
if (!isset($_SESSION['adminid'])) {
    header("location:login.php");
}

if ($_POST) {
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    //Get Value from the Session
    $studentid = $_SESSION['adminid'];

    $oldpassworq = mysqli_query($conn, "select st_password from tbl_student where st_id ='{$studentid}'") or die(mysqli_error($conn));
    $oldpassfetchfromdb = mysqli_fetch_array($oldpassworq);

    if ($oldpassfetchfromdb['st_password'] == $opass) {
        if ($npass == $cpass) {

            if ($opass == $npass) {
                echo "<script>alert('You can not use Current Password as New Password');</script>";
            } else {
                mysqli_query($conn, "update tbl_student set st_password='{$npass}' where st_id='{$studentid}'") or die(mysqli_error($conn));

                echo "<script>alert('Yo');</script>";
            }
        } else {
            echo "<script>alert('New and Confirm Password Not Match');</script>";
        }
    } else {
        echo "<script>alert('Old Password Not Match');</script>";
    }
}
?>

<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>A One Fashion</title>
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
                <h3><a href="index.html">Home</a> / <span>Login</span></h3>
            </div>
        </div>
        <!--banner-->

        <!--content-->
        <div class="content">
            <!--login-->
            <div class="login">
                <div class="main-agileits">
                    <div class="form-w3agile">
                        <h3>Login To New Shop</h3>
                        <form action="#" method="post">
                            <div class="key">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Email';
                                        }" required="">
                                <div class="clearfix"></div>
                            </div>
                            <div class="key">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Password';
                                        }" required="">
                                <div class="clearfix"></div>
                            </div>
                            <input type="submit" value="Login">
                        </form>
                    </div>
                    <div class="forg">
                        <a href="#" class="forg-left">Forgot Password</a>
                        <a href="registered.html" class="forg-right">Register</a>
                        <div class="clearfix"></div>
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

