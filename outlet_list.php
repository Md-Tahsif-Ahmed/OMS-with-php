<?php 
  session_start();
  include("header.php");
  include("sidebar.php");
  include("config.php");
  
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Outlet List
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Outlet Management</a></li>
      <li class="active">Outlet List</li>
    </ol>
  </section>

  <section class="content">
    <!--For Map-->
    <div class="row">
      <section class="col-lg-12 connectedSortable">
        <div class="box box-solid">
          <div class="box-header">
            <i class="fa fa-map-marker">Outlet data</i>
          </div>

          <div class="box-body">
            <?php 
              $result = mysqli_query($conn, "SELECT COUNT(brand_name) as total_outlet, brand_name FROM outlet_table GROUP BY brand_name");
              $rows = mysqli_num_rows( $result);
              while ($row = $result->fetch_assoc()) { 
            ?>
            
            <div class="col-lg-4 col-xs-4">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $row['total_outlet']; ?></h3>
                  <p>No. of Outlets for <?php echo $row['brand_name']; ?></p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <?php } ?>
        </div>
      </section>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">
              <a href="add_outlet.php" class="btn btn-info btn-sm">
                Add New Outlet 
                <i class="fa fa-plus-square-o"></i>
              </a>
            </h3>
            <div class="box-tools">
              <div class="input-group" style="width: 150px;">
                <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>SL.</th>
                <th>Outlet image</th>
                <th>Brand Name</th>
                <th>Outlet Name & Address</th>
                <th>Manager's Name & Contact No.</th>
                <th>Outlet Size & Renewal Date</th>
                <th>Agreement Period</th>
                <th>Monthly Rent</th>
                <th>Details</th>
              </tr>

              <?php 
                $result = mysqli_query($conn, "SELECT * FROM outlet_table");
                while ($row = $result->fetch_assoc()) { 
                  $id = $row['id'];
                  $outlet_img = $row['outlet_img'];
                  $brand_name = $row['brand_name'];
                  $outlet_location = $row['outlet_location'];
                  $outlet_manager = $row['outlet_manager'];
                  $manager_phone = $row['manager_phone'];
                  $outlet_size = $row['outlet_size']; 
                  $renewal_date = $row['renewal_date']; 
                  $agreement_period = $row['agreement_period'];
                  $monthly_rent = $row['monthly_rent'];
              ?>

              <tr>
                <td><?php echo $id?></td>
                <td>
                  <img src="image/outlet_image/<?php echo $outlet_img; ?>" alt="Responsive image" width="80" height="80">
                </td>
                <td><?php echo $brand_name; ?></td>
                <td><?php echo $outlet_location; ?></td>
                <td><?php echo $outlet_manager.' - '.$manager_phone; ?></td>
                <td><?php echo $outlet_size.' - '.$renewal_date; ?></td>
                <td><?php echo $agreement_period;?> year(s)</td>
                <td><?php echo $monthly_rent;?> BDT</td>
                <td>
                  <button class='btn btn-default btn-sm' data-toggle="modal" data-target="#Modal<?php echo $id; ?>">
                    <i class="fa fa-eye" aria-hidden="false"></i>
                  </button>
                </td>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
 <?php include("table_related_footer.php");?>


 <?php 
  $result = mysqli_query($conn, "SELECT * FROM outlet_table");
  while ($row = $result->fetch_assoc()) { 
    $id = $row['id'];
    $outlet_img = $row['outlet_img']; 
    $brand_name = $row['brand_name'];
    $outlet_name = $row['outlet_name'];
    $outlet_location = $row['outlet_location'];
    $outlet_manager = $row['outlet_manager'];
    $manager_phone = $row['manager_phone'];
    $outlet_size = $row['outlet_size']; 
    $renewal_date = $row['renewal_date']; 
    $agreement_period = $row['agreement_period'];
    $monthly_rent = $row['monthly_rent'];
    $starting_date = date("Y-m-d",strtotime($row['created_at']));
?>
<!-- Modal -->
<div class="modal fade" id="Modal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Outlet Details Information</h3>
      </div>
      <div class="modal-body">
        <div class="col-xs-12">
          <img src="image/outlet_image/<?php echo $outlet_img; ?>" alt="Responsive image" width="100%" height="80%">
        </div>

        <div class="col-xs-12">
          <table class="table table-striped table-bordered">					
            <tr>
              <th>Brand Name</th>
              <td><?php echo $brand_name; ?></td>
            </tr>
            <tr>
            <th>Outlet Name</th>
            <td><?php echo $outlet_name; ?></td>
            </tr>
            <tr>
            <th>Location</th>
            <td><?php echo $outlet_location; ?></td>
            </tr>
            <tr>
            <th colspan="2"><center class="label label-success">Agreement Information</center></th>
            </tr>
            <tr>
            <th>Starting Date</th>
            <td><?php echo $starting_date ?></td>
            </tr>
            <tr>
            <th>Expiry Date</th>
            <td><?php echo $renewal_date; ?></td>
            </tr>
            <tr>
            <th>Monthly Fare</th>
            <td><?php echo $monthly_rent;?> BDT</td>
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
<?php } ?>


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
