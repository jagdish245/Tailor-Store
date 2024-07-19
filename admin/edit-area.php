<?php
require './class/myclass.php';

if(!isset($_GET['eid'])){
   header("location:display-area.php");
}
$eid = $_GET['eid'];

$edit_query = mysqli_query($conn, "select * from tbl_area where Area_id='{$eid}'");
$edit_details = mysqli_fetch_array($edit_query);
    if ($_POST) {

    

    $Area_name =  mysqli_real_escape_string($conn, $_POST['Area_name']);
   
    $City_id = mysqli_real_escape_string($conn, $_POST['City_id']);
    
   $is_active =1;
    $is_delete = 0;
   
    $insert_datetime = date('Y-m-d h:i:s');
   
  $qry = "update `tbl_area` set `Area_name`='{$Area_name}',`City_id`='{$City_id}',`is_active`='{$is_active}',`is_delete`='{$is_delete}',`insert_datetime`='{$insert_datetime}' where Area_id='{$eid}'";
          
    
    
    
    $result =  mysqli_query($conn, $qry);
    
   if($result){
     echo "<script>alert('Record updated');window.location='display-area.php';</script>";
      
           
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
          <h2 class="page-head-title">EDIT AREA</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">edit area</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Edit</div>
                <div class="panel-body">
                    <form method="post" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                     
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Area Title</label>
                      <div class="col-sm-6">
                        <input type="name"  value="<?php echo $edit_details['Area_name']; ?>" placeholder="Enter Area  name" class="form-control" name="Area_name">
                      </div>
                    </div>
                        <div class="form-group">
                      <label class="col-sm-3 control-label">City</label>
                      <div class="col-sm-8">
                                                                            <?php
                                                                            $sql = mysqli_query($conn,"SELECT * From  tbl_city");
                                                                             $row = mysqli_num_rows($sql);
                                                                            echo '<select name="City_id"  class="form-control">';
										 while ($row = $sql->fetch_array())
                                                                                            {
                                                                                                 echo "<option value='". $row['City_id'] ."'>" .$row['City_name'] ."</option>" ;
                                                                                            }
                                                                             echo "</select>" ;
                                                                            ?>
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