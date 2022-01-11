<html>
<head>
<title>Regisstration</title>
</head>
<style>

body
        {
            background-image: url("../images/bg5.pg.jpg");
            background-size: 1400px,600px;
            background-repeat: no-repeat;
            image-resolution: 84 ;
        }

</style>
<body>
<h1><center>Register Here</center></h1>

<form action="user_registration_conn.php" method="post">
<table align="center">
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


</table>
<center><input type="submit" value="Register"></center>
</form>
<center><a href="login.php">Login</a></center>
</body>
</html>