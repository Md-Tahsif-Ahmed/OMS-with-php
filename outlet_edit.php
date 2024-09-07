<?php
session_start();
include("config.php");
include("header.php");
include("sidebar.php");


if (isset($_GET['id'])) {
  $id = $_GET['id'];
?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>Outlet</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Outlet Info</a></li>
        <li class="active">Edit Outlet</li>
      </ol>
    </section>

    <section class="content" style="margin-top: 18px;">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Outlet</h3>
        </div>
        <div class="box-body">
          <?php
          $result = mysqli_query($conn, "SELECT * FROM outlet_table WHERE id = '$id'");
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
            $agree_start_date = $row['created_at'];
            $date_data = date('Y-m-d', strtotime($agree_start_date));
          ?>

            <form role="form" action="outlet_update.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="outlet_name">Outlet Name</label>
                  <input type="text" class="form-control" id="outlet_name" name="outlet_name" value="<?php echo $outlet_name; ?>">
                </div>

                <div class="form-group col-md-6" id="brand_div">
                  <label for="brand_name">Brand Name</label>
                  <select class="form-control select2" style="width: 100%;" name="brand_id" id="brand_id" value="<?php echo $brand_id; ?>">
                    <option selected="selected">Please select One</option>
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM brand_table");
                    while ($row = mysqli_fetch_array($query)) {
                      $id = $row['id'];
                      $name = $row['name'];
                    ?>
                      <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="outlet_location">Outlet Location</label>
                  <input type="text" class="form-control" id="outlet_location" name="outlet_location" value="<?php echo $outlet_location; ?>">
                </div>

                <div class="form-group col-md-4">
                  <label for="outlet_size">Outlet Size</label>
                  <input type="text" class="form-control" id="outlet_size" name="outlet_size" value="<?php echo $outlet_size; ?>">
                </div>

                <div class="form-group col-md-4">
                  <label for="outlet_rent">Rent per month</label>
                  <input type="text" class="form-control" id="outlet_rent" name="outlet_rent" value="<?php echo $monthly_rent; ?>">
                </div>

                <div class="form-group col-md-6" id="off_day">
                  <label for="off_day">Weekly Closed Day</label>
                  <select class="form-control select2" style="width: 100%;" name="off_day" id="off_day">
                    <option value="">Please Select</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="outlet_img">Front side Photo of Store</label>
                  <input type="file" id="outlet_img" name="outlet_img" class="form-control" />
                </div>

                <div class="form-group col-md-6">
                  <label for="manager_name">Name of Manager</label>
                  <input type="text" class="form-control" id="manager_name" name="manager_name" value="<?php echo $outlet_manager; ?>">
                </div>

                <div class="form-group col-md-6">
                  <label for="manager_contact">Contact No. of Manager</label>
                  <input type="text" class="form-control" id="manager_contact" name="manager_contact" value="<?php echo $manager_phone; ?>">
                </div>

                <div class="form-group col-md-12">
                  <h4><label class="label label-success">Agreement Details</label></h4>
                </div>

                <div class="form-group col-md-4">
                  <label for="agree_start_date">Agreement Start Date</label>
                  <input type="date" class="form-control" id="agree_start_date" name="agree_start_date" value="<?php echo $date_data; ?>">
                </div>

                <div class="form-group col-md-4">
                  <label for="agree_end_date">Agreement End Date</label>
                  <input type="date" class="form-control" id="agree_end_date" name="agree_end_date" value="<?php echo $renewal_date; ?>">
                </div>

                <div class="form-group col-md-4">
                  <label for="type_owner">Type of ownership</label>
                  <select class="form-control select2" style="width: 100%;" name="type_owner" value="<?php echo $type_owner; ?>">
                    <option selected="selected">Rental</option>
                    <option>Owner</option>
                  </select>
                </div>

                <div class="form-group col-md-12">
                  <label for="owner_des">Short Description of Owner</label>
                  <textarea name="owner_des" id="owner_des" class="form-control" rows="6"></textarea>
                </div>
              </div>

              <input type="hidden" name="id" value="<?php echo $id ?>">

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

            </form>
        </div>
      </div>
    </section>


  </div>

<?php include("footer.php");
          }
        } ?>

<script type="text/javascript">
  $(function() {
    //Initialize Select2 Elements
    $(".select2").select2();
  });

  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function() {
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>