<?php
require './admin/class/myclass.php';

$selectq = mysqli_query($conn,"SELECT * FROM `tbl_measurements` WHERE user_id ='{$_SESSION['uid']}' ") or die(mysqli_error($conn));
$selectdata  = mysqli_fetch_array($selectq);        

if($_POST)
{
    
    $neck = $_POST['neck'];
    $chest = $_POST['chest'];
    $waist = $_POST['waist'];
    $bottom = $_POST['bottom'];
    $shirt_length = $_POST['shirt_length'];
    $shoulder_width = $_POST['shoulder_width'];
    $wrist = $_POST['wrist'];
    $hip = $_POST['hip'];
    $seat = $_POST['seat'];
    $inseam = $_POST['inseam'];
    $arm_length=$_POST['arm_length'];
    $q = mysqli_query($conn, "update  `tbl_measurements` set"
            . " `neck` = '{$neck}', `chest` = '{$chest}',`waist` = '{$waist}',`bottom` = '{$bottom}',`shirt_length` = '{$shirt_length}',`shoulder_width` = '{$shoulder_width}',`arm_length` = '{$arm_length}',`wrist` = '{$wrist}',`hip` = '{$hip}',`seat` = '{$seat}',`inseam` = '{$inseam}' where  user_id ='{$_SESSION['uid']}'"
         ) or die(mysqli_error($conn));
            
            
            if($q)
            {
                echo "<script>alert('Profile Updated');</script>";
                //header('location: home.php');
                
            }else
            {
                echo "<script>alert('Error');</script>";
            }
            
    
    
}

?>
<!--

Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title> Tailor Store </title>
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
       

        <!--content-->
        <div class="content">
            <!--login-->
            <div class="login">
                <div class="main-agileits">
                    <div class="form-w3agile form1">
                        <h3>Edit Measurement</h3>
                        <form action="#" method="post">
                            Neck
                            <input  class="form-control" type="text" value="<?php echo $selectdata[4]; ?>"  placeholder=""  name="neck" required="">
                                <div class="clearfix"></div>
                                <br>
                             
                            Chest
                            <input  class="form-control" type="text" value="<?php echo $selectdata[5]; ?>"  placeholder=""  name="chest" required="">
                                <div class="clearfix"></div>
                                <br>

                            Waist
                            <input  class="form-control" type="text" value="<?php echo $selectdata[6]; ?>"  placeholder=""  name="waist" required="">
                                <div class="clearfix"></div>
                                <br>

                            Bottom
                            <input  class="form-control" type="text" value="<?php echo $selectdata[13]; ?>"  placeholder=""  name="bottom" required="">
                                <div class="clearfix"></div>
                                <br>

                            Shirt Length
                            <input  class="form-control" type="text" value="<?php echo $selectdata[8]; ?>"  placeholder=""  name="shirt_length" required="">
                                <div class="clearfix"></div>
                                <br>

                            Shoulder Width
                            <input  class="form-control" type="text" value="<?php echo $selectdata[9]; ?>"  placeholder=""  name="shoulder_width" required="">
                                <div class="clearfix"></div>
                                <br>

                            Arm Length
                            <input  class="form-control" type="text" value="<?php echo $selectdata[10]; ?>"  placeholder=""  name="arm_length" required="">
                                <div class="clearfix"></div>
                                <br>

                            Wrist
                            <input  class="form-control" type="text" value="<?php echo $selectdata[11]; ?>"  placeholder=""  name="wrist" required="">
                                <div class="clearfix"></div>
                                <br>

                            Hip
                            <input  class="form-control" type="text" value="<?php echo $selectdata[12]; ?>"  placeholder=""  name="hip" required="">
                                <div class="clearfix"></div>
                                <br>

                            seat
                            <input  class="form-control" type="text" value="<?php echo $selectdata[7]; ?>"  placeholder=""  name="seat" required="">
                                <div class="clearfix"></div>
                                <br>

                            Inseam
                            <input  class="form-control" type="text" value="<?php echo $selectdata[14]; ?>"  placeholder=""  name="inseam" required="">
                                <div class="clearfix"></div>
                                <br>

                            
                            <input type="submit" value="Update">
                        </form>
                        <form action="edit-profile.php">
                        <center><button class="epf">Edit Profile Details</button></center>
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