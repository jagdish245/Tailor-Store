<?php
require './admin/class/myclass.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tailor_store";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact_no = $_POST['contact_no'];
	$message = $_POST['message'];

	$sql = "insert into tbl_contact (name,email,contact_no,message) values ('$name','$email','$contact_no','$message')";

	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Contact Query inserted');</script>";
	}else{
		echo"error is :" . mysqli_error($conn);
	}
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Tailor store</title>
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
				<h3><a href="index.html">Home</a> / <span>Mail Us</span></h3>
			</div>
		</div>
	<!--banner-->
		<!--content-->
			<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<h2 class="tittle">Mail Us</h2>
							<div class="mail-grids">
								<div class="mail-top">
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
										<h5>Address</h5>
										<p>F/8 Souram Tower,Nr. Vasna Bus Stop,Ahmedabad -380 007</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
										<h5>Phone</h5>
										<p>Telephone:  9825574625</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
										<h5>E-mail</h5>
										<p>E-mail:<a href="mailto:example@mail.com"> TailorStore@gmail.com</a></p>
									</div>
									<div class="clearfix"></div>
								</div>
								 
								<div class="mail-bottom">
									<h4>Get In Touch With Us</h4>
									<form action="#" method="post">
										<input type="text" name="name"value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>
										<input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
										<input type="text" value="Telephone" name="contact_no" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required>
										<textarea  onfocus="this.value = '';" name="message" placeholder="Message..."required></textarea>
										<input type="submit" name="submit" value="Submit" >
										<input type="reset" value="Clear" >

									</form>
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