<?php
    include("config.php");
    if(isset($_POST['add_hr'])) {
        ## Get form data
        $hr_name = $_POST['hr_name'];
        $hr_outlet = $_POST['hr_outlet'];
        $hr_phone = $_POST['hr_phone'];
        $hr_mail = $_POST['hr_mail'];
        $hr_info = $_POST['hr_info'];
        $gender = $_POST['gender'];
        $sql = "INSERT INTO `hr_table` (`hr_name`, `hr_outlet`, `hr_phone`, `hr_mail`, `hr_info`, `gender`) VALUES ('$hr_name', '$hr_outlet', '$hr_phone', '$hr_mail', '$hr_info', '$gender')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                alert('New record created successfully !');
                window.location.href='hr_list.php';
            </script>";
        } else {
            // echo "Error: ". $sql . " ". mysqli_error($conn);
            echo "<script>
                alert('Error!');
                window.location.href='add_hr.php';
            </script>";
        }
        mysqli_close($conn);
    } else {
        echo "<script>
            alert('Something wrong');
            window.location.href='add_hr.php';
        </script>";
    }

    $statusMsg = '';
// File upload path
$targetDir = "image/hr_image/";
$fileName = basename($_FILES["hr_img"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
if (isset($_POST["add_hr"]) && !empty($_FILES["hr_img"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["hr_img"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $insert = $db->query("INSERT into hr_table (hr_img) VALUES ('" . $fileName . "')");
            if ($insert) {
                $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
}
// Display status message
echo $statusMsg;
