<?php
session_start();
include("config.php");

$query = "SELECT * FROM hr_table";
$result = mysqli_query($conn, $query);

$id=$_POST['id'];

$hr_name = $_POST['hr_name']; 
$hr_outlet = $_POST['hr_outlet'];
$hr_info = $_POST['hr_information'];
$hr_phone = $_POST['hr_phone'];
$hr_mail = $_POST['hr_mail'];
// $hr_joining_date = $_POST['hr_joining_date'];
$gender = $_POST['gender']; 



mysqli_query($conn,"update `hr_table` set hr_name='$hr_name', hr_phone='$hr_phone', hr_mail='$hr_mail', gender='$gender',hr_info='$hr_info', hr_outlet='$hr_outlet' where id='$id'");



?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv = "refresh" content = "0; url = http://192.168.1.138/oms_new/oms/hr_edit.php?id=<?php echo $id ?>" />
   </head>
   <body>
      <p>This is demo text.</p>
   </body>
</html>