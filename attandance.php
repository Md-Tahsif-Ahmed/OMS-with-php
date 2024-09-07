<?php
    session_start();
    include("header.php");
    include("sidebar.php");
    include("sessionControl.php");
    include("config.php");
    // date_default_timezone_set("Dhaka/Asia");
    // $time = date('h:i');
?>

<div class="content-wrapper">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Attandance</a></li>
        </ol>
    </section>
    <section class="content" style="margin-top: 20px;">
        <div class="box box-primary">
            <div class="row">
                <div class="col-md-6">
                    <div class="box-header with-border">
                        <h3 class="box-title">Give Attandance</h3>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <form action="process_attendance.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                                if($time < 12.00) {
                            ?>
                            <div class="form-group">
                                <label for="reason">Late Reason</label>
                                <input type="text" class="form-control" id="reason" name="reason" placeholder="Late Reason">
                            </div>
                            <?php } ?>
                            
                            <div class="box-footer">
                                <button type="submit" name="add_attendance" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php include("footer.php"); ?>
