<?php
session_start();
include("config.php");
include("header.php");
include("sidebar.php");
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Outlet</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">HR List</a></li>
      <li class="active">Add New HR</li>
    </ol>
  </section>

  <section class="content" style="margin-top: 18px;">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Add New HR</h3>
      </div>
      <div class="box-body">
        <form role="form" action="insert_hr.php" method="post" enctype="multipart/form-data">
          <div class="row ">
            <div class="form-group col-md-6">
              <label for="hr_name">HR Name</label>
              <input type="text" class="form-control" id="hr_name" name="hr_name" placeholder="Enter the hr name">
            </div>
            <div class="form-group col-md-6">
              <label for="hr_outlet">HR Outlet</label>
              <input type="text" class="form-control" id="hr_outlet" name="hr_outlet" placeholder="Enter the hr outlet">
            </div>
            <div class="form-group col-md-6">
              <label for="hr_phone">HR Phone</label>
              <input type="text" class="form-control" id="hr_phone" name="hr_phone" placeholder="0123456789">
            </div>
            <div class="form-group col-md-6">
              <label for="hr_mail">HR Email</label>
              <input type="text" class="form-control" id="hr_mail" name="hr_mail" placeholder="mahinkhan@gmail.com">
            </div>
            <div class="form-group col-md-6">
              <label for="hr_img">HR Image</label>
              <input type="file" name="hr_img" id="hr_img">
              <!-- <input type="file" id="hr_img" name="hr_img" class="form-control" /> -->
            </div>
            <div class="form-group col-md-6">
              <label for="hr_info">HR Information</label>
              <textarea type="text" class="form-control" id="hr_info" name="hr_info"></textarea>
            </div>
            <div class="form-group col-md-6" id="gender">
              <label for="gender">Gender</label>
              <select class="form-control select2" style="width: 100%;" name="gender" id="gender">
                <option value="">Please Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="box-footer">
              <button type="submit" name="add_hr" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>


</div><!-- /.content-wrapper -->

<?php include("footer.php"); ?>

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