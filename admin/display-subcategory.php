
<?php
require './class/myclass.php';



   
  
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
          <h2 class="page-head-title">DISPLAY subcategory</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">display subcategory</li>
          </ol>
          <a href="insert-subcategory.php" class="btn btn-primary" style="float: right">Add</a>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading"> Display subcategory
                  <div class="tools dropdown"><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"></a>
                    <ul role="menu" class="dropdown-menu pull-right">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
                <div class="panel-body">
                  <table  class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Sub Category</th>
                   
                        <th>Category</th>
                       <th class="tg-5xsc">Action</th>
                      </tr>
                    </thead>
                    
 <?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry3 = "delete from tbl_subcategory where Sub_cat_id='{$id}'";
    $result3 = mysqli_query($conn, $qry3);

    if ($result3) {
//                                                header("location:disamenity.php");
        echo "<script>alert('Record deleted');</script>";
        echo "<script>
                                            window.location = 'display-subcategory.php';
                                        </script>";
    }
}

$qry = "SELECT
    `tbl_category`.*
    , `tbl_subcategory`.*
FROM
    `tbl_subcategory`
    INNER JOIN `tbl_category` 
        ON (`tbl_subcategory`.`cat_id` = `tbl_category`.`cat_id`);";

$result = mysqli_query($conn,$qry);
 while ($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>{$row['Sub_cat_id']}</td>";
    echo "<td>{$row['Sub_cat_name']}</td>";
    echo "<td>{$row['cat_name']}</td>";
       echo "<td><a href='edit-subcategory1.php?eid={$row['Sub_cat_id']}'><i class='mdi mdi-edit' aria-hidden='true'></i></a> || <a href='?id={$row['Sub_cat_id']}'><i class='mdi mdi-delete' aria-hidden='true'></i></a> </td>";
    
  ;
    echo "<tr>";
}
?>
                      
                    </tbody>
                  </table>
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