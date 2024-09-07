<?php
    include("config.php");
    if(isset($_POST['add_asset'])) {
        ## Get form data
        $tag_number = $_POST['tag_number'];
        $asset_description = $_POST['asset_description'];
        $asset_category = $_POST['asset_category'];
        $stock = $_POST['stock'];
        $model = $_POST['model'];
        $serial_no = $_POST['serial_no'];
        $barcode = $_POST['barcode'];
        $brand_name= $_POST['brand_name'];
        $branch_id = $_POST['branch_id'];
        $color= $_POST['color'];
        $condition = $_POST['condition'];
        $vendor = $_POST['vendor'];
        $purchased_date = $_POST['purchased_date'];
        $purchased_cost= $_POST['purchased_cost'];
        $payment_type_purchased= $_POST['payment_type_purchased'];
        $warranty = $_POST['warranty'];
        $branch_id = $_POST['branch_id'];

        $sql = "INSERT INTO `asset_table` (`tag_number`, `asset_description`, `asset_category`, `stock`, `model`, `serial_no`, `barcode`, `color`, `condition`, `vendor`, `purchased_date`, `purchased_cost`, `payment_type_purchased`, `warranty`, `branch_id`, `status_request`) VALUES ('$tag_number', '$asset_description', '$asset_category', '$stock', $model', '$serial_no', '$barcode', '$color', '$condition', '$vendor', '$purchased_date', '$purchased_cost', '$payment_type_purchased','$warranty', '$branch_id', '1')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                alert('New record created successfully !');
                window.location.href='add_asset.php';
            </script>";
        } else {
            // echo "Error: ". $sql . " ". mysqli_error($conn);
            echo "<script>
                alert('Error!');
                window.location.href='add_asset.php';
            </script>";
        }
        mysqli_close($conn);
    } else {
        echo "<script>
            alert('Something wrong');
            window.location.href='add_asset.php';
        </script>";
    }
?>
