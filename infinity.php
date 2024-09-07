<?php
error_reporting(0);
session_start();
include("config.php");
include("header.php");
include("sidebar.php");
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Dashboard
      <small>
        <?php
        if ($_SESSION['role_id'] == 2) {
          echo $_SESSION['address'];
        }
        ?>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <?php { ?>
    <div class="row">
      <section class="col-md-6 connectedSortable">
        <div class="box box-primary" style="margin-left: 10px;">
          <div class="box-header">
            <i class="ion ion-clipboard"></i>
            <h3 class="box-title">My Outlet</h3>
            <div class="box-tools pull-right">
            </div>
          </div>
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Brand</th>
                <td>INFINITY</td>
              </tr>
              <tr>
                <th>Location</th>
                <td>Baily Rooad</td>
              </tr>
              <tr>
                <th>Manager's name</th>
                <td>Kawsar Khan</td>
              </tr>
              <tr>
                <th>Outlet size</th>
                <td>1200 sq ft</td>
              </tr>
              <tr>
                <th>Monthly rent</th>
                <td>40000 BDT</td>
              </tr>
              <tr>
                <th>Agreement period</th>
                <td>4 years</td>
              </tr>
              <tr>
                <th>Next renewal date</th>
                <td>2023-10-07</td>
              </tr>
              <tr>
                <th>renewal status</th>
                <td><span class="label label-success">OK</span></td>
              </tr>
            </table>
          </div>
        </div>
      </section>
      <section class="col-md-6 connectedSortable">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" style="border-radius: 5px;">
            <div class="item active">
              <img src="image/outlet_image/lubnan/7.jpg" alt="">
            </div>

            <div class="item">
              <img src="image/outlet_image/lubnan/8.jpg" alt="">
            </div>


          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
    </div>

    <div class="row" style="margin-top: 50px;">
      <section class="col-md-12 connectedSortable">
        <div class="box box-primary"style="margin-left: 10px;">
          <div class="box-header">
            <i class="ion ion-clipboard"></i>
            <h3 class="box-title">Attendance</h3>
          </div>

          <div class="box-body no-padding">
            <table id="infinity_branch" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Time in</th>
                  <th>Time out</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $n = 1;
                $query = "SELECT * FROM `attendance_table` ORDER BY id DESC LIMIT 5";
                $result = mysqli_query($conn, $query);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $a_user_id = $row['user_id'];
                    $attendance_date = $row['attendance_date'];
                    $entry_time = $row['entry_time'];
                    $exit_time = $row['exit_time'];
                    $status = $row['status'];
                ?>
                    <tr>
                      <td><?php echo $n?></td>
                      <td>
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM user_table WHERE id = '$a_user_id'");
                        while ($row = mysqli_fetch_array($query)) {
                          echo $name = $row['name'];
                        }
                        ?>
                      </td>

                      <td>
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM user_table WHERE id = '$a_user_id'");
                        while ($row = mysqli_fetch_array($query)) {
                          $user_image = $row['user_image'];
                        ?>
                          <img src="image/user/<?php echo $user_image; ?>" alt="" class="img-circle mr-3" style="width: 40px">
                        <?php } ?>
                      </td>

                      <td>
                        <?php
                        echo $attendance_date;
                        ?>
                      </td>

                      <td>
                        <?php
                        echo $entry_time;
                        ?>
                      </td>

                      <td>
                        <?php
                        echo $exit_time;
                        ?>
                      </td>
                      <td>
                        <?php
                        if ($status == '2') {
                          echo '<span class="label label-warning">Late</span>';
                        } elseif ($status == '1') {
                          echo '<span class="label label-success">Present</span>';
                        } elseif($status == '3'){
                          echo '<span class="label label-danger">Absent</span>';
                        }
                        ?>
                      </td>
                    </tr>
                <?php $n ++; }
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
    <section class="content-header">
      <h1>
        Asset List
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
        <a href="add_asset.php" class="btn btn-primary" style="margin-bottom: 50px;">Request New Asset <i class="fa fa-plus-square-o"></i></a>
        </div>
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
              <th>SL.</th>
                <th>tag_number</th>
                <th>asset_category</th>
                <th>asset_image</th>
                <th>model</th>
                <th>vendor</th>
                <th>condition</th>
                <th>Action</th>
            </tr>
              </tr>
            </thead>

            <tbody class="scroll-pane">
                <?php
                $n = 1;
                $branch_query = '';
                //if ($_SESSION['role_id'] == 2) {
                  $branch_query = "WHERE branch_id= '4'";
                //}
                $query = "SELECT * FROM `asset_table` $branch_query ORDER BY id DESC";
                     // $query = "SELECT * FROM asset_table";
                      $result = mysqli_query($conn, $query);

                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {     
                    ?>
                <tr>
                  <!-- <td><?php echo $id?></td> -->
                  <td><?php echo $n?></td>
                <td><?php echo $row['tag_number']; ?></td>
                <td><?php echo $row['asset_category']; ?></td>
                <td>
                <img src="image/asset/<?php echo $row['asset_img']; ?>" alt="" class="img-circle mr-3" style="width: 40px">
                </td>
                <td><?php echo $row['model']; ?></td>
                <td><?php echo $row['vendor']; ?></td>
                <td><?php echo $row['condition']; ?></td>
                <td>
                  <a class="btn btn-primary sm" href="maintanace_update.php?id=<?php echo $id; ?>">Request maintanance</a>
                </td>
                </tr>
                <?php $n ++; }
                  }
                ?>
          </tbody>
          </table>
        </div>
    </section>
    <section class="content-header">
      <h1>
        Maintance List
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <a href="add_maintance.php" class="btn btn-primary">Maintance Request <i class="fa fa-plus-square-o"></i></a>
        </div>
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>SL.</th>
                <th>Brand Name</th>
                <!-- <th>Branch Name</th> -->
                <th>Asset Tag Name</th>
                <th>Category Name</th>
                <th>Model</th>
                <th>Problem Issue Date</th>
                <th>Request Date</th>
                <th>Vendor</th>
                <th>Services Charge</th>
                <th>Status</th>
                <th>Remarks</th>
                <th>Update</th>
              </tr>
            </thead>

            <tbody class="scroll-pane">
              <?php
              $n = 1;
              $branch_query = '';
              //if ($_SESSION['role_id'] == 2) {
                $branch_query = "WHERE brand_id= '3'";
              //}
              $query = "SELECT * FROM `maintenance_table` $branch_query ORDER BY id DESC";
              //$query = "SELECT * FROM maintenance_table";
              $result = mysqli_query($conn, $query);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  //$branch_id = $row['branch_id'];
                  $asset_id = $row['asset_id'];
                  $category_id = $row['category_id'];
                  $isuee_date = $row['isuee_date'];
                  $request_date = $row['request_date'];
                  $vendor = $row['vendor'];
                  $services_charge = $row['services_charge'];
                  $status_request = $row['status_request'];
                  $remarks = $row['remarks'];
              ?>
                  <tr>
                    <td><?php echo $n?></td>
                    <td>
                      <?php
                      $brand_id = $row['brand_id'];
                      $query = mysqli_query($conn, "SELECT * FROM brand_table WHERE id = '$brand_id'");

                      while ($row = mysqli_fetch_array($query)) {
                        echo $name = $row['name'];
                      }
                      ?>
                    </td>
                    <!-- <td>
                      <?php
                      $query_b = mysqli_query($conn, "SELECT * FROM branches_table WHERE id = '$branch_id'");
                      while ($row_b = mysqli_fetch_array($query_b)) {
                        echo $name = $row_b['br_name'];
                      }
                      ?>
                    </td> -->
                    <td>
                      <?php
                      $query = mysqli_query($conn, "SELECT * FROM asset_table WHERE id = '$asset_id'");
                      while ($row = mysqli_fetch_array($query)) {
                        echo $name = $row['tag_number'];
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      $query = mysqli_query($conn, "SELECT * FROM category WHERE id = '$category_id'");

                      while ($row = mysqli_fetch_array($query)) {
                        echo $name = $row['name'];
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      $query = mysqli_query($conn, "SELECT * FROM asset_table WHERE id = '$asset_id'");

                      while ($row = mysqli_fetch_array($query)) {
                        echo $model = $row['model'];
                      }
                      ?>
                    </td>
                    <td> <?php echo $isuee_date; ?></td>
                    <td> <?php echo $request_date; ?></td>
                    <td> <?php echo $vendor; ?></td>
                    <td>
                      <?php
                      if ($status_request == 3) {
                        echo $services_charge;
                      } else {
                        echo '0.00';
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      if ($status_request == 1) {
                        echo '<span style="color:blue;">Request</span>';
                      } elseif ($status_request == 2) {
                        echo '<span style="color:green;">Process</span>';
                      } elseif ($status_request == 3) {
                        echo '<span style="color:#f368e0D;">Complete</span>';
                      } elseif ($status_request == 4) {
                        echo '<span style="color:red;">Disposal</span>';
                      }
                      //echo $status_request; 
                      ?>
                    </td>
                    <td> <?php echo $remarks; ?></td>
                    <td>
                      <?php
                      if ($status_request == 4) {
                        echo '<span></span>';
                      } elseif ($status_request == 3) {
                        echo '<span style="color:#f368e0D;"></span>';
                      } else { ?>
                        <a class="btn btn-primary" href="maintance_update.php?id=<?php echo $id; ?>">Update</a>
                      <?php } ?>
                    </td>
                  </tr>
              <?php $n ++; }
              } ?>
            </tbody>
          </table>
        </div>
    </section>
</div>
<!-- Main content -->
</div>
<?php } ?>

<footer class="main-footer">
        <strong>Copyright &copy; 2023 <a href="">Venture Solutions Ltd</a>.</strong> All rights reserved.
    </footer>
 <?php include("footer.php"); ?>

<!-- coding by sizar -->

<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script>
  $(function() {
    $("#infinity_branch").DataTable();
    $("#asset_list").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<script type="text/javascript">
  $(function() {
    //Initialize Select2 Elements
    $(".select2").select2();
  });

  function filter() {
    var filter_val = document.getElementById("filter_type").value;


    if (filter_val == '') {
      console.log("Select First");
      console.log(filter_val);

      document.getElementById('location_div').style.display = 'none';
      document.getElementById('fare_div_2').style.display = 'none';
      document.getElementById('fare_div_3').style.display = 'none';
      document.getElementById('starting_date_id').style.display = 'none';
      document.getElementById('ending_date_id').style.display = 'none';
    } else {
      if (filter_val == "1") {
        console.log("Location");
        console.log(filter_val);

        document.getElementById('location_div').style.display = 'inline';
        document.getElementById('fare_div_2').style.display = 'none';
        document.getElementById('fare_div_3').style.display = 'none';
        document.getElementById('starting_date_id').style.display = 'none';
        document.getElementById('ending_date_id').style.display = 'none';

      } else if (filter_val == "2") {
        console.log("Fare");
        console.log(filter_val);

        document.getElementById('location_div').style.display = 'none';
        document.getElementById('fare_div_2').style.display = 'inline';
        document.getElementById('fare_div_3').style.display = 'inline';
        document.getElementById('starting_date_id').style.display = 'none';
        document.getElementById('ending_date_id').style.display = 'none';

      } else if (filter_val == "3") {
        console.log("Expiry Date");
        console.log(filter_val);

        document.getElementById('location_div').style.display = 'none';
        document.getElementById('fare_div_2').style.display = 'none';
        document.getElementById('fare_div_3').style.display = 'none';
        document.getElementById('starting_date_id').style.display = 'inline';
        document.getElementById('ending_date_id').style.display = 'inline';

      } else {
        console.log("Out of catagory");
      }
    }
  }
</script>

<!-- coding by sizar -->