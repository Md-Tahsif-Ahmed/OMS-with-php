<?php
session_start();
include("header.php");
include("sidebar.php");
include("config.php");
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Asset List
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Asset Management</a></li>
      <li class="active">Outlet Wise Asset List</li>
    </ol>
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
        <h3>
          <a href="add_asset.php" class="btn btn-primary" style="margin-bottom: 50px;">Request New Asset <i class="fa fa-plus-square-o"></i></a>
        </h3>
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
                <th>stock</th>
                <th>purchased_cost</th>
                <th>warranty</th>
                <th>purchased_date</th>
                <th>condition</th>
                <th>status<th>
              </tr>
            </thead>
            <tbody class="scroll-pane">
              <?php
              $query = "SELECT * FROM asset_table ORDER BY status_request";
              $result = mysqli_query($conn, $query);
              if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                  $tag_number = $row['tag_number'];
                  $status_request = $row['status_request'];
              ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td> <?php echo $tag_number;  ?></td>

                    <td> <?php echo $row['asset_category'] ?></td>
                    <td>
                      <?php {
                        $asset_img = $row['asset_img'];
                      ?>
                        <img src="image/asset/<?php echo $asset_img; ?>" alt="" class="img-circle mr-3" style="width: 40px">
                      <?php } ?>
                    </td>
                    <td> <?php echo $row['model'] ?></td>
                    <td> <?php echo $row['vendor'] ?></td>
                    <td> <?php echo $row['stock'] ?></td>
                    <td> <?php echo $row['purchased_cost'] ?></td>
                    <td> <?php echo $row['warranty'] ?></td>
                    <td> <?php echo $row['purchased_date'] ?></td>
                    <td> <?php echo $row['condition'] ?></td>
                    <td>
                      <?php
                      if ($status_request == 1) {
                        // echo '<span style="color:blue;">pending</span>';
                        echo '<span class="label label-warning">pending</span>';
                      } elseif ($status_request == 2) {
                        // echo '<span style="color:green;">approved</span>';
                        echo '<span class="label label-success">approved</span>';
                      }
                      ?>
                    </td>

                    <td>
                      <?php
                        if (($_SESSION['role_id'] != 2) && ($status_request == 1)) { ?>
                          <a class="btn btn-success sm" href="#" style="margin-bottom: 4px;">Approve</a>
                          <a class="btn btn-danger sm" href="#">Decline</a>
                      <?php } ?>
                  </td>
                  </tr>
              <?php       }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
<footer class="main-footer">
  <strong>Copyright &copy; 2023 <a href="#">Venture Solutions Ltd.</a>.</strong> All rights reserved.
</footer>
</div>
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