<?php
  session_start();

  $host_name = "localhost";
  $user_name = "root";
  $password = "";
  $db_name = "Warehouse_Management_System";

  $connection = mysqli_connect($host_name, $user_name, $password, $db_name);

  // if ($connection){
  //   echo "Connected Successfully";
  // }
  // else {
  //   die("Unable to connect".mysqli_connect_error());
  // }

?>
