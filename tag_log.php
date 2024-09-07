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
            <li><a href="#">Maintance</a></li>
            <li class="active">Maintance Category List</li>
        </ol>
    </section>
    <section class="content" style="margin-top: 20px;">
        <div class="box box-primary">
            <div class="row">
                <div class="col-md-6">
                    <div class="box-header with-border">
                        <h3 class="box-title">Please select your tag name</h3>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <form action="maintanance-search.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group input-group">
                                <div class="col-md-3">
                                    <select class="form-control select2" style="width: 100%;" name="br_id" id="br_id">
                                        <option selected="selected">Please select One</option>
                                        <?php
                                        $query1 = mysqli_query($conn, "SELECT * FROM branches_table");
                                        if ($query1->num_rows > 0) {
                                            while ($row = mysqli_fetch_array($query1)) {
                                                $br_id = $row['id'];
                                                $br_name = $row['br_name'];
                                        ?>
                                                <option value="<?php echo $br_id; ?>"><?php echo $br_name; ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control select2" style="width: 100%;" name="tag_name" id="tag_name">
                                        <option selected="selected">Please select One</option>
                                        <?php
                                        $query2 = mysqli_query($conn, "SELECT * FROM tag_list");
                                        while ($row = mysqli_fetch_array($query2)) {
                                            $tag_name = $row['tag_name'];
                                        ?>
                                            <option value="<?php echo $tag_name; ?>"><?php echo $tag_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-flat" name="search_data" type="submit">Search</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">Venture Solutions Ltd.</a>.</strong> All rights reserved.
</footer>
<script type="text/javascript">
    $(function() {
        $(".select2").select2();
    });
</script>
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<?php
        include('footer.php');
?>