<?php
//  include('config.php');

// $sql = "SELECT * FROM attendance";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   echo "<table>";
//   echo "<tr><th>User Image</th><th>In-time</th><th>Out-time</th><th>Attendance Date</th><th>status</th></tr>";

//   while ($row = mysqli_fetch_assoc($result)) {
//     // Check attendance status
//     $status = "";
//     $entry_time = strtotime($row['entry_time']);
//     $exit_time = strtotime($row['exit_time']);
//     if ($entry_time == false || $exit_time == false) {
//       $status = "Absent";
//       $color = "red";
//     } elseif ($entry_time <= strtotime('09:00:00')) {
//       $status = "Present";
//       $color = "green";
//     } else {
//       $status = "Late";
//       $color = "yellow";
//     }

//     // Display row with background color
//     echo "<tr style='background-color:$color'>";
//     echo "<td><img src='" . $row['user_image'] . "' height='50'></td>";
//     echo "<td>" . $row['entry_time'] . "</td>";
//     echo "<td>" . $row['exit_time'] . "</td>";
//     echo "<td>" . $row['attendance_date'] . "</td>";
//     echo "<td>" . $row['status'] . "</td>";
    
//     echo "</tr>";
//   }

//   echo "</table>";
// } else {
//   echo "No attendance data found";
// }

// mysqli_close($conn);
?>


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
    <h1>
      Attandance List
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Attandance</a></li>
      <li class="active">Attandance List</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <!--<div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div>--><!-- /.box-header -->
          <!-- form start -->
        </div><!-- /.box -->
      </div><!--/.col (left) -->
      <!-- right column -->
    </div> <!-- /.row -->

    <div class="row">
      <div class="col-xs-12">
   
        <!-- <div class="box"> -->
        <!-- <div class="box-header">
            <h3 class="box-title"><a href="add_asset.php" class="btn btn-info btn-sm">Add New Outlet <i class="fa fa-plus-square-o"></i></a></h3>
          </div> -->
        <!-- /.box-header -->
        <!-- <div class="box-body table-responsive"> -->
        <table id="example1" class="table table-bordered table-striped">
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
          <tbody class="scroll-pane">
          <?php 
                  $query = "SELECT * FROM `attendance_table` ORDER BY id DESC";
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
                  <td><?php echo $row['id']?></td>
                  <td>
                    <?php
                      $query = mysqli_query($conn,"SELECT * FROM user_table WHERE id = '$a_user_id'");
                      while($row=mysqli_fetch_array($query)) {
                        echo $name = $row['name'];
                      }
                    ?>
                  </td>

                  <td>
                    <?php
                      $query = mysqli_query($conn,"SELECT * FROM user_table WHERE id = '$a_user_id'");
                      while($row=mysqli_fetch_array($query)) {
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
                      if($status == '2') {
                        echo '<span style="color:blue;"">Late</span>';
                      } elseif($status == '1') {
                        echo '<span style="color:green;">Present</span>';
                      }
                      elseif($status == '3') {
                        echo '<span style="color:red;">Absent</span>';
                      }
                    ?>
                  </td>

                </tr>
                <?php }  }?>
 
            
          </tbody>
        </table>
      </div><!-- /.box-body -->
      <!-- </div> -->
      <!-- /.box -->
    </div>
</div>
</section><!-- /.content -->

</div><!-- /.content-wrapper -->


<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.3.0
  </div>
  <strong>Copyright &copy; 2023 <a href="#">Venture Solutions Ltd.</a>.</strong> All rights reserved.
</footer>
<!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Table to Excel -->
 
<script>
  $(function() {
    $("#example1").DataTable();
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
</body>

</html>

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
