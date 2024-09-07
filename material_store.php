<?php
include("config.php");
if(isset($_POST['add_mat'])) {
    ## Get form data
    $title = $_POST['title'];
    $category = $_POST['category'];
    $loaction = $_POST['location'];
    $date = date("Y-m-d H:i:s");

    
    $sql = "INSERT INTO `branding_marketing_table` ( `title`, `categories`, `location`, `status`,`created_at`) VALUES ( '$title', '$category', '$loaction', '0', '$date')";


   if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Material requisition has been created successfully !');
            window.location.href='branding_marketing_materials.php';
        </script>";
        } else {
            // echo "Error: ". $sql . " ". mysqli_error($conn);
            echo "<script>
                alert('Error!');
                window.location.href='material_request.php';
            </script>";
        }
        mysqli_close($conn);
    } else {
        echo "<script>
            alert('Something wrong');
            window.location.href='material_request.php';
        </script>";
    }
    
?>