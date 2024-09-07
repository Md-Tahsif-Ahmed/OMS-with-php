<?php 
  session_start();
  error_reporting(0);
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
      <li class="active">Asset Transfer</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content" style="padding : 20px">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10" style="margin-top:20px; margin-left:90px">
        <!-- general form elements -->
        <div class="box box-primar">
          <div class="box-header with-border">
            <h3 class="box-title">Asset Transfer</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="insert_for_transfer_asset.php" method="post">
            <div class="box-body" style="padding : 25px">
              <div class="form-group">
                <label for="tag_number">Asset Tag Name</label>
                <select class="form-control select2" style="width: 100%;" name="tag_number" id="tag_number">
                  <option selected="selected">Please select One</option>
                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM asset_table");
                  while ($row = mysqli_fetch_array($query)) {
                      $id = $row['id'];
                      $name = $row['tag_number'];
                  ?>
                      <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                  <?php } ?>
              </select>
            </div>
               
              <div class="form-group">
                <label for="branch_from">Branch From</label>
                <select class="form-control select2" style="width: 100%;" name="branch_to" id="branch_to">
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
                <label for="branch_to">Branch To</label>
                <select class="form-control select2" style="width: 100%;" name="branch_to" id="branch_to">
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
                <label for="transfer_date">Tranfer date</label>
                <input type="date" class="form-control" id="transfer_date" name="transfer_date">
              </div>
              
            </div>

            <div class="box-footer">
              <button type="submit" name="asset_transfer_store" class="btn btn-primary">Submit</button>
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

<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

<script>
    $(document).ready(function() {
        $("#tag_number").change(function() {
            var asset_id = this.value;
            $.ajax({
                url: "show-vendor-name.php",
                type: "POST",
                data: {
                    asset_id: asset_id
                },
                cache: false,
                success: function(result) {
                    $("#branch_from").html(result);
                }
            });
        });
    });
</script>