<?php

$conn =  mysqli_connect("localhost", "root","", "tailor_store"); ?>
<?php

 use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;
            require './admin/class/myclass.php';
            require 'phpmailer/src/Exception.php';
            require 'phpmailer/src/PHPMailer.php';
            require 'phpmailer/src/SMTP.php';

    if($_POST)
    {
        $Email = $_POST['txt1'];
        
        $selectquery = mysqli_query($conn, "select * from tbl_user where Email='{$Email}'") or die(mysqli_error($conn));
        
            $count = mysqli_num_rows($selectquery);
        $row = mysqli_fetch_row($selectquery);
        $pass=$row[5];
        
        if($count>0){
            
    //          require './PHPMailerAutoload.php';
    // //        require_once './class.phpmailer.php';

    //         $mail = new PHPMailer;

    //         $mail->isSMTP();                                // Set mailer to use SMTP
                                                 
            
    //         $mail->SMTPAuth = true;                               // Enable SMTP authentication
    //         $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    //         $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    //         $mail->Port = 587;                                    // TCP port to connect to
    //         $mail->Username = 'aonefashion12@gmail.com';                 // SMTP username
    //         $mail->Password = 'meet1234';                           // SMTP password
            
    //         $mail->addReplyTo('aonefashion12@gmail.com', 'aonefashion12@gmail.com');
            
    //         $mail->setFrom('aonefashion12@gmail.com', 'aonefashion12@gmail.com');
            
    //         $mail->addReplyTo('aonefashion12@gmail.com', 'aonefashion12@gmail.com');
            
    //         $address = $row[1];
    //         $mail->addAddress($address, 'Company Name');     // Add a recipient
           
    //         $mail->addAddress('abcd1234@gmail.com', 'Company Name');     // Add a recipient
           
    //         $mail->isHTML(true);                                  // Set email format to HTML

    //         $mail->Subject = "Forgot Password" ;
    //         $body = "Password is $row[5]";
    //         $mail->msgHTML($body);
            

    //         if(!$mail->send()) {
    //             echo "<script> alert ('Password could not be sent.');</script>";
    //             echo 'Mailer Error: ' . $mail->ErrorInfo;
    //         } else {
    //             echo "<script> alert ('Your Password sent on your Email ID.');window.location='Login.php';</script>";
    //         }
            
           
            
          try{

        $mail =  new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->isSMTP(); // tell to use smtp
        $mail->CharSet = "utf-8"; // set charset to utf8
        $mail->SMTPAuth = true;  // use smpt auth
        $mail->SMTPSecure = "tls"; // or ssl
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; // most likely something different for you. This is the mailtrap.io port i use for testing.
        $mail->Username = "prjptjagadish61@gmail.com";
        $mail->Password = "Jagdish!177245";
                                    //SMTP password
       
        

        $mail->Subject ="Password";
        $mail->isHTML(true);
        $mail->MsgHTML("Tailor store");
        $mail->setFrom("prjptjagadish61@gmail.com", "Tailor store");
        $mail->AddAddress($Email,'Virtual try-on');
        $mail->Body='Your Stylish Tailor Password is :'.$pass ;
        $mail->send();
        
        $respone['success'] = "Request has been submitted successfully, we will get back to you shortly.";
        
    
   
    echo "<script>alert('Password sent through E-mail');</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    // Load Composer's autoloader
    // require 'vendor/autoload.php';  
            
        }
        else{
            echo "<script>alert('Email Id is not Found');</script>";
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
                        <h3>Forgot Password</h3>
                        <form action="#" method="post">
                            <div class="key">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input  type="email" id="txt1"  name="txt1" required="">
                                <div class="clearfix"></div>
                            </div>
                             
                            <input type="submit" value="Login">
                        </form>
                    </div>
                    <div class="forg">
                        <a href="login.php" class="forg-right">Login</a>
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