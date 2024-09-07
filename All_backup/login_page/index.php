<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LC Manager | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style22.css" rel="stylesheet">
</head>

<body style="display: flex; align-items: center; background-color: white" class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div class="row">
                

                <div class="col-12">
                    <!-- <img src="one_logo_2.png" height="100" width="150"> -->
                    <img src="download.jpg" height="auto" width="200">
                   
                </div>

                <div class="col-12">
                    <br>
                     <h3 class="" align="center"><b>LC Manager</b></h3>
                </div>
                
                
            </div>

            <form class="m-t" action="submit.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" name="usr" placeholder="User ID or Email" required="">
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password" required="">
                    <small style="color: red">
                       <?php if (isset($_GET["message"])) {
                            echo "Wrong Username /Email /Password";
                        } ?>
                    </small>
                </div>
                <button type="submit" name="btn" style="background-color: #6cb4ff; color: white" class="btn block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
            </form>
            <p class="m-t"> <strong>Copyright</strong> &copy; Venture Solution Limited 2021 </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>

