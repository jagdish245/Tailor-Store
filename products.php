<?php
require './admin/class/myclass.php';
?><!--

Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE HTML>
<html>
    <head>
        <title>Tailor store</title>
        <!--css-->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
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
                
            </div>
        </div>
        <!--banner-->
        <!--content-->
        <div class="content">
            <div class="products-agileinfo">
                <h2 style="
         text-align: center;
        font-size: 3em;
        color: white;
        margin-left:205px;
        margin-right:210px;
        background-color: #3e3e3e;"> Products</h2>
                <div class="container">
                    <div class="product-agileinfo-grids w3l">
                        <div class="col-md-3 product-agileinfo-grid">


                            <!--                            <div class="categories">
                                                            <h3>Categories</h3>
                                                            <ul class="tree-list-pad">
                                                                <li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>Women's Wear</label>
                                                                    <ul>
                                                                        <li><input type="checkbox" id="item-0-0" /><label for="item-0-0">Ethnic Wear</label>
                                                                            <ul>
                                                                                <li><a href="products.html">Shirts</a></li>
                                                                                <li><a href="products.html">Caps</a></li>
                                                                                <li><a href="products.html">Shoes</a></li>
                                                                                <li><a href="products.html">Pants</a></li>
                                                                                <li><a href="products.html">SunGlasses</a></li>
                                                                                <li><a href="products.html">Trousers</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><input type="checkbox"  id="item-0-1" /><label for="item-0-1">Party Wear</label>
                                                                            <ul>
                                                                                <li><a href="products.html">Shirts</a></li>
                                                                                <li><a href="products.html">Caps</a></li>
                                                                                <li><a href="products.html">Shoes</a></li>
                                                                                <li><a href="products.html">Pants</a></li>
                                                                                <li><a href="products.html">SunGlasses</a></li>
                                                                                <li><a href="products.html">Trousers</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><input type="checkbox"  id="item-0-2" /><label for="item-0-2">Casual Wear</label>
                                                                            <ul>
                                                                                <li><a href="products.html">Shirts</a></li>
                                                                                <li><a href="products.html">Caps</a></li>
                                                                                <li><a href="products.html">Shoes</a></li>
                                                                                <li><a href="products.html">Pants</a></li>
                                                                                <li><a href="products.html">SunGlasses</a></li>
                                                                                <li><a href="products.html">Trousers</a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1">Best Collections</label>
                                                                    <ul>
                                                                        <li><input type="checkbox" checked="checked" id="item-1-0" /><label for="item-1-0">New Arrivals</label>
                                                                            <ul>
                                                                                <li><a href="products.html">Shirts</a></li>
                                                                                <li><a href="products.html">Shoes</a></li>
                                                                                <li><a href="products.html">Pants</a></li>
                                                                                <li><a href="products.html">SunGlasses</a></li>
                                                                            </ul>
                                                                        </li>
                            
                                                                    </ul>
                                                                </li>
                                                                <li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2">Best Offers</label>
                                                                    <ul>
                                                                        <li><input type="checkbox"  id="item-2-0" /><label for="item-2-0">Summer Discount Sales</label>
                                                                            <ul>
                                                                                <li><a href="products.html">Shirts</a></li>
                                                                                <li><a href="products.html">Shoes</a></li>
                                                                                <li><a href="products.html">Pants</a></li>
                                                                                <li><a href="products.html">SunGlasses</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><input type="checkbox" id="item-2-1" /><label for="item-2-1">Exciting Offers</label>
                                                                            <ul>
                                                                                <li><a href="products.html">Shirts</a></li>
                                                                                <li><a href="products.html">Shoes</a></li>
                                                                                <li><a href="products.html">Pants</a></li>
                                                                                <li><a href="products.html">SunGlasses</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><input type="checkbox" id="item-2-2" /><label for="item-2-2">Flat Discounts</label>
                                                                            <ul>
                                                                                <li><a href="products.html">Shirts</a></li>
                                                                                <li><a href="products.html">Shoes</a></li>
                                                                                <li><a href="products.html">Pants</a></li>
                                                                                <li><a href="products.html">SunGlasses</a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>-->



                            <div class="brand-w3l">
                                <h3>SubCategory Filter</h3>
                                <ul>

                                    <?php
                                    $productcompany = mysqli_query($conn, "SELECT * FROM `tbl_subcategory`
") or die(mysqli_error($conn));

                                    while ($procomprow = mysqli_fetch_array($productcompany)) {
                                        echo "<li><a href='products.php?sid=$procomprow[0]'>{$procomprow['Sub_cat_name']}</a></li>";
                                    }
                                    ?>



                                </ul>
                            </div>
                            <div class="brand-w3l">
                                <h3>Brands Filter</h3>
                                <ul>

                                    <?php
                                    $productcompany = mysqli_query($conn, "SELECT * FROM `tbl_productcompany`
") or die(mysqli_error($conn));

                                    while ($procomprow = mysqli_fetch_array($productcompany)) {
                                        echo "<li><a href='products.php?company=$procomprow[0]'>{$procomprow['Company_name']}</a></li>";
                                    }
                                    ?>



                                </ul>
                            </div>






                            <div class="cat-img">
                                <img class="img-responsive " src="images/45.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-9 product-agileinfon-grid1 w3l">

                            <!--                            <div class="mens-toolbar">
                                                            <p >Showing 1–9 of 21 results</p>
                                                            <p class="showing">Sorting By
                                                                <select>
                                                                    <option value=""> Name</option>
                                                                    <option value="">  Rate</option>
                                                                    <option value=""> Color </option>
                                                                    <option value=""> Price </option>
                                                                </select>
                                                            </p> 
                                                            <p>Show
                                                                <select>
                                                                    <option value=""> 9</option>
                                                                    <option value="">  10</option>
                                                                    <option value=""> 11 </option>
                                                                    <option value=""> 12 </option>
                                                                </select>
                                                            </p>
                                                            <div class="clearfix"></div>		
                                                        </div>
                            -->


                            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">

                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                            <div class="product-tab">



                                                <?php
                                                if (isset($_GET['sid'])) {

                                                    $selectq = mysqli_query($conn, "SELECT * FROM `tbl_product` where Sub_cat_id ='{$_GET['sid']}'
") or die(mysqli_error($conn));
                                                } else if (isset($_GET['company'])) {

                                                    $selectq = mysqli_query($conn, "SELECT * FROM `tbl_product` where product_company_id ='{$_GET['company']}'
") or die(mysqli_error($conn));
                                                } else {

                                                    $selectq = mysqli_query($conn, "SELECT * FROM `tbl_product`
") or die(mysqli_error($conn));
                                                }


                                                while ($row = mysqli_fetch_array($selectq)) {

                                                    $productimageq = mysqli_query($conn, "SELECT * FROM `tbl_product_images` where Pro_id ='{$row[0]}' ORDER BY Pro_imageid DESC") or die(mysqli_error($conn));
                                                    $prodictimagedata = mysqli_fetch_array($productimageq);

                                                    echo "   <div class='col-md-4 product-tab-grid simpleCart_shelfItem'>
                                                    <div class='grid-arr'>
                                                        <div  class='grid-arrival'>
                                                            <figure>		
                                                                <a href='#' class='new-gri' data-toggle='modal' data-target='#myModal1'>
                                                                    <div class='grid-img'>
                                                                        <img  src='admin/upload/{$prodictimagedata['Image_url']}' class='img-responsive' alt=''>
                                                                    </div>
                                                                    <div class='grid-img'>
                                                                        <img  src='admin/upload/{$prodictimagedata['Image_url']}' class='img-responsive'  alt=''>
                                                                    </div>			
                                                                </a>		
                                                            </figure>	
                                                        </div>
                                                        <div class='block'>
                                                            <div class='starbox small ghosting'> </div>
                                                        </div>
                                                        <div class='women'>
                                                            <h6><a href='single.php?pid=$row[0]'>{$row['Product_name']}</a></h6>
                                                           
                                                            <p ><em class='item_price'>Rs.{$row['Price']}</em></p>
                                                            <a href='single.php?pid=$row[0]' data-text='Add To Cart' class='my-cart-b item_add'>Click See Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                             ";
                                                }
                                                ?>


                                                <!--                                                <div class="col-md-4 product-tab-grid simpleCart_shelfItem">
                                                                                                    <div class="grid-arr">
                                                                                                        <div  class="grid-arrival">
                                                                                                            <figure>		
                                                                                                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                                                                                    <div class="grid-img">
                                                                                                                        <img  src="images/p6.jpg" class="img-responsive" alt="">
                                                                                                                    </div>
                                                                                                                    <div class="grid-img">
                                                                                                                        <img  src="images/p5.jpg" class="img-responsive"  alt="">
                                                                                                                    </div>			
                                                                                                                </a>		
                                                                                                            </figure>	
                                                                                                        </div>
                                                                                                        <div class="block">
                                                                                                            <div class="starbox small ghosting"> </div>
                                                                                                        </div>
                                                                                                        <div class="women">
                                                                                                            <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                                                                                            <span class="size">XL / XXL / S </span>
                                                                                                            <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                                                                                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>-->






                                                <div class="clearfix"></div>
                                            </div>



                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                            <div class="product-tab1">
                                                <div class="col-md-4 product-tab1-grid">
                                                    <div class="grid-arr">
                                                        <div  class="grid-arrival">
                                                            <figure>		
                                                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                                    <div class="grid-img">
                                                                        <img  src="images/p6.jpg" class="img-responsive" alt="">
                                                                    </div>
                                                                    <div class="grid-img">
                                                                        <img  src="images/p5.jpg" class="img-responsive"  alt="">
                                                                    </div>			
                                                                </a>		
                                                            </figure>	
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Refert tamen, quo modo. Quod autem meum munus dicis non equidem recuso, sed te adiungo socium. </p>
                                                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="product-tab1 prod3">
                                                <div class="col-md-4 product-tab1-grid">
                                                    <div class="grid-arr">
                                                        <div  class="grid-arrival">
                                                            <figure>		
                                                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                                    <div class="grid-img">
                                                                        <img  src="images/i2.jpg" class="img-responsive" alt="">
                                                                    </div>
                                                                    <div class="grid-img">
                                                                        <img  src="images/i1.jpg" class="img-responsive"  alt="">
                                                                    </div>			
                                                                </a>		
                                                            </figure>	
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Refert tamen, quo modo. Quod autem meum munus dicis non equidem recuso, sed te adiungo socium. </p>
                                                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="product-tab1">
                                                <div class="col-md-4 product-tab1-grid">
                                                    <div class="grid-arr">
                                                        <div  class="grid-arrival">
                                                            <figure>		
                                                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                                    <div class="grid-img">
                                                                        <img  src="images/i4.jpg" class="img-responsive" alt="">
                                                                    </div>
                                                                    <div class="grid-img">
                                                                        <img  src="images/i3.jpg" class="img-responsive"  alt="">
                                                                    </div>			
                                                                </a>		
                                                            </figure>	
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Refert tamen, quo modo. Quod autem meum munus dicis non equidem recuso, sed te adiungo socium. </p>
                                                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="product-tab1 prod3">
                                                <div class="col-md-4 product-tab1-grid">
                                                    <div class="grid-arr">
                                                        <div  class="grid-arrival">
                                                            <figure>		
                                                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                                    <div class="grid-img">
                                                                        <img  src="images/i6.jpg" class="img-responsive" alt="">
                                                                    </div>
                                                                    <div class="grid-img">
                                                                        <img  src="images/i5.jpg" class="img-responsive"  alt="">
                                                                    </div>			
                                                                </a>		
                                                            </figure>	
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Refert tamen, quo modo. Quod autem meum munus dicis non equidem recuso, sed te adiungo socium. </p>
                                                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="product-tab1">
                                                <div class="col-md-4 product-tab1-grid">
                                                    <div class="grid-arr">
                                                        <div  class="grid-arrival">
                                                            <figure>		
                                                                <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                                    <div class="grid-img">
                                                                        <img  src="images/i8.jpg" class="img-responsive" alt="">
                                                                    </div>
                                                                    <div class="grid-img">
                                                                        <img  src="images/i7.jpg" class="img-responsive"  alt="">
                                                                    </div>			
                                                                </a>		
                                                            </figure>	
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Refert tamen, quo modo. Quod autem meum munus dicis non equidem recuso, sed te adiungo socium. </p>
                                                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--content-->
        <!---footer--->
        <?php
        include './themepart/footer.php';
        ?>
        <!--copy-->


    </body>
</html>