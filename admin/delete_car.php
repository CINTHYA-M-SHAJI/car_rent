<html>
<head>
<title>Delete CAR</title>
<style>

body
        {
            background-image: url("../images/imge.jpg");
            background-size: 1400px,600px;
            background-repeat: no-repeat;
            image-resolution: 84 ;
        }

</style>
</head>
<body>

       
<a href="../admin/view_car.php">
    <p align="right">HOME</p>
    </a>
<form align='center' style='color:black;margin-top:250px'method="POST" action="">
CAR ID:<input type="text" name="cid" >
<button name="submit" value="submit">Submit</button><br><br>
<br>
<button><a href="../admin/view_car.php">View car</a></button>
</form>
<?php
$servername="localhost";
$username="root";
$password="akhil@123@12";
$database_name="car_rent";

$conn = mysqli_connect($servername,$username,$password,$database_name);
if(isset($_POST['submit']))
{
	$cid=$_POST['cid'];
	$con = mysqli_connect("localhost","root","akhil@123@12","car_rent");
	if (!$con)
	{
		echo "<br>";
		die('Could not connect: ' . mysqli_error());
	}
	
	$db=mysqli_select_db($con,"car_rent");
	if (!$db)
	{
		die('Could not find database: ' . mysqli_error());
	}

	$query="delete from car where cid='$cid'";
	$data=mysqli_query($con,$query);
	if(!$data)
	{
		echo " table error";
	}
	    
}
?>
</body>

</html>


	
