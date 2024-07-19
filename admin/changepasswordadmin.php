<?php
require './class/myclass.php';

admin_authentication();
if ($_POST) {
    $opass = mysqli_real_escape_string($conn,$_POST['opass']);
    $npass = mysqli_real_escape_string($conn,$_POST['npass']);
    $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);
    $id=$_SESSION['Email'];
    $getoldpassq = "select Password from tbl_user where Email ='{$id}'";
    $result =  mysqli_query($conn, $getoldpassq);
    $oldpassdata = mysqli_fetch_array($result);

    if ($oldpassdata['Password'] == $opass) {
        if ($npass == $cpass) {

            if ($npass == $oldpassdata['Password']) {
                echo"<script>alert('Old and New Password Not Match');</script>";
            } else {
                $q= "update tbl_user set Password='{$npass}' where Email='{$_SESSION['Email']}'" or die(mysqli_error());
                $result1 =  mysqli_query($conn, $q);
                echo"<script>alert('Password Change');</script>";
            }
        } else {
            echo"<script>alert('New and Confirm Password Not Match');</script>";
        }
    } else {
        echo"<script>alert('Old Password Not Match');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/daterangepicker/css/daterangepicker.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap-slider/css/bootstrap-slider.css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper">
      <?php
      include './theme-part/header.php';
      ?>
      <?php
      include './theme-part/side_bar.php';
      ?>
        
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">change password</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">password insert</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">change password</div>
                <div class="panel-body">
                    <form method="post" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                     
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Oldpassword</label>
                      <div class="col-sm-6">
                          <input type="password" class="form-control" name="opass" required>
                      </div>
                    </div>
                        <div class="form-group">
                      <label class="col-sm-3 control-label">New Password</label>
                      <div class="col-sm-6">
                          <input type="Password"  class="form-control"   name="npass" required="true">
                      </div>
                    </div>
                        
                         <div class="form-group">
                      <label class="col-sm-3 control-label">Confirm Password</label>
                      <div class="col-sm-6">
                          <input type="Password" class="form-control"   name="cpass"  required="true">
                      </div>
                    </div>
                    
                    
                    
                      <p class="text-right">
                          <button type="submit" class="btn btn-space btn-primary">Submit</button>
<!--                          <button class="btn btn-space btn-default">Cancel</button>-->
                        </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
                  </div>
      </div>
       
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
    <script src="assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.formElements();
      });
    </script>
  </body>


</html>