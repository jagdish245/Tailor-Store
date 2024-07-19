<?php
require './class/myclass.php';

if(!isset($_GET['eid'])){
   header("location:display-subcategory.php");
}
$eid = $_GET['eid'];

$edit_query = mysqli_query($conn, "select * from tbl_subcategory where Sub_cat_id='{$eid}'");
$edit_details = mysqli_fetch_array($edit_query);
    if ($_POST) {

    

    $Sub_catname= mysqli_real_escape_string($conn,$_POST['Sub_catname']);
     $cat_id= mysqli_real_escape_string($conn,$_POST['cat_id']);
      $Sub_catimgurl= mysqli_real_escape_string($conn,$_FILES['Sub_catimgurl']['name']);
   
    
    
   $is_active =1;
    $is_delete = 0;
   
    $insert_datetime = date('Y-m-d h:i:s');
   
  $qry = "update `tbl_subcategory` set `Sub_cat_name`='{$Sub_catname}',`cat_id`='{$cat_id}',`Sub_cat_imgurl`='{$Sub_catimgurl}',`is_active`='{$is_active}',`is_delete`='{$is_delete}',`insert_datetime`='{$insert_datetime}' where Sub_cat_id='{$eid}'";
          
    
    
    
    $result =  mysqli_query($conn, $qry);
    
   if($result){
     echo "<script>alert('Record updated');window.location='display-subcategory.php';</script>";
      
           
    } else {
         echo "Error " . mysqli_error($conn); 
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
          <h2 class="page-head-title">EDIT subcategory</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">edit subcategory</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Edit</div>
                <div class="panel-body">
                    <form method="post" style="border-radius: 0px;" enctype="multipart/form-data"  class="form-horizontal group-border-dashed">
                     
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Sub Category</label>
                      <div class="col-sm-6">
                          <input type="name"  value="<?php echo $edit_details['Sub_cat_name']; ?>" placeholder="Enter Sub catname" class="form-control" name="Sub_catname">
                      </div>
                    </div>
                        
                        <div class="form-group">
                      <label class="col-sm-3 control-label">Category</label>
                      <div class="col-sm-8">
                        <?php
                        $sql = mysqli_query($conn,"SELECT * From  tbl_category") or die(mysqli_error($conn));
                         $row = mysqli_num_rows($sql);
                        echo '<select name="cat_id"  class="form-control">';
                             while ($row = $sql->fetch_array())
                                        {
                                             echo "<option value='". $row['cat_id'] ."'>" .$row['cat_name'] ."</option>" ;
                                        }
                         echo "</select>" ;
                        ?>
                    </div>
                    </div>
                        
                        
                        <div class="form-group">
                      <label class="col-sm-3 control-label">Image</label>
                      <div class="col-sm-6">
                          <input type="file"  value="<?php echo $edit_details['Sub_cat_imgurl']; ?>" placeholder="Enter Sub catimgurl" class="form-control" name="Sub_catimgurl">
                      </div>
                    </div>
                        
<!--                         <div class="form-group">
                      <label class="col-sm-3 control-label">is_active</label>
                      <div class="col-sm-6">
                        <input type="text" name='is_active'class="form-control">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-3 control-label">is_delete</label>
                      <div class="col-sm-6">
                        <input type="text" name='is_delete'class="form-control">
                      </div>
                    </div>
                        <div class="form-group">
                      <label class="col-sm-3 control-label">insert_datetime</label>
                      <div class="col-sm-6">
                        <input type="date" name='insert_datetime'class="form-control">
                      </div>
                    </div>-->
                    
                    
                    
                      <p class="text-right">
                          <input type="submit"  value="update" class="btn btn-space btn-primary">
                          <input type="cancel"  value="cancel" class="btn btn-space btn-default">
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