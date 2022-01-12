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
    echo "<h1><center>Booking Details </center></h1>";
    echo "<table border=1 align='center' width='100%' >";
    echo "<tr>";
    echo "<th>USER ID</th>";
    echo "<th>CAR ID</th>";
    echo "<th>MODEL</th>";
    echo "<th>AMOUNT</th>";
    echo "<th>BOOKING DATE</th>";
    echo "<th>RETURNING DATE</th>";

    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM book");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr align='center'>";
        echo "<td>" .$row["userid"]. "</td>";
        echo "<td>" .$row["cid"]. "</td>";
        echo "<td>" .$row["model"]. "</td>";
        echo "<td>" .$row["amount"]. "</td>";
        echo "<td>" .$row["bdate"]. "</td>";
        echo "<td>" .$row["rdate"]."</td>";
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
