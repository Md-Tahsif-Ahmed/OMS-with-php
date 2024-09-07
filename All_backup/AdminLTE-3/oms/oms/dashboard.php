<?php 
	include("header.php");
	include("sidebar.php");
?>
      

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <!--<small>Control panel</small>-->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">          
		  <!-- Main row -->
          <div class="row">
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-12 connectedSortable">

              <!-- Map box -->
              <div class="box box-solid">
                <div class="box-header">
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                  </div><!-- /. tools -->

                  <i class="fa fa-map-marker"></i>
                  <h3 class="box-title">
                    Outlet Locations
                  </h3>
                </div>
                <div class="box-body">
                  <div id="map" style="height: 250px; width: 100%;"></div>
                </div><!-- /.box-body-->
              </div>
              <!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Outlet List of <b>Lubnan</b></h3>
                  <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Outlet Name</th>
                      <th>Location</th>
                      <th>Renewal Status</th>
                    </tr>
                    <tr>
                      <td>New Market Branch</td>
                      <td>New Market</td>
                      <td><span class="label label-success">OK</span></td>
                    </tr>
                    <tr>
                      <td>Taltola Branch</td>
                      <td>Taltola,Khilgaon</td>
                      <td><span class="label label-warning">Need to Renew</span></td>
                    </tr>
					<tr>
                      <td>New Baily Road Branch</td>
                      <td>Baily Road</td>
                      <td><span class="label label-success">OK</span></td>
                    </tr>
					<tr>
                      <td>Dhanmondi Branch</td>
                      <td>Simanto Square, Dhanmondi</td>
                      <td><span class="label label-success">OK</span></td>
                    </tr>
					<tr>
                      <td>Basundhara City Branch</td>
                      <td>Panthapath</td>
                      <td><span class="label label-success">OK</span></td>
                    </tr>
					<tr>
                      <td>Uttara Branch</td>
                      <td>Uttara</td>
                      <td><span class="label label-success">OK</span></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">

              <!-- Map box -->
              <!-- TO DO List -->
              <!--pie-->
			  <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Daily Attandance Summury of <b>Lubnan</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <canvas id="attendance_summury_lubnan" width="600" height="400"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
		  
		  <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Outlet List of <b>Infinity</b></h3>
                  <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Outlet Name</th>
                      <th>Location</th>
                      <th>Renewal Status</th>
                    </tr>
                    <tr>
                      <td>New Market Branch</td>
                      <td>New Market</td>
                      <td><span class="label label-success">OK</span></td>
                    </tr>
                    <tr>
                      <td>Taltola Branch</td>
                      <td>Taltola,Khilgaon</td>
                      <td><span class="label label-warning">Need to Renew</span></td>
                    </tr>
					<tr>
                      <td>New Baily Road Branch</td>
                      <td>Baily Road</td>
                      <td><span class="label label-success">OK</span></td>
                    </tr>
					<tr>
                      <td>Dhanmondi Branch</td>
                      <td>Simanto Square, Dhanmondi</td>
                      <td><span class="label label-success">OK</span></td>
                    </tr>
					<tr>
                      <td>Basundhara City Branch</td>
                      <td>Panthapath</td>
                      <td><span class="label label-success">OK</span></td>
                    </tr>
					<tr>
                      <td>Uttara Branch</td>
                      <td>Uttara</td>
                      <td><span class="label label-success">OK</span></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">

              <!-- Map box -->
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Daily Attandance Summury of <b>Infinity</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <canvas id="attendance_summury_infinity" width="600" height="400"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
		  
		  <!--Top 5 outlets based on last month-->
		  
		  <div class="row">
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Top 5 Outlets of <b>Lubnan</b> (Based on Last Month)</h3>
                </div><!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
					  <th>Serial</th>
                      <th>Outlet Name</th>
                      <th>Amount (In BDT)</th>
                    </tr>
                    <tr>
                      <td>1</td>
					  <td>New Market Branch</td>
                      <td>120,000</td>
                    </tr>
					<tr>
                      <td>2</td>
					  <td>Basundhara City Branch</td>
                      <td>95,000</td>
                    </tr>
					<tr>
                      <td>3</td>
					  <td>Baily Road Branch</td>
                      <td>83,000</td>
                    </tr>
					<tr>
                      <td>4</td>
					  <td>Gulshan Branch</td>
                      <td>79,000</td>
                    </tr>
					<tr>
                      <td>5</td>
					  <td>Uttara Branch</td>
                      <td>70,000</td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
				<br>
                <div class="box-body table-responsive no-padding">
                  <canvas id="top_lubnan" width="600" height="400"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">

              <!-- Map box -->
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Top 5 Outlets of <b>Infinity</b> (Based on Last Month)</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
					  <th>Serial</th>
                      <th>Outlet Name</th>
                      <th>Amount (In BDT)</th>
                    </tr>
                    <tr>
                      <td>1</td>
					  <td>New Market Branch</td>
                      <td>120,000</td>
                    </tr>
					<tr>
                      <td>2</td>
					  <td>Basundhara City Branch</td>
                      <td>95,000</td>
                    </tr>
					<tr>
                      <td>3</td>
					  <td>Baily Road Branch</td>
                      <td>83,000</td>
                    </tr>
					<tr>
                      <td>4</td>
					  <td>Gulshan Branch</td>
                      <td>79,000</td>
                    </tr>
					<tr>
                      <td>5</td>
					  <td>Uttara Branch</td>
                      <td>70,000</td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
				<br>
                <div class="box-body table-responsive no-padding">
                  <canvas id="top_infinity" width="600" height="400"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
		  
		  <!--End Top 5 outlets based on last month-->
		  
		  <!--Last 7 days sales flow-->
		  
		  <div class="row">
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Last 7 Days Sales of <b>Lubnan</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <canvas id="weekly_lubnan" width="600" height="400"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">

              <!-- Map box -->
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Last 7 Days Sales of <b>Infinity</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <canvas id="weekly_infinity" width="600" height="400"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
		  
		  <!--Last 7 days sales flow-->
		  
		  <!--Last 6 Months Sales progress-->
		  <div class="row">
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Last 6 Months Sales Progress of <b>Lubnan</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <canvas id="income_lubnan" width="600" height="400"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">

              <!-- Map box -->
              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Last 6 Months Sales Progress of <b>Infinity</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <canvas id="income_infinity" width="600" height="400"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	  
    <?php include("footer.php");?>
	
	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-FpQCe0q2wSMUEkCg-QaKQqXn3UaeZXY&callback=initMap&v=weekly"
      defer
    ></script>
	
<script>
	console.log("check");
		
////Map Start
		$('#vector_map').vectorMap({map: 'bd-map'}); 


// The following example creates five accessible and
// focusable markers.
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: { lat: 23.7989972, lng: 90.3780921 },
  });
  // Set LatLng and title text for the markers. The first marker (Boynton Pass)
  // receives the initial focus when tab is pressed. Use arrow keys to
  // move between markers; press tab again to cycle through the map controls.
  const tourStops = [
    [{ lat: 23.7515137, lng: 90.4189184 }, "Richman-Lubnan, Taltola"],
    [{ lat: 23.8063487, lng: 90.3641457 }, "Mirpur Road"],
  ];
  // Create an info window to share between markers.
  const infoWindow = new google.maps.InfoWindow();

  // Create the markers.
  tourStops.forEach(([position, title], i) => {
    const marker = new google.maps.Marker({
      position,
      map,
      title: `${i + 1}. ${title}`,
      label: `${i + 1}`,
      optimized: false,
      icon: 'blue.png'
    });

    // Add a click listener for each marker, and set up the info window.
    marker.addListener("click", () => {
      infoWindow.close();
      infoWindow.setContent(marker.getTitle());
      infoWindow.open(marker.getMap(), marker);
    });
  });
}

window.initMap = initMap;

//Map End

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
			label: "Present"
		},
		{
			value: 15,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Absent"
		},
		{
			value: 5,
			color: "#FDB45C",
			highlight: "#FFC870",
			label: "On Leave"
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

/******Data for Infinity******/
//dognut chart data

var donutEl = document.getElementById("attendance_summury_infinity").getContext("2d");
var donut = new Chart(donutEl).Doughnut(
	// Datas
	[
		{
			value: 45,
			color: "#46BFBD",
			highlight: "#5AD3D1",
			label: "Present"
		},
		{
			value: 7,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Absent"
		},
		{
			value: 5,
			color: "#FDB45C",
			highlight: "#FFC870",
			label: "On Leave"
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


// End Attendance Percentage

// Top 5 Outlets based on month
/******Data for Lubnan******/

// pie chart data
	var pieData = [
		{
			value : 120000,
			color : "#4ACAB4",
			label: "New Market Branch"
		},
		{
			value : 95000,
			color : "#FF8153",
			label: "Basundhara City Branch"
		},
		{
			value : 83000,
			color : "#FFEA88",
			label: "Baily Road Branch"
		},
		{
			value : 79000,
			color : "#5AD3D1",
			label: "Gulshan Branch"
		},
		{
			value : 70000,
			color : "#ACC26D",
			label: "Utara Branch"
		}
	];
	// pie chart options
	var pieOptions = {
		 segmentShowStroke : false,
		 animateScale : true
	}
	// get pie chart canvas
	var countries= document.getElementById("top_lubnan").getContext("2d");
	// draw pie chart
	new Chart(countries).Pie(pieData, pieOptions);
	

/******Data for Infinity******/

// pie chart data
	var pieData = [
		{
			value : 120000,
			color : "#4ACAB4",
			label: "New Market Branch"
		},
		{
			value : 95000,
			color : "#FF8153",
			label: "Basundhara City Branch"
		},
		{
			value : 83000,
			color : "#FFEA88",
			label: "Baily Road Branch"
		},
		{
			value : 79000,
			color : "#5AD3D1",
			label: "Gulshan Branch"
		},
		{
			value : 70000,
			color : "#ACC26D",
			label: "Utara Branch"
		}
	];
	// pie chart options
	var pieOptions = {
		 segmentShowStroke : false,
		 animateScale : true
	}
	// get pie chart canvas
	var countries= document.getElementById("top_infinity").getContext("2d");
	// draw pie chart
	new Chart(countries).Pie(pieData, pieOptions);

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
		

/******Data for Infinity******/

// line chart data
		var buyerData = {
			labels : ["Sat","Sun","Mon","Tue","Wed","Thursday","Friday"],
			datasets : [
			{
				fillColor : "rgba(172,194,132,0.4)",
				strokeColor : "#ACC26D",
				pointColor : "#fff",
				pointStrokeColor : "#9DB86D",
				data : [50000,65000,70000,100000,35000,30000,95000]
			}
		]
		}
		// get line chart canvas
		var buyers = document.getElementById('weekly_infinity').getContext('2d');
		// draw line chart
		new Chart(buyers).Line(buyerData);

//End last 7 days sales progress

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
			
/******Data for Infinity******/
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
            var income = document.getElementById("income_infinity").getContext("2d");
            // draw bar chart
            new Chart(income).Bar(barData);
			
// End Sales vs target position bar
	</script>