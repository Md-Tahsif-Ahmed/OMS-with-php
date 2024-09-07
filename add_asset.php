<?php
session_start();
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
      <li class="active">Asset List/Add New Asset</li>
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
            <h3 class="box-title">Request New Asset</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="insert_asset.php" method="post">
            <div class="box-body">
              <div class="form-group">
                <label for="tag_number">Tag Number</label>
                <input type="text" class="form-control" id="tag_number" name="tag_number" placeholder="Enter the Tag Number">
                <!-- <input type="text" class="form-control" id="tag_number" name="tag_number" readonly> -->
              </div>
              <div class="form-group">
                <label for="asset_category">Asset Catagory</label>
                <select class="form-control select2" style="width: 100%;" name="asset_category">
                  <option selected="selected">Please select the asset catagory</option>
                  <option value="Computer">Computer</option>
                  <option value="Air Condition">Air Condition</option>
                  <option value="Glass">Glass</option>
                  <option value="Furniture">Furniture</option>
                </select>
              </div>
              <div class="form-group">
                <label for="asset_description">Asset Description</label>
                <input type="text" class="form-control" id="asset_description" name="asset_description" placeholder="Description">
              </div>
              <div class="form-group">
                <label for="stock">Stock</label>
                <select class="form-control select2" style="width: 100%;" name="stock">
                  <option selected="selected">Please select the stock catagory</option>
                  <option value="stock in">stock in</option>
                  <option value="stock out">stock out</option>
                  <option value="pending">pending</option>
                   
                </select>
              </div>
              <div class="form-group">
                <label for="model">Model (if needed)</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="">
              </div>
              <div class="form-group">
                <label for="serial_no">Serial#</label>
                <input type="text" class="form-control" id="serial_no" name="serial_no" placeholder="">
              </div>
              <div class="form-group">
                <label for="barcode">Barcode</label>
                <input type="text" class="form-control" id="barcode" name="barcode" placeholder="">
              </div>
              <div class="form-group">
                <label for="brand_name">Brand Name</label>
                <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="">
              </div>
              <div class="form-group">
                <label for="branch_id">Branch Name</label>
                <select class="form-control select2" style="width: 100%;" name="branch_id" id="branch_id">
                  <option selected="selected">Please select One</option>
                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM branches_table");
                  while ($row = mysqli_fetch_array($query)) {
                    $id = $row['id'];
                    $name = $row['br_name'];
                  ?>
                    <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                  <?php } ?>
                </select>
              </div>



              <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="">
              </div>
              <div class="form-group">
                <label for="condition">Condition</label>
                <input type="text" class="form-control" id="condition" name="condition" placeholder="">
              </div>
              <div class="form-group">
                <label for="vendor">Vendor</label>
                <input type="text" class="form-control" id="vendor" name="vendor" placeholder="">
              </div>
              <div class="form-group">
                <label for="purchased_date ">Purchased Date</label>
                <input type="date" class="form-control" id="purchased_date" name="purchased_date" placeholder="Start Date">
              </div>
              <div class="form-group">
                <label for="purchased_cost">Purchased Cost</label>
                <input type="text" class="form-control" id="purchased_cost" name="purchased_cost" placeholder="">
              </div>
              <div class="form-group">
                <label for="payment_type_purchased">Payment Mode for Purchased</label>
                <select class="form-control select2" style="width: 100%;" name="payment_type_purchased">
                  <option selected="selected">Cash</option>
                  <option value="Cheque">Cheque</option>
                </select>
              </div>
              <div class="form-group">
                <label for="warranty">Warranty Expiration Date to Caluculate Life Time</label>
                <input type="date" class="form-control" id="warranty" name="warranty" placeholder="Start Date">
              </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" name="add_asset" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div><!-- /.box -->
      </div><!--/.col (left) -->
      <!-- right column -->
    </div> <!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php include("footer.php"); ?>

<script type="text/javascript">
  $(function() {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>