<?php 
    include("config.php");
    if(isset($_POST['update'])) {
        ## Get form data
        $id = $_POST['id'];
        $brand = $_POST['brand_id'];
        $branch = $_POST['branch_id'];
        $category = $_POST['category_id'];
        $vendor = $_POST['vendor'];
        $services_charge = $_POST['services_charge'];
        $remarks = $_POST['remarks'];
        $status = $_POST['status'];
        $date = date("Y-m-d H:i:s");
        $asset_name = $_POST['asset_id'];

        $sql = "UPDATE `maintenance_table` SET `brand_id` = '$brand', `branch_id` = '$branch', `category_id` = $category, `vendor` = '$vendor', `services_charge` = '$services_charge', `remarks` = '$remarks', `status_request` = '$status' WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            $status = '';
            if( $_POST['status'] == 1) {
                $status = 'Request';
            } elseif( $_POST['status'] == 2) {
                $status = 'Process';
            } elseif( $_POST['status'] == 3) {
                $status = 'Complete';
            } elseif( $_POST['status'] == 4) {
                $status = 'Disposal';
            }
            $log_data = "INSERT INTO `tag_log` (`tag_number`, `status_type`, `status_date`) VALUES ('$asset_name', '$status','$date')";
            mysqli_query($conn, $log_data);
            echo "<script>
                alert('Record has been updated successfully !');
                window.location.href='maintance_list.php';
            </script>";
            } else {
                // echo "Error: ". $sql . " ". mysqli_error($conn);
                echo "<script>
                    alert('Error!');
                    window.location.href='maintance_list.php';
                </script>";
            }
            mysqli_close($conn);

    } else {
        echo "<script>alert('Something wrong');window.location.href='maintance_list.php';</script>";
    }
?>