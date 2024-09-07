<?php
    include("config.php");
    if(isset($_POST['asset_transfer_store'])) {
        ## Get form data
        $tag_number = $_POST['tag_number'];
        $branch_from = $_POST['branch_from'];
        $branch_to = $_POST['branch_to'];
        $transfer_date = $_POST['transfer_date'];
    
    
        $sql = "INSERT INTO `asset_transfer` (`tag_number`, `branch_from`, `branch_to`, `transfer_date`) VALUES ('$tag_number', '$branch_from', '$branch_from', '$transfer_date')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                alert('New record created successfully !');
                window.location.href='transfer_asset.php';
            </script>";
        } else {
            echo "Error: ". $sql . " ". mysqli_error($conn);
            // echo "<script>
            //     alert('Error!');
            //     window.location.href='transfer_asset.php';
            // </script>";
        }
        mysqli_close($conn);
    } else {
        echo "<script>
            alert('Something wrong');
            window.location.href='transfer_asset.php';
        </script>";
    }
?>
