<html>
<head>
<title>Untitled Document</title>
</head>
<style>

body
        {
            background-image: url("../images/photocar.jpg");
            background-size: 1400px,600px;
            background-repeat: no-repeat;
            image-resolution: 84 ;
        }

</style>
<body>
<h1><center>UPDATE YOUR PROFILE</center></h1>

<?php session_start(); $userid=$_SESSION['userid']; ?>

<form action="../user/user_update_conn.php" method="post">
<table align="center">
<tr><td>Userid:</td>
<td><input type="text" name="userid" readonly value=<?php echo $userid ?>></td></tr>
<tr><td>Name:</td>
<td><input type="text" name="username" required autofocus></td></tr>
<tr><td>Address:</td>
<td><textarea type="text" name="address" required></textarea></td></tr>
<tr><td>Email:</td>
<td><input type="email" name="email" required></td></tr>
<tr><td>Phone Number:</td>
<td><input type="text" name="mobile" pattern="[0-9]+" maxlength="10" minlength="10" required></td></tr>
<tr><td>Licence:</td>
<td><input type="text" name="licence"  maxlength="12" minlength="12" required></td></tr>
<tr><td>Password:</td>
<td><input type="text" name="password" minlength="6" required autofocus></td></tr>

<!---<tr><td>Gender:</td>
<td><input type="radio" value="male"/>M
    <input type="radio" value="female"/>F</td></tr>-->
</table>
<center><input type="submit" value="UPDATE"></center>

<center><button><a href="user_home.php">Home</a></button></center>
</form>
</body>
</html>
 