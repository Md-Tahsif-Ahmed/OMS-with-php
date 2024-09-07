<?php 
    include("config.php");
    if(isset($_POST['update'])) {
        ## Get form data
        $id = $_POST['id'];
        $status = $_POST['status'];
        

        $sql = "UPDATE `asset_table` SET `status_request` = '$status' WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            $status = '';
            if( $_POST['status'] == 1) {
                $status = 'Pending';
            } elseif( $_POST['status'] == 2) {
                $status = 'Approved';
            }
            $log_data = "INSERT INTO `tag_log` (`status_type`) VALUES ('$status')";
            mysqli_query($conn, $log_data);
            echo "<script>
                alert('Record has been updated successfully !');
                window.location.href='maintance_list.php';
            </script>";
            } else {
                // echo "Error: ". $sql . " ". mysqli_error($conn);
                echo "<script>
                    alert('Error!');
                    window.location.href='asset_list.php';
                </script>";
            }
            mysqli_close($conn);

    } else {
        echo "<script>alert('Something wrong');window.location.href='maintance_list.php';</script>";
    }
?>