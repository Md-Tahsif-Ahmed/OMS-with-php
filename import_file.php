<?php
if(isset($_POST["submit_file"])) {
    echo "<script>
            alert('New record created successfully !');
            window.location.href='excel_upload_sales.php';
        </script>";
} else {
        echo "<script>
            alert('Something wrong');
            window.location.href='excel_upload_sales.php';
        </script>";
    }
?>