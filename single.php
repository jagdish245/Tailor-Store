<?php
$pid = $_GET['pid'];
require './admin/class/myclass.php';

$productq = mysqli_query($conn, "select * from tbl_product where Product_id ='{$_GET['pid']}'") or die(mysqli_error($conn));
$productdata = mysqli_fetch_array($productq);
$productimageq = mysqli_query($conn, "SELECT * FROM `tbl_product_images` where Pro_id ='{$_GET['pid']}' ORDER BY Pro_imageid DESC") or die(mysqli_error($conn));
$prodictimagedata = mysqli_fetch_array($productimageq);
?><!--

Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title> A One Fashion</title>
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
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
        <!-- cart -->
        <script src="js/simpleCart.min.js"></script>
        <!-- cart -->
        <script defer src="js/jquery.flexslider.js"></script>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <script src="js/imagezoom.js"></script>
        <script>
            // Can also be used with $(document).ready()
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>

        <!--mycart-->
        <!--start-rate-->
        <script src="js/jstarbox.js"></script>
        <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function () {
                jQuery('.starbox').each(function () {
                    var starbox = jQuery(this);
                    starbox.starbox({
                        average: starbox.attr('data-start-value'),
                        changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                        ghosting: starbox.hasClass('ghosting'),
                        autoUpdateAverage: starbox.hasClass('autoupdate'),
                        buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                        stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function (event, value) {
                        if (starbox.hasClass('random')) {
                            var val = Math.random();
                            starbox.next().text(' ' + val);
                            return val;
                        }
                    })
                });
            });
        </script>
        <!--//End-rate-->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <script src="js/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    items: 1,
                    lazyLoad: true,
                    autoPlay: true,
                    navigation: false,
                    navigationText: false,
                    pagination: true,
                });
            });
        </script>

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
                <h3><a href="#">Home</a> / <span>Single</span></h3>
            </div>
        </div>
        <!--banner-->

        <!--content-->
        <div class="content">
            <!--single-->
            <div class="single-wl3">
                <div class="container">
                    <div class="single-grids">
                        <div class="col-md-9 single-grid">
                            <div clas="single-top">
                                <div class="single-left">
                                    <div class="flexslider">
                                        <ul class="slides">
                                            <li data-thumb="images/si.jpg">
                                                <div class="thumb-image"> <img src="<?php  echo "admin/upload/".$prodictimagedata[2]; ?>" data-imagezoom="true" class="img-responsive"> </div>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-right simpleCart_shelfItem">
                                    <h4> <?php  echo $productdata[1]; ?></h4>
                                    
<!--                                    
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>-->
                                    
                                    
                                    <p class="price item_price">Rs.<?php  echo $productdata['Price']; ?></p>
                                    <div class="description">
                                        <p><span>Quick Overview : </span> <?php  echo $productdata['Details']; ?></p>
                                    </div>
                                    
<!--                                    
                                    
                                    <div class="color-quality">
                                        <h6>Quality :</h6>
                                        <div class="quantity"> 
                                            <div class="quantity-select">                           
                                                <div class="entry value-minus1">&nbsp;</div>
                                                <div class="entry value1"><span>1</span></div>
                                                <div class="entry value-plus1 active">&nbsp;</div>
                                            </div>
                                        </div>
                                        quantity
                                        <script>
                                            $('.value-plus1').on('click', function () {
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
                                                divUpd.text(newVal);
                                            });

                                            $('.value-minus1').on('click', function () {
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
                                                if (newVal >= 1)
                                                    divUpd.text(newVal);
                                            });
                                        </script>
                                        quantity
                                    </div>
                                    -->
                                    
                                    <div class="women">
                                        <?php 
                                        
                                        $subquery = mysqli_query($conn, "SELECT
    `tbl_size`.`Size`
    , `tbl_subcategory`.`Sub_cat_name`
    , `tbl_color`.`Color_name`
    , `tbl_product`.`Product_id`
    , `tbl_product`.*
FROM
    `tbl_size`
    INNER JOIN `tbl_product` 
        ON (`tbl_size`.`Size_id` = `tbl_product`.`Size_id`)
    INNER JOIN `tbl_color` 
        ON (`tbl_color`.`Color_id` = `tbl_product`.`Color_id`)
    INNER JOIN `tbl_subcategory` 
        ON (`tbl_subcategory`.`Sub_cat_id` = `tbl_product`.`Sub_cat_id`) WHERE `tbl_product`.`Product_id` ='{$_GET['pid']}'") or die(mysqli_error($conn));
        
        $data = mysqli_fetch_row($subquery);
        
        echo "<br/>Size :<b> </b>" ;
        echo "<select><option>$data[0]</option></select>";
       
        echo "<br/>Type : <b>$data[1] </b>";
        echo "<br/>Color : <b>$data[2] </b>"; 
        echo "<br/>Available Qty : <b>{$productdata[12]} </b>";
        
        
        if($data[12]>0)
        {
            
                                        
                                        
                                        ?>
                                          
                                        <form method="get" action="cart-logic.php">
                                            
                                            <input type="hidden" name="pid" value="<?php echo $_GET['pid']; ?>" >
                                          
                                            <br/>
                                            Qty :<input type="number" min="1" value="1" max="<?php echo $productdata[12]; ?>" name="qty">
                                            
                                            
                                            
                                            <br/> <br/>
                                            <input type="submit"  value="Add to Cart"  class="my-cart-b item_add">
                                        </form>
                                    </br>
                                        <form action="mail.php">
                                            <input type="submit" value="Try Virtually" class="my-cart-b item_add">
                                        </form>
         
                                        <?php 
                                        
        }else
        {
            echo "<font color='red'><h1>Product Out of Stock</h1></font>";
        }
                                        ?>
                                    </div>
                                    <div class="social-icon">
                                        <a href="#"><i class="icon"></i></a>
                                        <a href="#"><i class="icon1"></i></a>
                                        <a href="#"><i class="icon2"></i></a>
                                        <a href="#"><i class="icon3"></i></a>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
<!--                        <div class="col-md-3 single-grid1">
                            <h3>Recent Products</h3>
                            <div class="recent-grids">
                                <div class="recent-left">
                                    <a href="single.html"><img class="img-responsive " src="images/r.jpg" alt=""></a>	
                                </div>
                                <div class="recent-right">
                                    <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <span class=" price-in1"> $ 29.00</span>
                                </div>	
                                <div class="clearfix"> </div>
                            </div>
                            <div class="recent-grids">
                                <div class="recent-left">
                                    <a href="single.html"><img class="img-responsive " src="images/r1.jpg" alt=""></a>	
                                </div>
                                <div class="recent-right">
                                    <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <span class=" price-in1"> $ 19.00</span>
                                </div>	
                                <div class="clearfix"> </div>
                            </div>
                            <div class="recent-grids">
                                <div class="recent-left">
                                    <a href="single.html"><img class="img-responsive " src="images/r2.jpg" alt=""></a>	
                                </div>
                                <div class="recent-right">
                                    <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <span class=" price-in1"> $ 19.00</span>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="recent-grids">
                                <div class="recent-left">
                                    <a href="single.html"><img class="img-responsive " src="images/r3.jpg" alt=""></a>	
                                </div>
                                <div class="recent-right">
                                    <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div> 
                                    <span class=" price-in1">$ 45.00</span>
                                </div>	
                                <div class="clearfix"> </div>
                            </div>
                        </div>-->
                        <div class="clearfix"> </div>
                    </div>
                    <!--Product Description-->
                    <div class="product-w3agile">
                     
<!--                        <div class="product-grids">
                            <div class="col-md-4 product-grid">
                                <div id="owl-demo" class="owl-carousel">
                                    <div class="item">
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="single.html"><img class="img-responsive " src="images/r.jpg" alt=""></a>	
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1"> $ 29.00</span>
                                            </div>	
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="single.html"><img class="img-responsive " src="images/r1.jpg" alt=""></a>	
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1"> $ 19.00</span>
                                            </div>	
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="single.html"><img class="img-responsive " src="images/r2.jpg" alt=""></a>	
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1"> $ 19.00</span>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="single.html"><img class="img-responsive " src="images/r3.jpg" alt=""></a>	
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1">$ 45.00</span>
                                            </div>	
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="single.html"><img class="img-responsive " src="images/r4.jpg" alt=""></a>	
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1"> $ 29.00</span>
                                            </div>	
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="single.html"><img class="img-responsive " src="images/r5.jpg" alt=""></a>	
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1"> $ 19.00</span>
                                            </div>	
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="single.html"><img class="img-responsive " src="images/r2.jpg" alt=""></a>	
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1"> $ 19.00</span>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="single.html"><img class="img-responsive " src="images/r3.jpg" alt=""></a>	
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1">$ 45.00</span>
                                            </div>	
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                            <div class="col-md-8 product-grid1">
                                <div class="tab-wl3">
                                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                                            <li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews">Reviews (1)</a></li>

                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                                <div class="descr">
                                                    <h4>Suspendisse laoreet, augue vel mattis </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                                    <p class="quote">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                                    <div class="video">
                                                        <iframe src="https://player.vimeo.com/video/22158502" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                    </div>
                                                    <ul>
                                                        <li> Twin button front fastening</li>
                                                        <li> Length:65cm</li>
                                                        <li> Regular fit</li>
                                                        <li> Notched lapels</li>
                                                        <li> Internal pockets</li>
                                                        <li> Centre-back vent </li>
                                                        <li> Material : Outer: 40% Linen &amp; 40% Polyamide; Body Lining: 100% Cotton; Lining: 100% Acetate</li>
                                                    </ul>
                                                    <p class="quote">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>

                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
                                                <div class="descr">
                                                    <div class="reviews-top">
                                                        <div class="reviews-left">
                                                            <img src="images/men3.jpg" alt=" " class="img-responsive">
                                                        </div>
                                                        <div class="reviews-right">
                                                            <ul>
                                                                <li><a href="#">Admin</a></li>
                                                                <li><a href="#"><i class="glyphicon glyphicon-share" aria-hidden="true"></i>Reply</a></li>
                                                            </ul>
                                                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="reviews-bottom">
                                                        <h4>Add Reviews</h4>
                                                        <p>Your email address will not be published. Required fields are marked *</p>
                                                        <p>Your Rating</p>
                                                        <div class="block">
                                                            <div class="starbox small ghosting"><div class="positioner"><div class="stars"><div class="ghost" style="width: 42.5px; display: none;"></div><div class="colorbar" style="width: 42.5px;"></div><div class="star_holder"><div class="star star-0"></div><div class="star star-1"></div><div class="star star-2"></div><div class="star star-3"></div><div class="star star-4"></div></div></div></div></div>
                                                        </div>
                                                        <form action="#" method="post">
                                                            <label>Your Review </label>
                                                            <textarea type="text" Name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                        this.value = 'Message...';
                                                                    }" required="">Message...</textarea>
                                                            <div class="row">
                                                                <div class="col-md-6 row-grid">
                                                                    <label>Name</label>
                                                                    <input type="text" value="Name" Name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                this.value = 'Name';}" required="">
                                                                </div>
                                                                <div class="col-md-6 row-grid">
                                                                    <label>Email</label>
                                                                    <input type="email" value="Email" Name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                this.value = 'Email';}" required="">
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <input type="submit" value="SEND">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="custom" aria-labelledby="custom-tab">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>-->
                    </div>
                    <!--Product Description-->
                </div>
            </div>
            <!--single-->
             
            <!--new-arrivals-->
        </div>
        <!--content-->
        <!---footer--->
        <?php
        include './themepart/footer.php';
        ?>
        <!--copy-->

    </body>
</html>