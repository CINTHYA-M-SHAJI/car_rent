<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>

body
        {
            background-image: url("../images/bg3.jpg");
            background-size: 1400px,600px;
            background-repeat: no-repeat;
            image-resolution: 84 ;
        }

</style>

<title>USER LOGIN</title>
</head>

<body>
<h1><center>LOGIN</center></h1>

<form action="login_conn.php" method="post">
<table align="center">
<tr>
<td>Email:</td>
<td><input type="text" name="email"autofocus/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password"/></td>
</tr>
</table>
<br>
<center><input type="submit" value="Login"/></center>
<center><h4>Don't have an account?<a href="user_registration.php">Sign Up</a></h4></center>
<center><a href="forgot_pass.php">Forgot Password?</center>
</form>
</body>
</html>