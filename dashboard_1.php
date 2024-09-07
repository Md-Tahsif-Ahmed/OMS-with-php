<?php
error_reporting(0);
session_start();
include("config.php");
?>
<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="box box-solid">
      <div class="box-header">
        <div class="pull-right box-tools">
          <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
            <i class="fa fa-minus"></i>
          </button>
        </div>

        <i class="fa fa-map-marker"></i>
        <h3 class="box-title">Outlet Locations</h3>
      </div>

      <div class="box-body">
        <div id="map" style="height: 350px; width: 100%;"></div>
      </div>
    </div>
  </section>
</div>

<div class="row">
  <section class="col-lg-6 connectedSortable">
    <div class="box box-primary">
      <div class="box-header">
        <i class="ion ion-clipboard"></i>
        <h3 class="box-title">Outlet List</h3>
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
            <td><a href="infinity.php">Lubnan </a></td>
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
            <td><a href="infinity.php"><span class="label label-warning">Need to Renew</span> </a></td>
          </tr>
          <tr>
          <td><a href="infinity.php">7 </a></td>
            <td><a href="infinity.php">Basundhara City Branch </a></td>
            <td><a href="infinity.php">Panthapath </a></td>
            <td><a href="infinity.php">Infinity </a></td>
            <td><a href="infinity.php"><span class="label label-warning">Need to Renew</span> </a></td>
          </tr>
          <tr>
          <td><a href="infinity.php">8 </a></td>
            <td><a href="infinity.php">Basundhara City Branch </a></td>
            <td><a href="infinity.php">Panthapath </a></td>
            <td><a href="infinity.php">Richman </a></td>
            <td><a href="infinity.php"><span class="label label-warning">Need to Renew</span> </a></td>
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
            <td><a href="infinity.php"><span class="label label-warning">Need to Renew</span> </a></td>
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
          <tr>
          <td><a href="infinity.php">13 </a></td>
            <td><a href="infinity.php">Nutun Bazar </a></td>
            <td><a href="infinity.php">Mymensingh </a></td>
            <td><a href="infinity.php">Infinity </a></td>
            <td><a href="infinity.php"><span class="label label-warning">Need to Renew</span> </a></td>
          </tr>
          <tr>
          <td><a href="infinity.php">14 </a></td>
            <td><a href="infinity.php">Nutun Bazar </a></td>
            <td><a href="infinity.php">Mymensingh </a></td>
            <td><a href="infinity.php">Lubnan </a></td>
            <td><a href="infinity.php"><span class="label label-warning">Need to Renew</span> </a></td>
          </tr>
          <tr>
          <td><a href="infinity.php">15 </a></td>
            <td><a href="infinity.php">Nutun Bazar </a></td>
            <td><a href="infinity.php">Mymensingh </a></td>
            <td><a href="infinity.php">Richman </a></td>
            <td><a href="infinity.php"><span class="label label-warning">Need to Renew</span> </a></td>
          </tr>
          <tr>
          <td><a href="infinity.php">16 </a></td>
            <td><a href="infinity.php">Uttara Branch </a></td>
            <td><a href="infinity.php">Uttara </a></td>
            <td><a href="infinity.php">Infinity </a></td>
            <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
          </tr>
          <tr>
          <td><a href="infinity.php">17 </a></td>
            <td><a href="infinity.php">Uttara Branch </a></td>
            <td><a href="infinity.php">Uttara </a></td>
            <td><a href="infinity.php">Lubnan </a></td>
            <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
          </tr>
          <tr>
          <td><a href="infinity.php">18 </a></td>
            <td><a href="infinity.php">Uttara Branch </a></td>
            <td><a href="infinity.php">Uttara </a></td>
            <td><a href="infinity.php">Richman </a></td>
            <td><a href="infinity.php"><span class="label label-success">OK</span> </a></td>
          </tr>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- coding by sizar -->
    </div>
  </section>

  <section class="col-lg-6 connectedSortable">
    <div class="box box-primary">
      <div class="box-header">
        <i class="ion ion-clipboard"></i>
        <h3 class="box-title">Daily Attandance Summury</h3>
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
                  <td><?php echo $n?></td>
                  <td>
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM user_table WHERE id = '$a_user_id'");
                    while ($row = mysqli_fetch_array($query)) {
                      echo $row['name'];
                    }
                    ?>
                  </td>
                  <td>
                  
                    <?php echo $branch?>
                    
                  </td>
                  <td>
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM user_table WHERE id = '$a_user_id'");
                    while ($row = mysqli_fetch_array($query)) {
                      $user_image = $row['user_image'];
                    }
                    ?>
                    <img src="image/user/<?php echo $user_image; ?>" alt="" class="img-circle mr-3" style="width: 40px">
                  </td>
                  <td><?php echo $attendance_date; ?></td>
                  <td><?php echo $entry_time; ?></td>
                  <td><?php echo $exit_time; ?></td>
                  <td>
                    <!-- <?php
                    if ($status == '2') {
                      echo '<span style="color:red;"">Late</span>';
                    } elseif ($status == '1') {
                      echo '<span style="color:green;">Present</span>';
                    }
                    ?> -->
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
    <section class="col-lg-6">
      <canvas id="attendance_summury_infinity" width="0" height="0"></canvas>
    </section>
  </div>
<!--Top 5 outlets based on last month-->

<div class="row" style="mask-type: -55px;">
  <!-- Left col -->
  <section class="col-lg-6 connectedSortable">
    <!-- TO DO List -->
    <div class="box box-primary">
      <div class="box-header">
        <i class="ion ion-clipboard"></i>
        <h3 class="box-title">Top 3 Outlets (Based on Last Month)</h3>
      </div><!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>Serial</th>
            <th>Outlet Name</th>
            <th>Brand Name</th>
            <th>Amount (In BDT)</th>
          </tr>
          <tr>
            <td>1</td>
            <td>New Market Branch</td>
            <td>Lubnan</td>
            <td>120,000</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Basundhara City Branch</td>
            <td>Infinity</td>
            <td>95,000</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Baily Road Branch</td>
            <td>Lubnan</td>
            <td>83,000</td>
          </tr>
        </table>
      </div><!-- /.box-body -->
      <br>
      <div class="box-body table-responsive no-padding">
        <canvas id="top_lubnan" width="600" height="325"></canvas>
      </div><!-- /.box-body -->
    </div><!-- /.box -->

  </section>
  <!-- /.Left col -->
  <section class="col-lg-6 connectedSortable">
    <!-- TO DO List -->
    <div class="box box-primary">
      <div class="box-header">
        <i class="ion ion-clipboard"></i>
        <h3 class="box-title">Last 7 Days Sales </h3>
      </div><!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <canvas id="weekly_lubnan" width="600" height="490"></canvas>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </section>

  <canvas id="top_infinity" width="0" height="0"></canvas>
</div>


<!--Last 7 days sales flow-->
<canvas id="weekly_infinity" width="0" height="0"></canvas>
</section><!-- right col -->
<!--Last 6 Months Sales progress-->

<div class="row">
  <!-- Left col -->
  <section class="col-md-12 connectedSortable">
    <!-- TO DO List -->
    <div class="box box-primary">
      <div class="box-header">
        <i class="ion ion-clipboard"></i>
        <h3 class="box-title">Sales Progress</h3>
      </div><!-- /.box-header -->
      <div class="box-body table-responsive ">
        <canvas id="income_lubnan" width="1600" height="400"></canvas>
        <div class="row" style="display: flex; flex-direction: row;margin-left: 550px;">
          <div style="padding: 0 5px;">
            <h6>Red= Large Amount </h6>
          </div>
          <div style="padding: 0 5px;">
            <h6>Blue= Meduim Amount </h6>
          </div>
          <div style="padding: 0 5px;">
            <h6>Green= Low Amount </h6>
          </div>
        </div>
      </div><!-- /.box-body -->
    </div><!-- /.box -->

  </section><!-- /.Left col -->
  <!-- right col (We are only adding the ID to make the widgets sortable)-->
  <canvas id="income_infinity" width="0" height="0"></canvas>
</div>

<!-- coding by sizar -->

<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script>
  $(function() {
    $("#outlet_list").DataTable();
    $("#attendance_list").DataTable();
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