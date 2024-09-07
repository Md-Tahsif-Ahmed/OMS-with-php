<?php 
	include("header.php");
	include("sidebar.php");
?>

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Outlet Inquiry
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Outlet Management</a></li>
            <li class="active">Reports/Outlet Inquiry</li>
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
                <form method="" action="">
                  <div class="box-body">
				  
				    <div class="form-group" id="brand_div">
                      <label for="brand_name">Brand Name</label>
                      <select class="form-control select2" style="width: 100%;" name="brand_name" id="brand_name">
	                      <option value="">Please Select Brand</option>
	                      <option value="1">Lubnan</option>
	                      <option value="2">Infinity</option>
                      </select>
                    </div>
					
					<div class="form-group" id="location_div">
                      <label for="location">Location Name</label>
                      <select class="form-control select2" style="width: 100%;" name="location" id="location">
	                      <option value="">Please Select Your Desire Branch</option>
	                      <option value="1">Taltola Branch,Khilgaon</option>
	                      <option value="2">New Market Branch</option>
	                      <option value="2">Mirpur Road Branch</option>
	                      <option value="3">Rampura Branch</option>
	                      <option value="3">Basundhara Complex Branch</option>
                      </select>
                    </div>
					
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
			<!--<div class="col-md-6">
			<?php
			if(isset($_GET['location']))
			{
			?>
				<div class="box">
					<div class="box-body table-responsive no-padding">
					  <img src="image\outlet_image\lubnan\1.jpg" alt="photo" width="100%" height="300">
					</div>
				</div>
			<?php
			}
			?>
			</div>-->
            <!-- right column -->
          </div>   <!-- /.row -->
		  
		  <div class="row">
		  <?php
			if(isset($_GET['location']))
			{
		  ?>
            <div class="col-xs-6">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
					<table class="table table-striped table-bordered">					
						<tr>
							<th>Brand Name</th>
							<td>Lubnan</td>
						</tr>
						<tr>
							<th>Outlet Name</th>
							<td>Taltola Branch</td>
						</tr>
						<tr>
							<th>Location</th>
							<td>Khilgaon</td>
						</tr>
						<tr>
							<th colspan="2"><center class="label label-success">Agreement Information</center></th>
						</tr>
						<tr>
							<th>Starting Date</th>
							<td>2021-10-01</td>
						</tr>
						<tr>
							<th>Expiry Date</th>
							<td>2024-09-30</td>
						</tr>
						<tr>
							<th>Monthly Fare</th>
							<td>40,000 BDT</td>
						</tr>
						<tr>
							<th>Agreement Status</th>
							<th><font color="orange">Regular</font></th>
						</tr>
						<tr>
							<th colspan="2"><center class="label label-success">HR Info of Outlet</center></th>
						</tr>
						<tr>
							<th>No of Employee</th>
							<td>5</td>
						</tr>
						<tr>
							<th>Present (On Date)</th>
							<td>5</td>
						</tr>
						<tr>
							<th>Absent (On Date)</th>
							<td>0</td>
						</tr>
						<tr>
							<th>On Leave (On Date)</th>
							<td>0</td>
						</tr>
						<tr>
							<th>Leave Request (On Date)</th>
							<td>0</td>
						</tr>
						<tr>
							<th colspan="2"><center class="label label-success">Sales Information</center></th>
						</tr>
						<tr>
							<th>Last Day Sales</th>
							<td>20,000 BDT</td>
						</tr>
						<tr>
							<th>Sales Upto Date</th>
							<td>1,20,000 BDT</td>
						</tr>
						<tr>
							<th>Last Month Sales Target</th>
							<td>5,00,000 BDT</td>
						</tr>
						<tr>
							<th>Last Month Sales Achieve</th>
							<td>4,50,000 BDT</td>
						</tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
			<div class="col-xs-6">
				<!--chart-->
				  <!-- Map box -->
				  <!-- TO DO List -->
				  <!--pie-->
				  <div class="box box-primary">
					<div class="box-header">
					  <i class="ion ion-clipboard"></i>
					  <h3 class="box-title">Monthly Attandance Summury</h3>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
					  <canvas id="attendance_summury_lubnan" width="600" height="190"></canvas>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
				  
				  <!--line-->
				  <div class="box box-primary">
					<div class="box-header">
					  <i class="ion ion-clipboard"></i>
					  <h3 class="box-title">Last 7 Days Sales</h3>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
					  <canvas id="weekly_lubnan" width="600" height="190"></canvas>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
				  
				  <!--bar-->
				  <div class="box box-primary">
					<div class="box-header">
					  <i class="ion ion-clipboard"></i>
					  <h3 class="box-title">Last 6 Months Sales Progress</h3>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
					  <canvas id="income_lubnan" width="600" height="181"></canvas>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
			</div>
			<?php
			}
			?>
          </div>
        </section><!-- /.content -->
		
      </div><!-- /.content-wrapper -->

<?php
	include('table_related_footer.php');
?>


<script type="text/javascript">
	$(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
      });
	  
	  


// Daily Attendance Percentage
/******Data for Lubnan******/
//dognut chart data

var donutEl = document.getElementById("attendance_summury_lubnan").getContext("2d");
var donut = new Chart(donutEl).Doughnut(
	// Datas
	[
		{
			value: 60,
			color: "#46BFBD",
			highlight: "#5AD3D1",
			label: "Present (in %)"
		},
		{
			value: 15,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Absent (in %)"
		},
		{
			value: 5,
			color: "#FDB45C",
			highlight: "#FFC870",
			label: "On Leave (in %)"
		}
	],
	// Options
	{
		segmentShowStroke : true,
		segmentStrokeColor : "#fff",
		segmentStrokeWidth : 2,
		percentageInnerCutout : 50,
		animationSteps : 100,
		animationEasing : "easeOutBounce",
		animateRotate : true,
		animateScale : false,
		responsive: true,
		maintainAspectRatio: true,
		showScale: true,
		animateScale: true
	});
	
	

// start last 7 days sales progress
/******Data for Lubnan******/

// line chart data
		var buyerData = {
			labels : ["Sat","Sun","Mon","Tue","Wed","Thursday","Friday"],
			datasets : [
			{
				fillColor : "rgba(172,194,132,0.4)",
				strokeColor : "#ACC26D",
				pointColor : "#fff",
				pointStrokeColor : "#9DB86D",
				data : [60000,75000,55000,90000,80000,50000,100000]
			}
		]
		}
		// get line chart canvas
		var buyers = document.getElementById('weekly_lubnan').getContext('2d');
		// draw line chart
		new Chart(buyers).Line(buyerData);
		
		

//sales vs target position bar
/******Data for Lubnan******/
// bar chart data
            var barData = {
                labels : ["January","February","March","April","May","June"],
                datasets : [
                    {
                        fillColor : "#ABE3DC",
                        strokeColor : "#ABE3DC",
                        data : [60000,75000,30000,90000,80000,50000]
                    },
                  {
                        fillColor : "#CCE3AB",
                        strokeColor : "#CCE3AB",
                        data : [50000,65000,20000,80000,70000,30000]
                    },
                    {
                        fillColor : "#E8B4C3",
                        strokeColor : "#E8B4C3",
                        data : [70000,85000,40000,100000,90000,60000]
                    }
                ]
            }
            // get bar chart canvas
            var income = document.getElementById("income_lubnan").getContext("2d");
            // draw bar chart
            new Chart(income).Bar(barData);

</script>