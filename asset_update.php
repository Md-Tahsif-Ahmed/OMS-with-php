<?php
    session_start();
    include("header.php");
    include("sidebar.php");
    include("sessionControl.php");
    include("config.php");

    ## Query for id wise maintance
    if(isset($_GET['id'])) {
        echo $id = $_GET['id'];
        $query = "SELECT * FROM asset_table WHERE id = '$id' ";
        $select_query = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc( $select_query)){
            $status_request = $row['status_request'];
            
?>

<div class="content-wrapper">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Asset</a></li>
            <li class="active">a=Asset update List</li>
        </ol>
    </section>
    <section class="content" style="margin-top: 20px;">
        <div class="box box-primary">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Asset </h3>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <form action="asset_update_store.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="row">
                          

                        <div class="form-group col-md-4">
                            <label for="status">Asset Status</label>
                            <select class="form-control select2" style="width: 100%;" name="status" id="status">
                                <option selected="selected">Please select One</option>
                                <option value="1" <?php if ($status_request == 1) {echo 'selected';} else {echo '';} ?>>pending</option>
                                <option value="2" <?php if ($status_request == 2) {echo 'selected';} else {echo '';} ?>>approved</option>
                                 
                            </select>
                        </div>


                         

                        <div class="box-footer">
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </div>
                        </div>
                    </div>

                </form>
            </div>
    </section>
</div>

<?php } } include("footer.php"); ?>

<script type="text/javascript">
    $(function() {
        $(".select2").select2();
    });
</script>

<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>