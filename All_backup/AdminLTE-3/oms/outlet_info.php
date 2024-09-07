<?php 
	include("header.php");
	include("sidebar.php");
?>

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Outlet Information
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Outlet Management</a></li>
            <li class="active">Reports/Outlet Info</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <!--<div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div>--><!-- /.box-header -->
                <!-- form start -->
                <form>
                  <div class="box-body">
					<div class="form-group">
                      <label for="filter_type">Search Criteria</label>
                      <select class="form-control select2" style="width: 100%;" name="filter_type" id="filter_type" onchange="filter()">
	                      <option value="">Please Select First</option>
	                      <option value="1">Locaion</option>
	                      <option value="2">Fare</option>
	                      <option value="3">Agreement Expiry Date</option>
                      </select>
                    </div>
					
					<div class="form-group" id="location_div" style="display:none;">
                      <label for="location">Location Name</label>
                      <select class="form-control select2" style="width: 100%;" name="location" id="location">
	                      <option value="">Please Select Your Desire Location</option>
	                      <option value="1">Khilgaon</option>
	                      <option value="2">New Market</option>
	                      <option value="2">Mirpur</option>
	                      <option value="3">Rampura</option>
	                      <option value="3">Panthapath</option>
                      </select>
                    </div>
					
					<div class="form-group" id="fare_div_2" style="display:none;">
                      <label for="fare_amount1">Fare Amount Range 1</label>
                      <input type="text" class="form-control" id="fare_amount1" name="fare_amount1" placeholder="Enter 1st Amount">
                    </div>
					
					<div class="form-group" id="fare_div_3" style="display:none;">
                      <label for="fare_amount2">Fare Amount Range 2</label>
                      <input type="text" class="form-control" id="fare_amount2" name="fare_amount2" placeholder="Enter 2nd Amount">
                    </div>
					
					<div class="form-group" id="starting_date_id" style="display:none;">
                      <label for="start_date">Starting Date</label>
                      <input type="date" class="form-control" id="start_date" name="start_date">
                    </div>
                    <div class="form-group" id="ending_date_id" style="display:none;">
                      <label for="end_date">End Date</label>
                      <input type="date" class="form-control" id="end_date" name="end_date" placeholder="Location">
                    </div>
					
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
		  
		  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
					<div class="col-md-12 text-right"> <button class="btn btn-primary" id="btnExport" onclick="exportReportToExcel(this)">Export</button> </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
						  <th>Outlet Name</th>
						  <th>Location</th>
						  <th>Agreement Start Date</th>
						  <th>Agreement End Date</th>
						  <th>Agreement Period</th>
						  <th>Monthly Rental Price</th>
						  <th>Outlet Size (in Sq.Ft)</th>
						  <th>Status</th>
						</tr>
					</thead>
					<tbody class="scroll-pane">
						<tr>
						  <td>New Market Branch</td>
						  <td>New Market</td>
						  <td>2020-01-01</td>
						  <td>2024-12-31</td>
						  <td>4 years</td>
						  <td>35,000</td>
						  <td>1800</td>
						  <td><span class="label label-success">OK</span></td>
						</tr>
						<tr>
						  <td>Taltola Branch</td>
						  <td>Taltola,Khilgaon</td>
						  <td>2020-01-01</td>
						  <td>2023-04-30</td>
						  <td>3 years 2 months</td>
						  <td>25,000</td>
						  <td>1400</td>
						  <td><span class="label label-warning">Need to Renew</span></td>
						</tr>
					</tbody>
					</table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
		
      </div><!-- /.content-wrapper -->

<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="#">Soft</a>.</strong> All rights reserved.
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
      $(function () {
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
	$(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
      });
	  
function filter()
{
	var filter_val = document.getElementById("filter_type").value;
	
	
	if(filter_val=='')
	{
		console.log("Select First");
		console.log(filter_val);
		
		document.getElementById('location_div').style.display = 'none';
		document.getElementById('fare_div_2').style.display = 'none';
		document.getElementById('fare_div_3').style.display = 'none';
		document.getElementById('starting_date_id').style.display = 'none';
		document.getElementById('ending_date_id').style.display = 'none';
	}
	else
	{
		if(filter_val=="1")
		{
			console.log("Location");
			console.log(filter_val);
			
			document.getElementById('location_div').style.display = 'inline';
			document.getElementById('fare_div_2').style.display = 'none';
			document.getElementById('fare_div_3').style.display = 'none';
			document.getElementById('starting_date_id').style.display = 'none';
			document.getElementById('ending_date_id').style.display = 'none';
			
		}
		else if(filter_val=="2")
		{
			console.log("Fare");
			console.log(filter_val);
			
			document.getElementById('location_div').style.display = 'none';
			document.getElementById('fare_div_2').style.display = 'inline';
			document.getElementById('fare_div_3').style.display = 'inline';
			document.getElementById('starting_date_id').style.display = 'none';
			document.getElementById('ending_date_id').style.display = 'none';
			
		}
		else if(filter_val=="3")
		{
			console.log("Expiry Date");
			console.log(filter_val);
			
			document.getElementById('location_div').style.display = 'none';
			document.getElementById('fare_div_2').style.display = 'none';
			document.getElementById('fare_div_3').style.display = 'none';
			document.getElementById('starting_date_id').style.display = 'inline';
			document.getElementById('ending_date_id').style.display = 'inline';
			
		}
		else
		{
			console.log("Out of catagory");
		}
	}
}

</script>