<?php
echo 'login';
    session_start();
    include("config.php");
    if(isset($_POST['login'])) {
        $user_email = $_POST['email'];
        $user_pass = $_POST['password'];

        $query = mysqli_query($conn, "SELECT * FROM user_table WHERE email = '$user_email' AND password = '$user_pass'");
        $result = mysqli_fetch_array($query);

        if($result > 0) {
            $_SESSION['login'] = $_POST['email'];
            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['user_name'] = $result['name'];
            $_SESSION['role_id'] = $result['role'];
            $_SESSION['address'] = $result['address'];
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: index.php");
        }
    } else {
        header("Location: index.php");
    }
?>


