<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>

body{
  background-image: url("../images/bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

</head>

<body>
<h1><center>UPDATE YOUR CAR</center></h1>

<form action="../admin/update_car_conn.php" method="post">
<table align="center">
<tr><td>CAR ID:</td>
<td><input type="text" name="cid" required autofocus/></td></tr>
<tr><td><label for="cars">TYPE:</label>      
                            <td> <select name="ctype" id="cars">
                                 <option value="null">----</option>   
                                <option value="off road">Off road</option>
                                <option value="classic">Classic</option>
                                <option value="Sadan">sadan</option>
                              </select>  </td>  </td>  
                    </tr>
<tr><td>MODEL:</td>
<td><input type="text" name="model"/></td></tr>
<tr><td>STOCK:</td>
<td><input type="number" name="stock"/></td></tr>
<tr><td>BRAND:</td>
<td><input type="text" name="brand"/></td></tr>
<tr><td>AMOUNT PER DAY:</td>
<td><input type="number" name="amount"/></td></tr>
<tr><td></td>
<tr><td>IMAGE:</td>
<td><input type="file" name="image"required  /></td></tr>
</table>
<center><input type="submit" value="UPDATE" /></center>
</form>
</body>
</html>