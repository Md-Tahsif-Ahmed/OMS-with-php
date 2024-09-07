<?php
include("config.php");
if(isset($_POST['add_maintance'])) {
    ## Get form data
    $brand = $_POST['brand_id'];
    $branch = $_POST['branch_id'];
    $category = $_POST['category_id'];
    $asset_name = $_POST['asset_id'];
    $isuee_date = $_POST['isuee_date'];
    $request_date = $_POST['request_date'];
    $vendor = $_POST['vendor'];
    $services_charge = $_POST['services_charge'];
    $remarks = $_POST['remarks'];
    $date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `maintenance_table` (`brand_id`, `branch_id`, `category_id`, `asset_id`, `isuee_date`, `request_date`, `vendor`, `services_charge`, `remarks`, `status_request`) VALUES ('$brand', '$branch','$category', '$asset_name', '$isuee_date','$request_date','$vendor', '$services_charge', '$remarks', 1)";
   if (mysqli_query($conn, $sql)) {

        $log_data = "INSERT INTO `tag_log` (`tag_number`, `status_type`, `status_date`) VALUES ('$asset_name', 'Request','$date')";
        mysqli_query($conn, $log_data);
        echo "<script>
            alert('New record created successfully !');
            window.location.href='add_maintance.php';
        </script>";
        } else {
            // echo "Error: ". $sql . " ". mysqli_error($conn);
            echo "<script>
                alert('Error!');
                window.location.href='add_maintance.php';
            </script>";
        }
        mysqli_close($conn);
    } else {
        echo "<script>
            alert('Something wrong');
            window.location.href='add_maintance.php';
        </script>";
    }
    
?>