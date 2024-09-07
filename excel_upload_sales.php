<?php
    session_start();
    include("header.php");
    include("sidebar.php");
    include("sessionControl.php");
    include("config.php");
?>

<div class="content-wrapper">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Excel Upload</a></li>
            <li class="active">Excel Upload From</li>
        </ol>
    </section>
    <section class="content" style="margin-top: 20px;">
        <div class="box box-primary">
            <div class="row">
                <div class="col-md-6">
                    <div class="box-header with-border">
                        <h3 class="box-title">Excel Upload For Sales</h3>
                    </div>
                </div>
            </div>
 <div class="box-body">
                <form action="import_file.php" method="post">
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="file">Upload File</label>
                                <input type="file" class="form-control" id="file" name="file" placeholder="">
                            </div>

                            <div class="box-footer">
                                <button type="submit" name="submit_file" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">
    $(function() {
        $(".select2").select2();
    });
</script>

<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

<?php include("footer.php"); ?>