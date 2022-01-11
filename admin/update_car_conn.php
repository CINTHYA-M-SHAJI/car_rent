<?php
$servername = "localhost";
$username = "root";
$password = "akhil@123@12";
$dbname = "car_rent";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$cid=$_POST['cid'];
$ctype= $_POST['ctype'];
$model= $_POST['model'];
$stock= $_POST['stock'];
$brand= $_POST['brand'];
$amount= $_POST['amount'];
$image= $_POST['image'];

//"UPDATE user SET username='$username',`address`='$address', email='$email', mobile='$mobile',licence='$licence', `password`='$password' WHERE userid='$userid'";
$sql = "UPDATE car SET ctype='$ctype', model='$model', stock='$stock', brand='$brand', amount='$amount', `image`='$image' WHERE cid='$cid'";
 
if ($conn->query($sql) === TRUE) {
 
  echo "Record updated successfully";
  header('Location:../admin/view_car.php');
} 

else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>