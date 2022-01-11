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

    $ctype= $_POST['ctype'];
    $model= $_POST['model'];
    $stock= $_POST['stock'];
    $brand= $_POST['brand'];
    $amount= $_POST['amount'];
    $image= $_POST['image'];
    
    $sql = "INSERT INTO car(ctype, model,stock, brand, amount, `image`) VALUES ('$ctype', '$model', '$stock', '$brand', '$amount', '$image')";
    
    if ($con->query($sql) === TRUE) {
      header("location:view_car.php");
      echo "New car record successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    

    $con->close();
    

?>