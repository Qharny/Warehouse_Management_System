<?php
    session_start();

    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "Warehouse_Management_System";

    $connection = mysqli_connect($host_name, $user_name, $password, $db_name);

    // check if the login form has submitted
    if(isset($_POST['login'])){
        $name = $_POST['name'];
        $password = $_POST['password'];

        $data = "SELECT * FROM signup WHERE Username = '$name' OR Email = '$name'";
        $result = mysqli_query($connection, $data);

        if($result){
            $row = mysli_fetch_assoc($result);

            if(mysqli_num_rows($result) > 0){
                if(password_verify($pass, $row["Password"])){
                    // Set session variables for login
                    $_SESSION["login"] = true;
                    $_SESSION["id"] = $row["id"];
                }
                else{
                    // Display an alert when the user enters the wrong password
                    echo "<script> alert('Wrong Password'); </script>";
                }
            } else {
                // Display an alert when the entered username or email is not registered
                echo "<script> alert('User not registered'); </script>";
            }
        } else {
            // Display an alert for query execution error
            echo "<script> alert('Error executing query'); </script>";
        }
    }



?>