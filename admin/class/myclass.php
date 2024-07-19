<?php
session_start();
$conn =  mysqli_connect("localhost", "root","", "tailor_store");
$connection =  mysqli_connect("localhost", "root","", "tailor_store");

if(!$conn){
    echo "Error " . mysqli_error($conn);
}


function admin_authentication()
   {
       
       if(!isset($_SESSION['uid'])) 
       {
           header("location:loginadmin.php");
       }    
   }

?>

