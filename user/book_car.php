<?php
$conn=mysqli_connect("localhost", "root", "akhil@123@12", "car_rent");

if(!$conn)
{
    die("Error: Failed to connect to database!");
}
$cid=$_POST['cid'];

$query=mysqli_query($conn,"SELECT * FROM `car`where cid='$cid'");

session_start(); $userid=$_SESSION['userid']; 
//echo $item_id;
echo "<table align=center>";

while($row= mysqli_fetch_array($query)){
    echo "<tr><th>CAR ID</th><td style='border: solid 1px black;'>".$row['cid']."</td></tr>";
    $cid=$row['cid'];
    echo "<tr><th>TYPE</th><td style='border: solid 1px black;'>".$row['ctype']."</td></tr>";
    echo "<tr><th>MODEL</th><td style='border: solid 1px black;'>".$row['model']."</td></tr>"; 
    $model=$row['model'];
    echo "<tr><th>STOCK</th><td style='border: solid 1px black;'>".$row['stock'] ."</td></tr>";
    $stock=$row['stock'];
    echo "<tr><th>BRAND</th><td style='border: solid 1px black;'>".$row['brand']."</td></tr>";
    $brand=$row['brand'];
    echo "<tr><th>AMOUNT PER DAY</th><td style='border: solid 1px black;'>"."₹".$row['amount']."</td></tr>";
    $amount=$row['amount'];
    echo "<tr><th>IMAGE</th><td>";


            $pathx = "../images/";
            $file = $row["image"];
            echo "<tdstyle='border: solid 1px black;>";
            echo '<img src="'.$pathx.$file.'" height=100 width=100>';
            echo "</td></tr>";

            }           
echo "</table>";

?>

<!DOCTYPE html>
<html>
<head>
 <title>BOOKING</title>
</head>
 <body>
<div>
     <form action="booking.php" align='center'method="post">  
     <input type="hidden" readonly name="userid" value="<?php echo $userid;?>"><br>
     <input type="hidden" readonly name="cid" value="<?php echo $cid;?>"><br>
     <input type="hidden" readonly name="model" value="<?php echo $model;?>"><br>
     <input type="hidden" readonly name="brand" value="<?php echo $brand;?>"><br>
     <input type="hidden" readonly name="amount" value="<?php echo $amount;?>"><br>
     <input type="hidden" readonly name="stock" value="<?php echo $stock;?>">
      Quantity: &nbsp; <input type="text" name="qty" required><br><br>
      Booking Date: <input type="date"  select name="bdate" class="custom-select" required><br><br>
      Return Date: <input type="date" select name="rdate" class="custom-select" required>
         <input type="submit" value="BOOK">
    </form>
     
</div>     
</body>
</html>