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

    $username= $_POST['username'];
    $address= $_POST['address'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $licence= $_POST['licence'];
    $password= $_POST['password'];


    $sql = "INSERT INTO user (username,`address`,email, mobile, licence,`password`)
VALUES ('$username','$address', '$email', '$mobile','$licence', '$password')";
    
    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
      header('Location:../user/login.php');
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
    

?>