
<html>
    <body>
<input type="hidden" readonly value="<?php session_start(); $userid=$_SESSION['userid']; echo $userid; ?>">
<style>
    body{
        background-image: url("../images/car2.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    
    }
        
    </style>
<a href="user_home.php"><button align="left">HOME</button></a>
<a href="user_update.php"><button>UPDATE PROFILE</button></a>
<a href="user_delete.php"><button>DELETE PROFILE</button></a>

</body>
</html>
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

    echo "<table border=1>";
    echo "<tr>";
    echo "<th>USER ID</th>";
    echo "<th>USER NAME</th>";
    echo "<th>ADDRESS</th>";
    echo "<th>EMAIL</th>";
    echo "<th>MOBILE</th>";
    echo "<th>LICENCE NUMBER</th>";

    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM user where userid=$userid");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["userid"]. "</td>";
        echo "<td>" .$row["username"]. "</td>";
        echo "<td>" .$row["address"]. "</td>";
        echo "<td>" .$row["email"]. "</td>";
        echo "<td>" .$row["mobile"]. "</td>";
        echo "<td>" .$row["licence"]. "</td>";
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

