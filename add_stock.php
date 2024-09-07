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
            <li><a href="#">Stock</a></li>
            <li class="active">Stock List</li>
        </ol>
    </section>
    <section class="content" style="margin-top: 20px;">
        <div class="box box-primary">
            <div class="row">
                <div class="col-md-6">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Stock</h3>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <form action="process_stock.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="brand_id">Brand Name</label>
                                <select class="form-control select2" style="width: 100%;" name="brand_id" id="brand_id">
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
                             
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control select2" style="width: 100%;" name="category_id" id="category_id">
                                    <option selected="selected">Please select One</option>
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM category");
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                    ?>
                                        <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_id">Product Name</label>
                                <select class="form-control select2" style="width: 100%;" name="product_id" id="prodcut_id">
                                    <option selected="selected">Please select One</option>
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM prodcut_table");
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['id'];
                                        $name = $row['product_name'];
                                    ?>
                                        <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity:</label>
                                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="unit">Unit:</label>
                                <input type="text" class="form-control" id="unit" name="unit" placeholder="">
                                <!-- <select name="vendor" class="form-control" id="vendor" readonly>
                                    <option value="">Select vendor</option>
                                </select> -->
                            </div>
                            <div class="form-group">
                                <label for="stock_type">Type:</label>
                                <input type="radio" name="type" value="Stock In"> Stock In
                                <input type="radio" name="type" value="Stock Out"> Stock Out
                            </div>
                             
                            <div class="box-footer">
                                <button type="submit" name="add_stock" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php include("footer.php"); ?>

<script type="text/javascript">
    $(function() {
        $(".select2").select2();
    });
</script>

<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>




<!-- <script>
    $(document).ready(function() {
        $("#asset_name").change(function() {
            var asset_id = this.value;
            $.ajax({
                url: "show-vendor-name.php",
                type: "POST",
                data: {
                    asset_id: asset_id
                },
                cache: false,
                success: function(result) {
                    $("#vendor").html(result);
                }
            });
        });
    });
</script> -->