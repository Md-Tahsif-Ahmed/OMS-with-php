<?php
// Establish database connection
include('config.php');
if(isset($_POST['add_stock'])) {
// Retrieve form data
$brand_id = $_POST["brand"];
$category_id = $_POST["category"];
$product_id = $_POST["product"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$unit = $_POST["unit"];
$type = $_POST["type"];
 

// Insert data into stock_table
$query = "INSERT INTO stock_table (brand_id, category_id, product_id, quantity, price, unit, type)
          VALUES ('$brand_id', '$category_id', '$product_id', '$quantity', '$price', '$unit', '$type')";
if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('New record created successfully !');
        window.location.href='add_stock.php';
    </script>";
} else {
    // echo "Error: ". $sql . " ". mysqli_error($conn);
    echo "<script>
        alert('Error!');
        window.location.href='add_stock.php';
    </script>";
}
mysqli_close($conn);
} else {
echo "<script>
    alert('Something wrong');
    window.location.href='add_stock.php';
</script>";
}
?>
?>
