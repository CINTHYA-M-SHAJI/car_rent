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


$userid=$_POST['userid'];
$username=$_POST['username'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$licence=$_POST['licence'];
$password = $_POST['password'];

$sql = "UPDATE user SET username='$username',`address`='$address', email='$email', mobile='$mobile',licence='$licence', `password`='$password' WHERE userid='$userid'";
 
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('Location:../user/user_profile.php');
} 

else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>