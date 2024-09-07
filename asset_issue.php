<?php
session_start();
include("header.php");
include("sidebar.php");
error_reporting(0);
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
      <li class="active">Asset Re-Issue</li>
    </ol>
  </section>
  <br>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Re-Issue The Asset</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <?php
          if (!isset($_GET['tag_number'])) {
          ?>
            <form role="form" action="" method="">
              <div class="box-body">
                <div class="form-group">
                  <label for="tag_number">Tag Number</label>
                  <input type="text" class="form-control" id="tag_number" name="tag_number" placeholder="Enter the Tag Number">
                </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
          <?php
          } elseif (isset($_GET['tag_number']) and ($_GET['tag_number'] == '' or $_GET['tag_number'] != '153')) {
          ?>
            <form role="form" action="" method="">
              <div class="box-body">
                <div class="form-group">
                  <label for="tag_number">Tag Number</label>
                  <input type="text" class="form-control" id="tag_number" name="tag_number" placeholder="Enter the Tag Number">
                </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
          <?php
          }
          if (isset($_GET['tag_number']) and $_GET['tag_number'] != '' and $_GET['tag_number'] == '153') {
          ?>
            <form role="form" action="outlet_list.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="outlet_name">Tag Number</label>
                  <input type="text" class="form-control" id="outlet_name" name="outlet_name" placeholder="Enter the Tag Number" value="153" readonly>
                </div>
                <div class="form-group">
                  <label for="outlet_location">Asset Description</label>
                  <input type="text" class="form-control" id="outlet_location" name="outlet_location" placeholder="Description" value="Dell Inspiron Laptop" readonly>
                </div>
                <div class="form-group">
                  <label for="type_owner">Asset Catagory</label>
                  <input type="text" class="form-control" id="outlet_location" name="outlet_location" placeholder="" value="Computer" readonly>
                </div>
                <div class="form-group">
                  <label for="size">Model</label>
                  <input type="text" class="form-control" id="size" name="size" placeholder="" value="Inspirot 14 G34TS" readonly>
                </div>
                <div class="form-group">
                  <label for="increase_percentage">Brand Name</label>
                  <input type="text" class="form-control" id="increase_percentage" name="increase_percentage" placeholder="" value="Dell" readonly>
                </div>
                <div class="form-group">
                  <label for="increase_percentage">Quantity</label>
                  <input type="text" class="form-control" id="increase_percentage" name="increase_percentage" placeholder="" value="1" readonly>
                </div>
                <div class="form-group">
                  <label for="increase_percentage">Status</label>
                  <input type="text" class="form-control" id="increase_percentage" name="increase_percentage" placeholder="" Value="Available" readonly>
                </div>
                <div class="form-group" id="location_div">
                  <label for="location">Issuing Branch Name</label>
                  <select class="form-control select2" style="width: 100%;" name="location" id="location">
                    <option value="">Please Select Your Desire Branch</option>
                    <option value="1">Taltola Branch,Khilgaon</option>
                    <option value="2">New Market Branch</option>
                    <option value="2">Mirpur Road Branch</option>
                    <option value="3">Rampura Branch</option>
                    <option value="3">Basundhara Complex Branch</option>
                  </select>
                </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          <?php } ?>
        </div><!-- /.box -->
      </div><!--/.col (left) -->

      <div class="col-md-6">
        <div class="box">
          <div class="box-header">
            <h4>Not Issued Asset List</h4>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Asset Group</th>
                  <th>Tag Number</th>
                  <th>Description</th>
                  <th>Model</th>
                  <th>Issued Outlet Name & Location</th>
                  <th>depleted Period</th>
                  <th>Useful Life</th>
                </tr>
              </thead>
              <tbody class="scroll-pane">
                <tr>
                  <td>Computer</td>
                  <td>153</td>
                  <td>Dell Inspiron Laptop</td>
                  <td>Inspirot 14 G34TS</td>
                  <td><span class="label label-warning">Not Issued</span></td>
                  <td>2Yr 6Mth</td>
                  <td>4Yr</td>
                </tr>
              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>

      <!-- right column -->
    </div> <!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php
include('table_related_footer.php');
?>


<script type="text/javascript">
  $(function() {
    //Initialize Select2 Elements
    $(".select2").select2();
  });

  $(function() {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>