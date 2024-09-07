<?php
    include("config.php");
    $id = $_POST['asset_id'];
    $query = "SELECT * FROM asset_table WHERE id = '$id'";
    $result= mysqli_query($conn,$query); 
    while ($row= mysqli_fetch_array($result)) {
        $br_id = $row['branch_id'];

        $query_b = mysqli_query($conn, "SELECT * FROM branches_table WHERE id = '$br_id'");
        while ($row_b = mysqli_fetch_array($query_b)) {
            $id = $row_b['id'];
            $name = $row_b['br_name'];
        
    ?>
        <option value='<?php echo $row['branch_id'] ?>'><?php echo $name; ?></option>;
    <?php } } ?>