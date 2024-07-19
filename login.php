<?php
ob_start();

require './admin/class/myclass.php';
?>
<?php
 
if($_POST)
{
    $email = $_POST['txt1'];
    $password = $_POST['txt2'];
    
    $query = mysqli_query($conn, "select * from tbl_user where Email ='{$email}' and Password='{$password}'") or 
    die(mysqli_error($conn));
    $count = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);
    if($count>0)
    {
        //Session Variable will Store Value at Global Level
        //We can Access Value any where in PHP File
        
        $_SESSION['uid']   =  $row[0];
        $_SESSION['umail'] =  $email;
        $_SESSION['uname'] =  $password;
      $_SESSION['User_name'] =  $email;

        //Redirect on Second Page 
        
       header("location:home.php");
    }
 else {
    
     echo "<script>alert('Login Fail');</script>";
    }
    
}


?>
<!--
Au
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <style>
            
            .a input[type="submit"]
            {
                background: #fdb515;
                color: #FFFFFF;
                text-align: center;
                padding: 10px 0;
                border: none;
                font-size: 1em;
                outline: none;
                width: 42%;
                cursor: pointer;
                margin-bottom: 30px;
                margin-left: 15px;
                margin-right: auto;
            }
            .b input[name="button"]
            {
                background: #fdb515;
                color: #FFFFFF;
                text-align: center;
                padding: 10px 0;
                border: none;
                font-size: 1em;
                outline: none;
                width: 42%;
                cursor: pointer;
                margin-bottom: 30px;
                margin-left: 15px;
                margin-right: auto;
                position: relative;
                left: 175px;
                top: -70px;
            }
        </style>
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
                        <h3>Login</h3>
                        <form action="#" method="post">
                            <div class="key">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                     <input  type="text" placeholder="example@gmail.com"  name="txt1" required="">
                                <div class="clearfix"></div>
                            </div>
                            <div class="key">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <input  type="password"  placeholder="Password" id="txt2" name="txt2" required="true">
                                <div class="clearfix"></div>
                            </div>
                            <input type="submit" value="Login">
                        </form>
                    </div>
                        <form action="forgot-password.php">
                            <div class="a"><input type="submit" value="Forgot Password"></div>
                        </form>
                        <form action="signup.php">
                            <div class="b"><input type="submit" name="button" value="Signup"></div>
                        </form>
                    
                    <!-- <div class="forg">
                          <a href="signup.php" class="forg-right">Register</a>  
                          <a href="forgot-password.php" class="forg-right">Forgot Password?</a>
                        <div class="clearfix"></div>
                    </div> -->
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