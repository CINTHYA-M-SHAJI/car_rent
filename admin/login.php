<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN LOGIN</title>
<style>
body
        {
            background-image: url("../images/bg3.jpg");
            background-size: 1400px,600px;
            background-repeat: no-repeat;
            image-resolution: 84 ;
        }

</style>
</head>

<body>
<h1><center>LOGIN</center></h1>

<form action="login_conn.php" method="post">
<table align="center">
<tr>
<td>UserName:</td>
<td><input type="text" name="adminname" required autofocus/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="passcode" required/></td>
</tr>
</table>
<br>
<center><input type="submit" value="Login"/></center>
<br>
<center><a href="forget_passw.php">Forget Password?</a></center>

</form>
</body>
</html>