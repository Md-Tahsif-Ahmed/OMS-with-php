<?php
include("header.php");
include("sidebar.php");
include("config.php");
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
      <li><a href="#">Asset Management</a></li>
      <li class="active">Transfer</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content" style="margin-top: 20px;">
  <div class="box box-primary">
      <div class="row">
        <div class="col-md-6">
          <div class="box-header with-border">
        <h3 class="box-title">New Transfer</h3>
          </div>
        </div>
      </div>
          <!-- form start -->
          <div class="box-body">
            <form role="form" action="asset_list.php" method="post">
              <div class="row">
                <!-- Left Box -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="outlet_name">Tag Number</label>
                    <input type="text" class="form-control" id="outlet_name" name="outlet_name" placeholder="Enter the Tag Number">
                  </div>
                  <div class="form-group">
                    <label for="outlet_location"></label>
                    <input type="text" class="form-control" id="outlet_location" name="outlet_location" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="type_owner">Asset Catagory</label>
                    <select class="form-control select2" style="width: 100%;" name="type_owner">
                      <option selected="selected">Please select the asset catagory</option>
                      <option>Computer</option>
                      <option>Air Condition</option>
                      <option>Glass</option>
                      <option>Furniture</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="size">Model (if needed)</label>
                    <input type="text" class="form-control" id="size" name="size" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="monthly_rent">Serial#</label>
                    <input type="text" class="form-control" id="monthly_rent" name="monthly_rent" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="increase_percentage">Barcode</label>
                    <input type="text" class="form-control" id="increase_percentage" name="increase_percentage" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="increase_percentage">Brand Name</label>
                    <input type="text" class="form-control" id="increase_percentage" name="increase_percentage" placeholder="">
                  </div>
                </div>
                <!-- Right Box -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="increase_percentage">Color</label>
                    <input type="text" class="form-control" id="increase_percentage" name="increase_percentage" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="increase_percentage">Condition</label>
                    <input type="text" class="form-control" id="increase_percentage" name="increase_percentage" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="increase_percentage">Vendor</label>
                    <input type="text" class="form-control" id="increase_percentage" name="increase_percentage" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="agree_end_date">Purchased Date</label>
                    <input type="date" class="form-control" id="agree_end_date" name="agree_end_date" placeholder="Start Date">
                  </div>
                  <div class="form-group">
                    <label for="increase_percentage">Purchased Cost</label>
                    <input type="text" class="form-control" id="increase_percentage" name="increase_percentage" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="type_owner">Payment Mode for Purchased</label>
                    <select class="form-control select2" style="width: 100%;" name="type_owner">
                      <option selected="selected">Cash</option>
                      <option>Cheque</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="increase_percentage">Warranty Expiration Date to Caluculate Life Time</label>
                    <input type="date" class="form-control" id="agree_start_date" name="agree_start_date" placeholder="Start Date">
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>

            </form>
          </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php include("footer.php"); ?>

<script type="text/javascript">
  $(function() {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>