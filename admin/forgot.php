<?php
require './class/myclass.php';
$msg = "";

if(isset($_POST['submit']))
{
    
        echo"<script>alert('Your Password Has been sent to E-mail');</script>";
    
        }
        else
        {
            echo"<script>alert('Please Enter E-mail');</script>";
        }
        
    
    


?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from foxythemes.net/preview/products/beagle2/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 10:26:56 GMT -->
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
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="assets/img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>
              <div class="panel-body">
                <form  method="post">
                  <div class="form-group">
                      <input id="username" type="email" placeholder="Username" autocomplete="off" name="Email" class="form-control">
                  </div>
                 
                  <div class="form-group row login-tools">
                    <div class="col-xs-6 login-remember">
                     
                    </div>
                    <div class="col-xs-6 login-forgot-password"><a href="forgot.php">Log In?</a></div>
                  </div>
                  <div class="form-group login-submit">
                      <button data-dismiss="modal" name="submit" type="submit" class="btn btn-primary btn-xl">Submit</button>
                  </div>
                </form>
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
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
      
    </script>
  </body>


</html>