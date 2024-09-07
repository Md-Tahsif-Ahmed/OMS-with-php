<?php 
  session_start();
  include("header.php");
  include("sidebar.php");
  include("config.php");

  if(isset($_GET['id'])){
    $id = $_GET['id'];
?>

 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <!-- <h1>
            General Form Elements
            <small>Preview</small>
          </h1> -->
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Human Resource</a></li>
            <li class="active">HR Listing</li>
            <li class="active">Edit HR</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit HR</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php
              $result = mysqli_query($conn, "SELECT * FROM hr_table WHERE id = '$id'");
              while ($row = $result->fetch_assoc()) { 
                $id = $row['id'];
                $hr_name = $row['hr_name']; 
                $hr_outlet = $row['hr_outlet'];
                $hr_info = $row['hr_info'];
                $hr_phone = $row['hr_phone'];
                $hr_mail = $row['hr_mail'];
                $hr_joining_date = $row['hr_joining_date'];
                $gender = $row['gender']; 
            ?>

                <form role="form" action="hr_update.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="hr_name">HR Name</label>
                      <input type="text" value="<?php echo $hr_name; ?>" class="form-control" id="hr_name" name="hr_name" placeholder="Enter HR Name">
                    </div>
                    <div class="form-group">
                      <label for="hr_name">HR Phone</label>
                      <input type="text" value="<?php echo $hr_phone; ?>" class="form-control" id="hr_phone" name="hr_phone" placeholder="Enter HR Name">
                    </div>
                    <div class="form-group">
                      <label for="hr_name">HR Email</label>
                      <input type="text" value="<?php echo $hr_mail; ?>" class="form-control" id="hr_mail" name="hr_mail" placeholder="Enter HR Name">
                    </div>
                    <div class="form-group">
                      <label for="hr_outlet">HR Outlet</label>
                      <input type="text" value="<?php echo $hr_outlet; ?>" class="form-control" id="hr_outlet" name="hr_outlet" placeholder="Outlet Name">
                    </div>
                    <div class="form-group">
                      <label for="hr_information">HR Information</label>
                      <input type="text" value="<?php echo $hr_info; ?>" class="form-control" id="hr_information" name="hr_information" placeholder="Description">
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <input type="text" value="<?php echo $gender; ?>" class="form-control" id="gender" name="gender" placeholder="">
                    </div>
					
                    <input type="hidden" value="<?php echo $id ?>" name="id" >
                  <div class="box-footer">
                  <button type="submit" name="update" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php //mysqli_query($conn,"update `hr_table` set hr_name='$hr_name', hr_phone='$hr_phone',hr_mail='$hr_mail', gender='$gender',hr_info='$hr_info', hr_outlet='$hr_outlet' where id='$id'"); ?>
<?php include("footer.php"); } }?>

<script type="text/javascript">
	$(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
      });
</script>