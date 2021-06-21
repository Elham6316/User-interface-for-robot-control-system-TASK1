<?php

  //set connection variables 
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'robotarm';
  

  //connection to server & database 
  $connection = mysqli_connect($db_host, $db_user, $db_password );

  //check connection 
  if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;
  



$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];


if(isset($_POST['submit'])){

    echo "<br>";

    $my_query = "";

    $my_query = "select * from first WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO first (motor1, motor2, motor3, motor4, motor5, motor6) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', $v6)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['play'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from play WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO play (isOn) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
?>