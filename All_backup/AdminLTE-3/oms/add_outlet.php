<?php 
  include("config.php");
	include("header.php");
	include("sidebar.php");
?>

 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <!-- <h1>
            General Form Elements
            <small>Preview</small>
          </h1> -->
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Outlet List</a></li>
            <li class="active">Add New Outlet</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add New Outlet</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="outlet_list.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="outlet_name">Outlet Name</label>
                      <input type="text" class="form-control" id="outlet_name" name="outlet_name" placeholder="Enter the outlet name">
                    </div>
					<div class="form-group" id="brand_div">
                      <label for="brand_name">Brand Name</label>
                      <select class="form-control select2" style="width: 100%;" name="brand_name" id="brand_name">
	                      <option value="">Please Select Brand</option>
	                      <option value="1">Lubnan</option>
	                      <option value="2">Infinity</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="outlet_location">Outlet Location</label>
                      <input type="text" class="form-control" id="outlet_location" name="outlet_location" placeholder="Location">
                    </div>
					<div class="form-group">
                      <label for="outlet_location">Outlet Latitude</label>
                      <input type="text" class="form-control" id="outlet_location" name="outlet_location" placeholder="Latitude">
                    </div>
					<div class="form-group">
                      <label for="outlet_location">Outlet Longitude</label>
                      <input type="text" class="form-control" id="outlet_location" name="outlet_location" placeholder="Longitude">
                    </div>
                    <div class="form-group">
                      <label for="size">Outlet Size</label>
                      <input type="text" class="form-control" id="size" name="size" placeholder="In Sq. Ft.">
                    </div>
					<div class="form-group" id="brand_div">
                      <label for="brand_name">Weekly Closed Day</label>
                      <select class="form-control select2" style="width: 100%;" name="brand_name" id="brand_name">
	                      <option value="">Please Select</option>
	                      <option value="1">Saturday</option>
	                      <option value="2">Sunday</option>
	                      <option value="3">Monday</option>
	                      <option value="3">Tuesday</option>
	                      <option value="3">Wednesday</option>
	                      <option value="3">Thursday</option>
	                      <option value="3">Friday</option>
                      </select>
                    </div>
					<div class="form-group">
                      <label for="outlet_img">Front side Photo of Store</label>
                      <input type="file" id="outlet_img" name="outlet_img" accept="image/*" onchange="loadFile(event)">
					  <br>
					  <img id="output"  width="150" height="130"/>
                    </div>
					<div class="form-group">
                      <label for="manager_name">Name of Manager</label>
                      <input type="text" class="form-control" id="manager_name" name="manager_name" placeholder="">
                    </div>
					<div class="form-group">
                      <label for="manager_contact">Contact No. of Manager</label>
                      <input type="text" class="form-control" id="manager_contact" name="manager_contact" placeholder="">
                    </div>
                    <div class="form-group">
                      
                    </div>
                    <div class="form-group">
                      <h4><label class="label label-success">Agreement Details</label></h4>
                    </div>
                    <div class="form-group">
                      <label for="agree_start_date">Agreement Start Date</label>
                      <input type="date" class="form-control" id="agree_start_date" name="agree_start_date" placeholder="Start Date">
                    </div>
                    <div class="form-group">
                      <label for="agree_end_date">Agreement End Date</label>
                      <input type="date" class="form-control" id="agree_end_date" name="agree_end_date" placeholder="Start Date">
                    </div>
                    <div class="form-group">
                      <label for="type_owner">Type of ownership</label>
                      <select class="form-control select2" style="width: 100%;" name="type_owner">
	                      <option selected="selected">Rental</option>
	                      <option>Owner</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="owner_des">Short Description of Owner</label>
                      <input type="textarea" class="form-control" id="owner_des" name="owner_des" placeholder="Name,Contact No. separated by comma">
                    </div>
                    <div class="form-group">
                      <label for="monthly_rent">Monthly Rent</label>
                      <input type="text" class="form-control" id="monthly_rent" name="monthly_rent" placeholder="In BDT">
                    </div>
                    <div class="form-group">
                      <label for="increase_percentage">Rent Amount Increase Percentage After Renew</label>
                      <input type="text" class="form-control" id="increase_percentage" name="increase_percentage" placeholder="%">
                    </div>
                    <div class="form-group">
                      <label for="agree_copy">Upload Agreement File</label>
                      <input type="file" id="agree_copy" name="agree_copy">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php include("footer.php");?>

<script type="text/javascript">
	$(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
      });
	  
	  
var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>