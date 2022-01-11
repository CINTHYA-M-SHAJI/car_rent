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
    echo "<h1><center>Users </center></h1>";
    echo "<table border=1 align='center' >";
    echo "<tr>";
    echo "<th>USER ID</th>";
    echo "<th>USER NAME</th>";
    echo "<th>ADDRESS</th>";
    echo "<th>EMAIL</th>";
    echo "<th>MOBILE</th>";
    echo "<th>LICENCE NO</th>";

    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM user");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["userid"]. "</td>";
        echo "<td>" .$row["username"]. "</td>";
        echo "<td>" .$row["address"]. "</td>";
        echo "<td>" .$row["email"]. "</td>";
        echo "<td>" .$row["mobile"]. "</td>";
        echo "<td>" .$row["licence"]."</td>";
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
