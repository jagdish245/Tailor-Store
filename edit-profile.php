<?php
require './admin/class/myclass.php';

$selectq = mysqli_query($conn,"SELECT * FROM `tbl_user` WHERE User_id ='{$_SESSION['uid']}' ") or die(mysqli_error($conn));
$selectdata  = mysqli_fetch_array($selectq);        

if($_POST)
{
    $User_name = $_POST['User_name'];
    $Dob = $_POST['Dob'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
   
    $phn_no = $_POST['phn_no'];
    $Address = $_POST['Address'];
    
    $q = mysqli_query($conn, "update  `tbl_user` set"
            . " `User_name` = '{$User_name}', `Dob`= '{$Dob}', `Gender` = '{$Gender}', `Email` = '{$Email}', `phn_no` = '{$phn_no}',  `Address` = '{$Address}' where  User_id ='{$_SESSION['uid']}'"
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
Au<!--
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
                        <h3>Edit Profile </h3>
                        <form action="#" method="post">
                            User Name
                            <div class="key">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input  type="text" value="<?php echo $selectdata[1]; ?>" placeholder="Username" name="User_name" required="">
                                <div class="clearfix"></div>
                            </div>
                            DOB
                            <input  class="form-control" type="date" value="<?php echo $selectdata[1]; ?>"    name="Dob" required="">
                                <div class="clearfix"></div>
                             
                            <br/>
                            Phone Number
                            <input  class="form-control" type="number" value="<?php echo $selectdata[6]; ?>"  placeholder="Phone No"  name="phn_no" required="">
                                <div class="clearfix"></div>
                             
                            <br/>
                            Gender
                                <select class="form-control" name="Gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                <div class="clearfix"></div>
                           
                            <br/><br/>
                            Email
                            <div class="key">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input  type="text" value="<?php echo $selectdata[4]; ?>"  placeholder="Email"  name="Email" required="">
                                <div class="clearfix"></div>
                            </div>
                            
                            Address
                             <div class="key">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input  type="text" placeholder="Address" value="<?php echo $selectdata[8]; ?>"   name="Address" required="">
                                <div class="clearfix"></div>
                            </div>
                             
                            <input type="submit" value="Submit">
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