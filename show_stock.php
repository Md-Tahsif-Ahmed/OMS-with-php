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
      Maintanance List
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Maintanance</a></li>
      <li class="active">Maintanance List</li>
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
        <h3>
        <a href="add_stock.php" class="btn btn-primary">  Add Stock<i class="fa fa-plus-square-o"></i></a></h3>
        <!-- <div class="box"> -->
        <!-- <div class="box-header">
            <h3 class="box-title"><a href="add_asset.php" class="btn btn-info btn-sm">Add New Outlet <i class="fa fa-plus-square-o"></i></a></h3>
          </div> -->
        <!-- /.box-header -->
        <!-- <div class="box-body table-responsive"> -->
        <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
              
              <th>Brand Name</th>
              <th>Category Name</th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Unit</th>
              <th>Type</th>
              
            </tr>
          </thead>
          <tbody class="scroll-pane">
            <?php
              $query = "SELECT * FROM stock_table";
              $result = mysqli_query($conn, $query);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                 // $id = $row['id'];
                  $brand_id = $row['brand_id'];
                  $category_id = $row['category_id'];
                  $product_id = $row['product_id'];
                  $quantity = $row['quantity'];
                  $price = $row['price'];
                  $unit= $row['unit'];
                  $type = $row['type'];
                   
            ?>

            <tr>
              <!-- <td><?php echo $row['id']?></td> -->
              <td> 
                <?php
                    $brand_id = $row['brand_id'];
                    $query = mysqli_query($conn,"SELECT * FROM brand_table WHERE id = '$brand_id'");
                
                    while($row=mysqli_fetch_array($query)) {
                      echo $name = $row['name'];
                    } 
                ?>
              </td>

              <td> 
                <?php 
                  $query = mysqli_query($conn,"SELECT * FROM category WHERE id = '$category_id'");
              
                  while($row=mysqli_fetch_array($query)) {
                    echo $name = $row['name'];
                  } 
                ?>
              </td>
              <td> 
                <?php 
                  $query = mysqli_query($conn,"SELECT * FROM product_table WHERE id = '$product_id'");
              
                  while($row=mysqli_fetch_array($query)) {
                    echo $name = $row['product_name'];
                  } 
                ?>
              </td>
              
              <td> <?php echo $quantity; ?></td>
              <td> <?php echo $price; ?></td>
              <td> <?php echo $unit; ?></td>
               
               
              <td> <?php echo $type; ?></td>
               
            </tr>

            <?php } } ?>
           
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