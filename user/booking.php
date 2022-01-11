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

    $userid= $_POST['userid'];
    $cid= $_POST['cid'];
    $model= $_POST['model'];
    $brand= $_POST['brand'];
    $amount= $_POST['amount'];
    $bdate= $_POST['bdate'];
    $rdate= $_POST['rdate'];
    $stoke= $_POST['stock'];
   
if($stoke<$qty){
  die("Insufficient Stock");
}

    $sql = "INSERT INTO book (userid, `cid`,model amount, bdate, rdate, stock)
    VALUES ('$userid', '$cid', '$model', '$amount', '$bdate', '$rdate', '$stock')";

    $sql1 = "UPDATE plant set stock=stock-'$qty' where cid='$cid'";
    
    if($con->query($sql) === TRUE) {
      
    if ($con->query($sql1) === TRUE) {
      echo "Booking successfully";
    } }else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
    

?>

