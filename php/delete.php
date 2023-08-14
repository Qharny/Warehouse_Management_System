<?php

    if(isset($_GET['id'])){
        $id = $_GET["id"];

        session_start();

        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_name = "Warehouse_Management_System";

        $connection = mysqli_connect($host_name, $user_name, $password, $db_name);
        // Check connection
        $sql = "DELETE FROM signup Where ID = $id";
        $connection->query($sql);
    }
?>