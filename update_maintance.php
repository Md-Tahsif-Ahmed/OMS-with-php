<?php

include "config.php";

if (isset($_POST['update'])) {

    $user_id = $_POST['user_id'];
    
    $isuee_date = $_POST['isuee_date'];

    $request_date = $_POST['request_date'];

    $vendor = $_POST['vendor'];

    $services_charge = $_POST['services_charge'];

    $remarks = $_POST['remarks'];

    $sql = "UPDATE `maintenance_table` SET `isuee_date`='$isuee_date',`request_date`='$request_date',`vendor`='$vendor',`services_charge`='$services_charge',`remarks`='$remarks' WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        // echo "Record updated successfully.";
?>
        <script>
            alert('Record updated successfully !!');
            window.location.replace("maintance_list.php");
        </script>
    <?php

    } else {

        // echo "Error:" . $sql . "<br>" . $conn->error;
    ?>
        <script>
            alert('Database Error!');
            window.location.replace("maintance_list.php");
        </script>
    <?php
    }
}

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `maintenance_table` WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $isuee_date = $_POST['isuee_date'];

            $request_date = $_POST['request_date'];
        
            $vendor = $_POST['vendor'];
        
            $services_charge = $_POST['services_charge'];
        
            $remarks = $_POST['remarks'];

            $id = $row['id'];
        }

    ?>


<?php

    } else {

        header('Location: maintance_list.php');
    }
}

?>