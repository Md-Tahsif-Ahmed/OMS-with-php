<?php
error_reporting(0);
session_start();
include("config.php");
?>
<div class="row">
  <section class="col-lg-6 connectedSortable">
    <div class="box box-primary">
      <div class="box-header">
        <i class="ion ion-clipboard"></i>
        <h3 class="box-title">Outlet List </h3>
        <div class="box-tools pull-right">
        </div>
      </div>
      <!-- coding by sizar -->
      <div class="box-body no-padding">
        <table id="outlet_list" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>SL.</th>
              <th>Outlet Name</th>
              <th>Location</th>
              <th>Brand</th>
              <th>Renewal Status</th>
            </tr>
          </thead>
          <tbody class="scroll-pane">
          <tr>
             <td><a href="infinity.php">1 </a></td>
             <td><a href="infinity.php">New Baily Road Branch </a></td>
             <td><a href="infinity.php">Baily Road </a></td>
             <td><a href="infinity.php">Infinity </a></td>
             <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
            
          </tr>
          <tr>
           <td><a href="infinity.php">2 </a></td>
             <td><a href="infinity.php">New Baily Road Branch </a></td>
             <td><a href="infinity.php">Baily Road </a></td>
             <td><a href="infinity.php">Lubnan</a></td>
             <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
          </tr>
          <tr>
           <td><a href="infinity.php">3 </a></td>
             <td><a href="infinity.php">New Baily Road Branch </a></td>
             <td><a href="infinity.php">Baily Road </a></td>
             <td><a href="infinity.php">Richman </a></td>
             <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
          </tr>
          <tr>
           <td><a href="infinity.php">4 </a></td>
             <td><a href="infinity.php">Taltola Branch </a></td>
             <td><a href="infinity.php">Taltola,Khilgaon </a></td>
             <td><a href="infinity.php">Lubnan </a></td>
             <td><a href="infinity.php"><span class="label label-warning">Need to Renew</span> </a></td>
          </tr>
          
          <tr>
           <td><a href="infinity.php">5 </a></td>
             <td><a href="infinity.php">Dhanmondi Branch </a></td>
             <td><a href="infinity.php">Simanto Square, Dhanmondi </a></td>
             <td><a href="infinity.php">Lubnan </a></td>
             <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
          </tr>
          <tr>
           <td><a href="infinity.php">6 </a></td>
             <td><a href="infinity.php">Basundhara City Branch </a></td>
             <td><a href="infinity.php">Panthapath </a></td>
             <td><a href="infinity.php">Lubnan </a></td>
             <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
          </tr>
          <tr>
           <td><a href="infinity.php">7 </a></td>
             <td><a href="infinity.php">Basundhara City Branch </a></td>
             <td><a href="infinity.php">Panthapath </a></td>
             <td><a href="infinity.php">Infinity </a></td>
             <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
          </tr>
          <tr>
           <td><a href="infinity.php">8 </a></td>
             <td><a href="infinity.php">Basundhara City Branch </a></td>
             <td><a href="infinity.php">Panthapath </a></td>
             <td><a href="infinity.php">Richman </a></td>
             <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
          </tr>
          <tr>
           <td><a href="infinity.php">9 </a></td>
             <td><a href="infinity.php">Jamuna Future Park </a></td>
             <td><a href="infinity.php">Bashundhara </a></td>
             <td><a href="infinity.php">Richman </a></td>
             <td><a href="infinity.php"><span class="label label-warning">Need to Renew</span> </a></td>
          </tr>
          <tr>
             <td><a href="infinity.php">10 </a></td>
             <td><a href="infinity.php">Jamuna Future Park </a></td>
             <td><a href="infinity.php">Bashundhara </a></td>
             <td><a href="infinity.php">Lubnan </a></td>
             <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
          </tr>
          <tr>
           <td><a href="infinity.php">11 </a></td>
             <td><a href="infinity.php">Jamuna Future Park </a></td>
             <td><a href="infinity.php">Bashundhara </a></td>
             <td><a href="infinity.php">Infinity </a></td>
             <td><a href="infinity.php"><span class="label label-warning">Need to Renew</span> </a></td>
          </tr>
          <tr>
           <td><a href="infinity.php">12 </a></td>
             <td><a href="infinity.php">Uttara Branch </a></td>
             <td><a href="infinity.php">Uttara </a></td>
             <td><a href="infinity.php">Infinity </a></td>
             <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
          </tr>
         </tbody>
        </table>
      </div>
    </div>
  </section>
  <section class="col-lg-6 connectedSortable">
    <div class="box box-primary" id="attendance-list">
      <div class="box-header">
        <i class="ion ion-clipboard"></i>
        <h3 class="box-title">Daily Attendance Summary</h3>
      </div>
      <div class="box-body table-responsive no-padding" style="height: 335px">
        <canvas id="attendance_summury" width="400" height="150"></canvas>
      </div>
    </div>
  </section>
</div>
<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="box box-primary">
      <div class="box-header">
        <i class="ion ion-clipboard"></i>
        <h3 class="box-title">Attendance Summary</h3>
        <div class="box-tools pull-right">
        </div>
      </div>
      <div class="box-body no-padding">
        <table id="attendance_list" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>SL.</th>
              <th>Name</th>
              <th>Branch</th>
              <th>Image</th>
              <th>Date</th>
              <th>Time in</th>
              <th>Time out</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody class="scroll-pane">
            <?php
            $n = 1;
            $query = "SELECT * FROM `attendance_table` ORDER BY id DESC";
            $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $a_user_id = $row['user_id'];
                $branch = $row['branch'];
                $attendance_date = $row['attendance_date'];
                $entry_time = $row['entry_time'];
                $exit_time = $row['exit_time'];
                $status = $row['status'];
            ?>
                <tr>
                  <th><?php echo $n?></th>
                  <td>
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM user_table WHERE id = '$a_user_id'");
                    while ($row = mysqli_fetch_array($query)) {
                      echo $row['name'];
                    }
                    ?>
                   </td>
                  <td><?php echo $branch?> </td>
                  <td>
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM user_table WHERE id = '$a_user_id'");
                    while ($row = mysqli_fetch_array($query)) {
                      $user_image = $row['user_image'];
                    }
                    ?>
                    <img src="image/user/<?php echo $user_image; ?>" alt="" class="img-circle mr-3" style="width: 40px">
                   </td>
                  <td><?php echo $attendance_date; ?> </td>
                  <td><?php echo $entry_time; ?></td>
                  <td><?php echo $exit_time; ?></td>
                  <td>
                  <?php
                      if($status == '2') {
                        echo '<span class="label label-warning">Late</span>';
                      } elseif($status == '1') {
                        echo '<span class="label label-success">Present</span>';
                      }
                      elseif($status == '3') {
                        echo '<span class="label label-danger">Absent</span>';
                      }
                    ?>
                  </td>
                </tr>

            <?php $n ++; }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
<div class="row">
  <section class="col-lg-12 connectedSortable" id="asset-request-approval">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Asset Request Approval
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">

          </div>
        </div>
      </div>
      <div class="row" id="asset-table">
        <div class="col-xs-12">
          <h3>
            <a href="add_asset.php" class="btn btn-primary" style="margin-bottom: 50px;">Request New Asset <i class="fa fa-plus-square-o"></i></a>
          </h3>
          <div class="box-body no-padding table-responsive">
            <table id="support_list" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>tag_number</th>
                  <th>asset_category</th>
                  <th>asset_image</th>
                  <th>model</th>
                  <th>vendor</th>
                  <th>purchased_cost</th>
                  <th>warranty</th>
                  <th>purchased_date</th>
                  <th>condition</th>
                  <th>status<th>
                </tr>
              </thead>
              <tbody class="scroll-pane">
                <?php
                $query = "SELECT * FROM asset_table";
                $result = mysqli_query($conn, $query);
                if ($result->num_rows > 0) {

                  while ($row = $result->fetch_assoc()) {
                    $tag_number = $row['tag_number'];
                    $status_request = $row['status_request'];
                    $asset_id = $row['id'];
                    $branch_id = $row['branch_id'];
                    $asset_cat = $row['asset_category'];
                ?>
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td> <?php echo $tag_number;  ?></td>
                      <td> <?php echo $asset_cat ?></td>
                      <td>
                        <?php {
                          $asset_img = $row['asset_img'];
                        ?>
                          <img src="image/asset/<?php echo $asset_img; ?>" alt="" class="img-circle mr-3" style="width: 40px">
                        <?php } ?>
                      </td>
                      <td> <?php echo $row['model'] ?></td>
                      <td> <?php echo $row['vendor'] ?></td>
                      <td> <?php echo $row['purchased_cost'] ?></td>
                      <td> <?php echo $row['warranty'] ?></td>
                      <td> <?php echo $row['purchased_date'] ?></td>
                      <td> <?php echo $row['condition'] ?></td>
                      <td>
                        <?php
                        if ($status_request == 1) {
                          // echo '<span style="color:#F29339;">pending</span>';
                          echo '<span class="label label-warning">pending</span>';
                        } elseif ($status_request == 2) {
                          // echo '<span style="color:green;">approved</span>';
                          echo '<span class="label label-success">approved</span>';
                        } elseif ($status_request == 3) {
                          // echo '<span style="color:red;">declined</span>';
                          echo '<span class="label label-danger">declined</span>';
                        }
                        ?>
                      </td>
                      <td>
                        <?php
                        if ($status_request == 1) {
                        ?>
                          <form action="asset_approve.php" method="post">
                            <input type="hidden" name="asset_id" value="<?php echo $asset_id ?>">
                            <button type="submit" name="submit" class="btn btn-success btn-sm" style="width:60px;height:30px;margin-bottom:5px;">Approve</button>
                          </form>
                          <?php
                          // if($_POST['submit'] == 'update'){
                          //           $query = "UPDATE asset_table
                          //           SET status_request = '2'
                          //           WHERE id = $asset_id;";
                          //           $result = mysqli_query($conn, $query);
                          // }
                          ?>
                          <form action="asset_decline.php" method="post">
                            <input type="hidden" name="asset_id" value="<?php echo $asset_id ?>">
                            <button type="submit" name="submit" class="btn btn-danger btn-sm" style="width:60px;height:30px;margin-bottom:5px;">Decline</button>
                          </form>

                        <?php
                        } elseif ($status_request == 2) {
                        }
                        if (($_SESSION['role_id'] == 1) && ($status_request == 1)) { ?>
                          <a class="btn btn-success sm" href="#">Approve</a>
                          <a class="btn btn-danger sm" href="#">Decline</a>

                        <?php } ?>

                      </td>
                    </tr>

                <?php }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <section class="content-header">
          <h1>
            Maintenance List
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
              <table id="maintenance-list" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SL.</th>
                    <th>Brand Name</th>
                    <th>Branch Name</th>
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
                  $query = "SELECT * FROM maintenance_table";
                  $result = mysqli_query($conn, $query);
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      $id = $row['id'];
                      $branch_id = $row['branch_id'];
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
                        <td>
                          <?php
                          $query_b = mysqli_query($conn, "SELECT * FROM branches_table WHERE id = '$branch_id'");
                          while ($row_b = mysqli_fetch_array($query_b)) {
                            echo $name = $row_b['br_name'];
                          }
                          ?>
                        </td>
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
                            // echo '<span style="color:#F29339;">Requested</span>';
                            echo '<span class="label label-warning">Requested</span>';
                          } elseif ($status_request == 2) {
                            // echo '<span style="color:green;">Process</span>';
                            echo '<span class="label label-info">Process</span>';
                          } elseif ($status_request == 3) {
                            // echo '<span style="color:green;">Complete</span>';
                            echo '<span class="label label-success">Complete</span>';
                          } elseif ($status_request == 4) {
                            // echo '<span style="color:red;">Disposal</span>';
                            echo '<span class="label label-danger">Disposal</span>';
                          }
                          ?>
                        </td>
                        <td> <?php echo $remarks; ?></td>
                        <td>
                          <?php
                          if ($status_request == 4) {
                            //echo '<span>Item Disposal</span>';
                          } elseif ($status_request == 3) {
                            // echo '<span style="color:#f368e0D;">maintenance Complete</span>';
                          } else { ?>
                            <a class="btn btn-primary" href="maintance_update.php?id=<?php echo $id; ?>">status update</a>
                          <?php } ?>
                        </td>
                      </tr>

                  <?php $n ++;}
                  } ?>
                </tbody>
              </table>
            </div>
        </section>
      </div>
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->
</section>
</div>

<!-- coding by sizar -->

<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script>
  $(function() {
    $("#outlet_list").DataTable();
    $("#attendance_list").DataTable();
    $("#support_list").DataTable();
    $("#maintenance-list").DataTable();
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

<!-- <script type="text/javascript">
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
</script> -->

<!-- coding by sizar -->