<?php

    session_start();

    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "Warehouse_Management_System";

    $connection = mysqli_connect($host_name, $user_name, $password, $db_name);

    // Check if the 'signup' form has been submitted
    if(isset($_POST['signup'])){
        // Sanitize and escape user input

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $userName = $_POST['username'];
        $mail  = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['Confirmpassword'];

        // SQL query to check if the username or email already exists
        $check_usename = "SELECT * FROM signup WHERE Username = '$userName' OR Email = $mail";

        // Execute the query
        $query = mysqli_query($connection, $check_usename);

        // Check if a matching username or email is found in the database
        if(mysqli_num_rows($query) > 0){
            echo "<script> alert('Username or Email has already been taken'); </script>";
        }
        else{
            // check if the entered password match
            if($password == $confirm_password){
                // insert into database 
                $data = "INSERT INTO signup (Fullname, Username, Email, Password, Confirm_Password) VALUES ('$fname', '$lname', '$userName', '$mail', '$password', '$confirm_password')";
                mysqli_query($connection, $data);
                echo "<script> alert('Registered successfully'); </script>";
            }
            else{
                echo "<script> alert('Password does not Match'); </script>";
            };
        };


    }




?>