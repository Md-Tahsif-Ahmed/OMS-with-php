<?php
 include("header.php");
 include("sidebar.php");
 include("config.php");


// Get form data
$tag_number = $_POST['tag_number'];
$asset_description = $_POST['asset_description'];
$asset_category = $_POST['asset_category'];
$model = $_POST['model'];
$serial_no = $_POST['serial_no'];
$barcode = $_POST['barcode'];
$brand_name= $_POST['brand_name'];
$branch_name = $_POST['branch_name'];
$color= $_POST['color'];
$condition = $_POST['condition'];
$vendor = $_POST['vendor'];
$purchased_date = $_POST['purchased_date'];
$purchased_cost= $_POST['purchased_cost'];
$payment_type_purchased= $_POST['payment_type_purchased'];

$warranty = $_POST['warrenty'];

// Insert data into asset_table
$sql = "INSERT INTO asset_table (tag_number, asset_description, asset_category, model, serial_no, barcode, branch_name, condition, branch_id, branch_name) VALUES ('$tag_number', '$category', '$model', '$condition', '$branch_id', '$branch_name')";
$conn->query($sql);

// Get asset_id from asset_table
$asset_id = $conn->insert_id;

// Insert data into asset_transfer table
$sql = "INSERT INTO asset_transfer (asset_id, branch_from, branch_to, transfer_date) VALUES ('$asset_id', '$branch_from', '$branch_to', '$transfer_date')";
$conn->query($sql);

$conn->close();
?>
