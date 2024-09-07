<?php
  session_start();

  include("config.php");
?>



  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Asset List
    </h1>
    
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
        <a href="add_asset.php" class="btn btn-primary" style="margin-bottom: 50px;">Request New Asset <i class="fa fa-plus-square-o"></i></a></h3>
        <!-- <div class="box"> -->
        <!-- <div class="box-header">
            <h3 class="box-title"><a href="add_asset.php" class="btn btn-info btn-sm">Add New Outlet <i class="fa fa-plus-square-o"></i></a></h3>
          </div> -->
        <!-- /.box-header -->
        <!-- <div class="box-body table-responsive"> -->
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>tag_number</th>
              
              <th>asset_category</th>
              <th>asset_image</th>
              <th>model</th>
              <th>vendor</th>
              <th> Stock </th>
              
              <th>condition</th>
               
            </tr>
          </thead>
          <tbody class="scroll-pane">
            <?php
              $query = "SELECT * FROM asset_table";
              $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0) {

              while ($row = $result->fetch_assoc()) {
              $tag_number = $row['tag_number'];
              
            ?>

                <tr>
                  <td> <?php echo $tag_number;  ?></td>
                 
                  <td> <?php echo $row['asset_category'] ?></td>
                  <td>
                        <?php
                                      
                           {
                            $asset_img = $row['asset_img']; 
                            ?>
                              <img src="image/asset/<?php echo $asset_img; ?>" alt="" class="img-circle mr-3" style="width: 40px">
                              <?php } ?>
                    </td>
                  <td> <?php echo $row['model'] ?></td>
                  <td> <?php echo $row['vendor'] ?></td>
                  <td> <?php echo $row['stock'] ?></td>
                  
                  
                 
                  <td> <?php echo $row['condition'] ?></td>
                  

                <td><a class="btn btn-primary sm" href="add_maintance.php?id=<?php echo $id; ?>">Request maintanance</a></td>
                </tr>
            <?php       }
            }

            ?>
          </tbody>
        </table>
      </div><!-- /.box-body -->
      <!-- </div> -->
      <!-- /.box -->
    </div>
</div>
</section><!-- /.content -->

</div><!-- /.content-wrapper -->

 

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