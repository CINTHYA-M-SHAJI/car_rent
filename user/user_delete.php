<html>
<head>
<title>Deleteuser</title>
<style>
    body{
        background-image: url("../images/imge.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    
    }
        
    </style>

</head>
<body>

       
<a href="user_home.php">
    <p align="right">HOME</p>
    </a>
<form align="center" style='color:black; margin-top:250px' method="POST"  action="">
EMAIL:<input type="text" name="email" ><br><br>
<button name="submit" value="submit">Submit</button><br>
</form>
<?php
$servername="localhost";
$username="root";
$password="akhil@123@12";
$database_name="car_rent";

$conn = mysqli_connect($servername,$username,$password,$database_name);
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$con = mysqli_connect("localhost","root","akhil@123@12","car_rent");
	if (!$con)
	{
		echo "<br>";
		die('Could not connect: ' .mysqli_error());
	}
	
	$db=mysqli_select_db($con,"car_rent");
	if (!$db)
	{
		die('Could not find database: ' .mysqli_error());
	}
	$query="DELETE FROM user WHERE email='$email'";
	$data=mysqli_query($con,$query);
	if(!$data)
	{
		echo " table error";
	}
	header('Location:../index.php');
}
?>
</body>

</html>


	
