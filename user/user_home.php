<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home_User</title>
<style>
   body  
{  
    font-family: 'Arial'; 
    background-image: url("../images/bg4.jpg");
    opacity: 0.9px;
    background-size: cover;
    background-repeat: no-repeat;
    image-resolution: 84 ; 
}   

a{
    color: #ff0808;
}
</style>

</head>

<body  align="center">
<form align='center'>
  <h1><center>CAR RENTAL SYSTEM</center></h1>
  <h3><center>Book Your CAR</center></h3>
  USER ID: <input type="text" readonly value="<?php session_start(); $userid=$_SESSION['userid']; echo $userid; ?>">
  <button formaction="../user/user_profile.php"> PROFILE</a></button>
  <button formaction="../user/view_car_user.php">VIEW CAR</a></button>
  <button formaction="../index.php">LOGOUT</a></button>

  </a></button>

</form>
</body>
</html>