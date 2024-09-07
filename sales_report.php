<?php
  session_start();
  include("header.php");
  include("sidebar.php");
  include("config.php");
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Sales Report</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Sales</a></li>
      <li class="active">Report</li>
    </ol>
  </section>

  <section class="content" style="margin-top: 20px;">
    <div class="box box-primary">
      <div class="box-body">
        <form action="sales_report_show.php" method="GET">
          <div class="row">
            <div class="form-group col-md-4 mt-1">
              <label for="owner_des">Brand Name</label>
              <select class="form-control select2" style="width: 100%;" name="brand" id="brand">
              <option selected="selected">Please select One</option>
                <?php
                  $query = mysqli_query($conn, "SELECT * FROM brand_table");
                  while ($row = mysqli_fetch_array($query)) {
                    $id = $row['id'];
                    $name = $row['name'];
                ?>
                <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="col-md-4 form-group mt-1">
              <label for="owner_des">Branch Name</label>
              <select class="form-control select2" style="width: 100%;" name="branch" id="branch">
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

            <div class="col-md-4 form-group mt-1">
              <label for="owner_des">Outlet Name</label>
              <select class="form-control select2" style="width: 100%;" name="outlet" id="outlet">
                <option selected="selected">Please select One</option>
                <?php
                  $query = mysqli_query($conn, "SELECT * FROM outlet_table");
                  while ($row = mysqli_fetch_array($query)) {
                    $id = $row['id'];
                    $name = $row['outlet_name'];
                ?>
                <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                <?php } ?>
              </select>
            </div>


            <div class="form-group col-md-6 mt-1">
              <label for="owner_des">Start date</label>
              <input type="date" name="start_date" class="form-control">
            </div>

            <div class="form-group col-md-6 mt-1">
              <label for="owner_des">End date</label>
              <input type="date" name="end_date" class="form-control">
            </div>
          </div>

          <div class="box-footer">
            <button type="submit" name="show_report" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>

<script type="text/javascript">
    $(function() {
        $(".select2").select2();
    });
</script>

<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<?php include('footer.php') ?>