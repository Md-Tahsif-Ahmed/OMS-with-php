<?php
    session_start();
    include("sessionControl.php");
    include("config.php");
    echo $user_id = $_SESSION['name'];
    if(isset($_POST['add_attendance'])) {
        echo "<script>
            alert('Attendance given successfully !');
            window.location.href='show_attendance.php';
        </script>";
    } else {
        echo "<script>
            alert('Error!');
            window.location.href='attandance.php';
        </script>";
    }

?>
