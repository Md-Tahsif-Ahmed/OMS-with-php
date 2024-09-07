<?php
    // include("database.php");
    include("sessionControl.php");
    $conn = mysqli_connect("localhost","root","","lc_manage") or die("Connection failed");
    // session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 

        $usr=$_POST['usr'];
        $pass= md5($_POST['pass']);
        
        $sql = "(select * from user_info where user_id='$usr' and pass='$pass' or email='$usr' and pass='$pass')";
        $result = mysqli_query($conn,$sql);
        // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if(mysqli_num_rows($result)>=1)
        {
            $rchk=mysqli_fetch_array($result);

            $_SESSION['user_info_key']=$rchk['user_info_key'];
            $_SESSION['mt_valid_usr'] = $rchk['user_id'];
            $_SESSION['mt_user_name'] = $rchk['name'];
            $_SESSION['mt_agent_id'] = $rchk['agent_id'];
            $_SESSION['mt_agent_br_id'] = $rchk['agent_br_id'];
            $_SESSION['mt_user_info_key'] = $rchk['user_info_key'];
            $_SESSION['mt_user_login_time'] = date("d M Y H:i:s");
            $_SESSION['role_id'] = $rchk['role_id'];
            $_SESSION['is_first_login'] = $rchk['is_first_login'];

            $is_first_login = $_SESSION['is_first_login'];
            $user_info_key = $_SESSION['user_info_key'];
            $user_name = $_SESSION['mt_user_name'];
            
            if($is_first_login == 0)
            {
                header("Location: change-password.php");
            }
            
            else
            {
                header("Location: dashboard.php");
            }
        }
        else
        {
            header('Location:index.php?message=invalid user');
        }
    }
?>


