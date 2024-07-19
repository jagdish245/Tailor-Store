<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tailor_store";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){
    $user_id = $_SESSION['uid'];
    $neck = $_POST['neck'];
    $chest = $_POST['chest'];
    $waist = $_POST['waist'];
    $seat = $_POST['seat'];
    $shirt_length = $_POST['shirt_length'];
    $shoulder_width = $_POST['shoulder_width'];
    $arm_length = $_POST['arm_length'];
    $wrist = $_POST['wrist'];
    $bottom = $_POST['bottom'];
    $hip = $_POST['hip'];
    $inseam = $_POST['inseam'];

    $sql2 = "insert into tbl_measurements (user_id,neck,chest,waist,seat,shirt_length,shoulder_width,arm_length,wrist,hip,bottom,inseam)
     values ('$user_id','$neck','$chest','$waist','$seat','$shirt_length','$shoulder_width','$arm_length','$wrist','$hip','$bottom','$inseam')";

    if(mysqli_query($conn,$sql2)){
        echo '<script>alert("Data Successfully inserted..!");</script>';
    }else{
        echo"error is :" . mysqli_error($conn);
    }
}
?>

<style>
    .box{
        display: none;
    }
    /*.header-top {
    background: #262626;
    padding: .7em 0;}
    .heder-bottom {
    padding: 1em 0;
    background: darkslategrey;
}*/
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            var inputValue = $(this).attr("value");
            $("." + inputValue).toggle();
        
        });
    });

</script>
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-left">
                <!-- <a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> 7203917285</a> -->
            </div>
            <div class="top-right">
                <ul>
                   
                    <?php 
                    
                    if(isset($_SESSION['uid']))
                    {
                       echo " <li><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#measuremodal' href='#'>Get Measured</button></li>";
                        echo "<li><a href='logout.php'>Logout</a></li>";
                        // echo "<li><a href='view-order.php'> View Order</a></li>";
                    
                    }else
                        {
                             echo "
                        <li><a href='login.php'>Login</a></li>
                        <li><a href='signup.php'> Create Account </a></li>";
                        }
                    
                    ?>
                         </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="heder-bottom">
        <div class="container">
            <div class="logo-nav">
                <div class="logo-nav-left">
                    <h1><a href="index.php">Stylish <span>-Tailor-</span></a></h1>
                </div>
                <div class="logo-nav-left1">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div> 
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav">
                                <!-- <li class="active"><a href="index.php" class="act">Home</a></li> -->   
                                <!-- Mega Menu -->
                                <?php if (isset($_SESSION['uid'])) { ?>
                                <li><a href="edit-measurement.php">Profile</a></li>
                                <?php }?>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <?php
                                            $category = mysqli_query($conn, "select * from tbl_category") or die(mysqli_error($conn));

                                            while ($categorydata = mysqli_fetch_array($category)) {
                                                echo "<div class='col-sm-3  multi-gd-img'>";
                                                echo "<ul class='multi-column-dropdown'>";
                                                $subcategory = mysqli_query($conn, "select * from tbl_subcategory where cat_id ='{$categorydata[0]}'") or die(mysqli_error($conn));
                                                    echo "<h6>$categorydata[1]</h6>";
                                                while ($subcategorydata = mysqli_fetch_array($subcategory)) {
                                                    
                                                    echo "<li><a href='products.php?sid=$subcategorydata[0]'>{$subcategorydata['Sub_cat_name']}</a></li>";
                                                }

                                                echo "</ul></div>";
                                            }
                                            ?>
                                            
                                            
<!--                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu1</h6>
                                                    <li><a href="products.html">Clothing</a></li>
                                                    <li><a href="products.html">Wallets</a></li>

                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu2</h6>
                                                    <li><a href="products.html">Sunglasses</a></li>
                                                    <li><a href="products.html">Wallets,Bags</a></li>

                                                </ul>
                                            </div>
                                            -->
                                            

                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>

                                <li><a href="products.php">Product</a></li>
                               
                                <?php if (isset($_SESSION['uid'])) { ?>
                                
                                <li><a href="view-order.php">Order</a></li>
                                
                                
                                <?php } else { ?>
                                
                                
                                            
                               <?php         } ?>
                                
                                 <!-- <li><a href="about.php">About</a></li> -->
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="logo-nav-right">
                   <!-- cd-header-buttons -->
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Search...">
                        </form>
                    </div>  
                </div>
                <div class="header-right2">
                    <div class="cart box_1">
                        <a href="cart.php">
                            <h3> <div class="total">
                                 Goto Cart
                               
                                 <?php 
                                 
                                 if(isset($_SESSION['cart']))
                                 {
                                     echo  "(".count($_SESSION['cart']).")";
                                 }else
                                 {
                                     
                                 }
                                 
                                 ?>
                                <img src="images/bag.png" alt="" />
                            </h3>
                        </a>
                       
                        <div class="clearfix"> </div>
                    </div>  
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="measuremodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Measurement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" enctype= multipart/form-data>
        <div class="row"> 
            <div class="col-sm-6">
                <!-- <input type="checkbox" value="quick_measurements"> -->
                <input type="checkbox" value="shirt"> Shirt
            </div>

            <div class="col-sm-6">    
                <input type="checkbox" value="pent"> Pent
            </div>

        </div>
        <div class="row shirt box">

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Neck</label>
                    <input type="text" class="form-control" name="neck"id="neck">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Chest</label>
                    <input type="text" class="form-control" name="chest" id="neck">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Waist</label>
                    <input type="text" class="form-control" name="waist" id="neck">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Bottom</label>
                    <input type="text" class="form-control" name="bottom" id="neck">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Shirt Length</label>
                    <input type="text" class="form-control" name="shirt_length" id="neck">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Shoulder Width</label>
                    <input type="text" class="form-control" name="shoulder_width" id="neck">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name"  class="col-form-label">Arm length</label>
                    <input type="text" name="arm_length" class="form-control" id="neck">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name"  class="col-form-label">Wrist</label>
                    <input type="text" name="wrist" class="form-control" id="neck">
                    </div>
                </div>
            </div>

       
        <div class="row pent box">

            <div class="col-sm-6">
                
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Hip</label>
                    <input type="text" class="form-control" name="hip" id="neck">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">seat</label>
                    <input type="text" name="seat" class="form-control" id="neck">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Inseam</label>
                    <input type="text" class="form-control" name="inseam" id="neck">
                    </div>
            </div>
        </div>
       
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary">
      </div>
      </form>
    </div>

  </div>
</div>
</div>