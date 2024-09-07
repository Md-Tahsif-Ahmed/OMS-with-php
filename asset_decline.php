<html>
    <head>
     <meta charset="UTF-8" />
     <meta http-equiv="refresh" content="0; URL=http://192.168.0.100/outlet/oms/dashboard.php#asset-table" />
   </head>
</html>
<?php
    session_start();
    //include("header.php");
    //include("sidebar.php");
    include("sessionControl.php");
    include("config.php");
    $id = $_POST['asset_id'];

    
    $query = "UPDATE asset_table
              SET status_request = '3'
              WHERE id = $id;";
    $result = mysqli_query($conn, $query);
    ?>