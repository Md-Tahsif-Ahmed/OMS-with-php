<?php
    session_start();
    include("header.php");
    include("sidebar.php");
    include("sessionControl.php");
    include("config.php");

    ## Query for id wise maintance
    if(isset($_GET['id'])) {
        echo $id = $_GET['id'];
        $query = "SELECT * FROM maintenance_table WHERE id = '$id' ";
        $select_query = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc( $select_query)){
            $id = $row['id'];
            $brand_id = $row['brand_id'];
            $branch_id = $row['branch_id'];
            $category_id = $row['category_id'];
            $asset_id = $row['asset_id'];
            $isuee_date = $row['isuee_date'];
            $request_date = $row['request_date'];
            $vendor = $row['vendor'];
            $services_charge = $row['services_charge'];
            $remarks = $row['remarks'];
            $status_request = $row['status_request'];
            // $time = date('Y-m-d', strtotime($date));
?>

<div class="content-wrapper">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Maintance</a></li>
            <li class="active">Maintance Category List</li>
        </ol>
    </section>
    <section class="content" style="margin-top: 20px;">
        <div class="box box-primary">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Maintance </h3>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <form action="maintance_update_store.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="brand_id" for="brand">Brand Name</label>
                            <select class="form-control select2" style="width: 100%;" name="brand_id" id="brand_id">
                                <option selected="selected">Please select One</option>
                                <?php
                                    $query = mysqli_query($conn, "SELECT * FROM brand_table");
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                ?>
                                <option value="<?php echo $id; ?>"<?php if($brand_id == $id) {echo 'selected';} else {echo '';} ?> ><?php echo $name; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="branch_id">Branch Name</label>
                            <select class="form-control select2" style="width: 100%;" name="branch_id" id="branch_id">
                                <option selected="selected">Please select One</option>
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM branches_table");
                                while ($row = mysqli_fetch_array($query)) {
                                    $id = $row['id'];
                                    $name = $row['br_name'];
                                ?>
                                    <option value="<?php echo $id; ?>" <?php if ($branch_id == $id) {echo 'selected';} else {echo '';} ?>><?php echo $name; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="category">Category</label>
                            <select class="form-control select2" style="width: 100%;" name="category_id" id="category_id">
                                <option selected="selected">Please select One</option>
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM category");
                                while ($row = mysqli_fetch_array($query)) {
                                    $id = $row['id'];
                                    $name = $row['name'];
                                ?>
                                    <option value="<?php echo $id; ?>" <?php if ($category_id == $id) {echo 'selected';} else {echo '';} ?>><?php echo $name; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="asset_id">Asset Tag Name</label>
                            <select class="form-control select2" style="width: 100%;" name="asset_id" id="asset_id" readonly>
                                <option selected="selected">Please select One</option>
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM asset_table");
                                while ($row = mysqli_fetch_array($query)) {
                                    $id = $row['id'];
                                    $name = $row['tag_number'];
                                ?>
                                    <option value="<?php echo $id; ?>" <?php if ($asset_id == $id) {echo 'selected';} else {echo '';} ?>><?php echo $name; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="isuee_date">Problem issue Date</label>
                            <input type="date" class="form-control" id="isuee_date" name="isuee_date" placeholder="" value="<?php echo $isuee_date ?>" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="request_date">Requset Date</label>
                            <input type="date" class="form-control" value="<?php echo $request_date; ?>" id="request_date" name="request_date" readonly>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="vendor">Vendor</label>
                            <input type="text" class="form-control" value="<?php echo $vendor;?>" id="vendor" name="vendor" placeholder="">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="services_charge">Services Charge</label>
                            <input type="text" class="form-control" value="<?php echo $services_charge; ?>" id="services_charge" name="services_charge" placeholder="">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="status">Maintance Status</label>
                            <select class="form-control select2" style="width: 100%;" name="status" id="status">
                                <option selected="selected">Please select One</option>
                                <option value="1" <?php if ($status_request == 1) {echo 'selected';} else {echo '';} ?>>Request</option>
                                <option value="2" <?php if ($status_request == 2) {echo 'selected';} else {echo '';} ?>>Process</option>
                                <option value="3" <?php if ($status_request == 3) {echo 'selected';} else {echo '';} ?>>Complete</option>
                                <option value="4" <?php if ($status_request == 4) {echo 'selected';} else {echo '';} ?>>Disposal</option>
                            </select>
                        </div>


                        <div class="form-group col-md-12">
                            <label for="remarks">Remarks</label>
                            <textarea class="form-control" id="remarks" name="remarks" rows="3"><?php echo $remarks ?></textarea>
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