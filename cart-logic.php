<?php

session_start();

//Stores PID of Product
$pid = $_GET['pid'];
$qty = $_GET['qty'];


//First Check the Condition Cart Session is Set or not 
// if session is set means user already added one product into cart 
if (isset($_SESSION['cart'])) {

    if (in_array($pid, $_SESSION['cart'])) {
        
        echo "<script>alert('Product is Already in Cart');window.location='cart.php';</script>";
        header("location:cart.php");
        
    } else {
        //Counter variable store previous value + 1
        $counter = $_SESSION['count'] + 1;
        //Now we have to store new value in Session Count varibale for further use
        $_SESSION['count'] = $counter;
        //Now Assign new value to Cart
        $_SESSION['cart'][$counter] = $pid;
        $_SESSION['qty'][$counter] = $qty;
    }
} else {
    //If Session cart is not set then create one Array of Session cart 
    // cart session variable stores all the products id which are added in Cart
    $_SESSION['cart'] = array();
    //First time we have to fix 0 position of an array 
    $_SESSION['cart'][0] = $pid;
    $_SESSION['qty'][0] = $qty;
    //Count Session will use for adding new number
    $_SESSION['count'] = 0;
}
header("location:cart.php");
print_r($_SESSION);


