<?php
session_start();
include("header.php");
include("sidebar.php");
include("config.php");
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Asset Transfer
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Asset Management</a></li>
      <li class="active">Asset Transfer</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <a href="transfer_asset.php" class="btn btn-primary" style="margin-bottom: 50px;">Transfer Here<i class="fa fa-plus-square-o"></i></a></h3>
        <div class="box box-primary">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <div class="col-md-12 text-right"> <button class="btn btn-primary" id="btnExport" onclick="exportReportToExcel(this)">Export</button> </div>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Tag Number</th>
                  <th>Branch From</th>
                  <th>Branch To</th>
                  <th>Transfer Date</th>
                </tr>
              </thead>
              <tbody class="scroll-pane">
                <?php
                $query = "SELECT * FROM asset_transfer";
                $result = mysqli_query($conn, $query);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                      <td><?php echo $row['id']?></td>
                      <td>
                        <?php
                        $tag_number = $row['tag_number'];
                        $q_b = mysqli_query($conn, "SELECT * FROM asset_table WHERE id = '$tag_number'");
                        while ($row_b = mysqli_fetch_array($q_b)) {
                          echo $tag_number = $row_b['tag_number'];
                        }
                        ?>
                      </td>
                      <td>
                        <?php
                        $branch_from = $row['branch_from'];
                        $query_b = mysqli_query($conn, "SELECT * FROM branches_table WHERE id = '$branch_from'");
                        while ($row_b = mysqli_fetch_array($query_b)) {
                          echo $name = $row_b['br_name'];
                        }
                        ?>
                      </td>
                      <td> <?php
                            $branch_to = $row['branch_to'];
                            $query_b = mysqli_query($conn, "SELECT * FROM branches_table WHERE id = '$branch_to'");
                            while ($row_b = mysqli_fetch_array($query_b)) {
                              echo $name = $row_b['br_name'];
                            }
                            ?></td>
                      <td> <?php echo $row['transfer_date'] ?></td>
                    </tr>
                <?php       }
                }
                ?>
              </tbody>
            </table>
          </div>
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