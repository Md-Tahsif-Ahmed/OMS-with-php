<?php 
	include("header.php");
	include("sidebar.php");
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Outlet Management</a></li>
            <li class="active">Outlet List</li>
          </ol>
        </section>
		<br>
        <!-- Main content -->
        <section class="content">
		  <!--For Map-->
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
                    List of Outlets
                  </h3>
                </div>
                <div class="box-body">
                  <div class="col-lg-6 col-xs-6">
					  <div class="small-box bg-aqua">
						<div class="inner">
						  <h3>6</h3>
						  <p>No. of Outlets for Lubnan</p>
						</div>
						<div class="icon">
						  <i class="ion ion-bag"></i>
						</div>
					  </div>
				  </div>
				  <div class="col-lg-6 col-xs-6">
					  <div class="small-box bg-green">
						<div class="inner">
						  <h3>8</h3>
						  <p>No. of Outlets for Infinity</p>
						</div>
						<div class="icon">
						  <i class="ion ion-bag"></i>
						</div>
					  </div>
				  </div>
                  <div id="map" style="height: 250px; width: 100%;"></div>
                </div><!-- /.box-body-->
              </div>
              <!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
		  
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><a href="add_outlet.php" class="btn btn-info btn-sm">Add New Outlet <i class="fa fa-plus-square-o"></i></a></h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Outlet image</th>
					  <th>Brand Name</th>
                      <th>Outlet Name & Address</th>
                      <th>Manager's Name & Contact No.</th>
                      <th>Outlet Size & Renewal Date</th>
                      <th>Agreement Period</th>
                      <th>Monthly Rent</th>
                      <th>Details</th>
                    </tr>
                    <tr>
                      <td><img src="image\outlet_image\lubnan\1.jpg" alt="Responsive image" width="80" height="80"></td>
                      <td>Lubnan</td>
					  <td>New Market Branch</td>
                      <td>Md. Abdul Karim<br>+8801975883089</td>
                      <td>1400 Sq.Ft.<br>2024-12-31</td>
                      <td>4 year(s)</td>
                      <td>40,000</td>
                      <td><button class='btn btn-default btn-sm' data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye" aria-hidden="false"></i></button></td>
                    </tr>
                    <tr>
                      <td><img src="image\outlet_image\infinity\1.jpg" alt="Responsive image" width="80" height="80"></td>
                      <td>Infinity</td>
                      <td>Baily Road Branch</td>
                      <td>Md. Abdul Karim<br>+8801975883089</td>
                      <td>2500 Sq.Ft.<br>2025-12-31</td>
                      <td>5 year(s)</td>
                      <td>60,000</td>
                      <td><button class='btn btn-default btn-sm' data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye" aria-hidden="false"></i></button></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php include("table_related_footer.php");?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Outlet Details Information</h3>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button><br>
      </div>
      <div class="modal-body">
		  <div class="col-xs-12">
			<img src="image\outlet_image\lubnan\1.jpg" alt="Responsive image" width="100%" height="80%">
		  </div>
			<div class="col-xs-12">
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
                  </table>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-FpQCe0q2wSMUEkCg-QaKQqXn3UaeZXY&callback=initMap&v=weekly" defer></script>

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

</script>