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
            $id = $row['id'];
            $tag_number = $row['tag_number'];
            $asset_category = $row['asset_category'];
            $asset_img = $row['asset_img'];
            $model = $row['model'];
            $vendor = $row['vendor'];
            $condition = $row['condition'];
             
            // $time = date('Y-m-d', strtotime($date));
?>

<div class="content-wrapper">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Asset</a></li>
            <li class="active">Asset List</li>
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
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
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
                            <label for="image">Image</label>
                             <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            </div>

                        <div class="form-group col-md-6">
                            <label for="model">Model</label>
                            <input type="text" class="form-control" id="model" name="model" placeholder="" value="<?php echo $model ?>" readonly>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="vendor">Vendor</label>
                              <select class="form-control select2" style="width: 100%;" name="vendor" id="vendor">
                                <option selected="selected">Please select One</option>
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM asset_table");
                                while ($row = mysqli_fetch_array($query)) {
                                    $id = $row['id'];
                                    $name = $row['vendor'];
                                ?>
                                    <option value="<?php echo $id; ?>" <?php if ($category_id == $id) {echo 'selected';} else {echo '';} ?>><?php echo $name; ?></option>
                                <?php } ?>
                              </select>
                        </div>

                         

                        

                        

                        <div class="box-footer">
                            <button type="submit" name="" class="btn btn-primary">Update</button>
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