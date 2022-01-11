<html><body align="top_right">
<button><a href="admin_home.php">HOME</a></button>  
<button><a href="update_car.php">UPDATE</a></button>
<button><a href="delete_car.php">DELETE</a></button>

</body></html>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "akhil@123@12";
    $dbname = "car_rent";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "<table border=1 width=1200px>";
    echo "<tr>";
    echo "<th>CAR ID</th>";
    echo "<th>TYPE</th>";
    echo "<th>MODEL</th>";
    echo "<th>BRAND</th>";
    echo "<th>STOCK</th>";
    echo "<th>AMOUNT</th>";
    echo "<th>IMAGE</th>";
    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM  car");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr align=center>";
        echo "<td>" .$row["cid"]. "</td>";
        echo "<td>" .$row["ctype"]. "</td>";
        echo "<td>" .$row["model"]. "</td>";
        echo "<td>" .$row["brand"]. "</td>";
        echo "<td>" .$row["stock"]. "</td>";
        echo "<td>" .$row["amount"]. "</td>";
        
       
        $pathx= "../images/";
        $file=$row["image"];
        echo "<td>";
        echo '<img src="'.$pathx.$file.'" height=100 width=100>';
        echo "</td>";
       
        echo "</tr>";

    $i++;
    }
echo "</table>";
    }
    else{
    echo "No result found";
    }

    $con->close();
    ?>
