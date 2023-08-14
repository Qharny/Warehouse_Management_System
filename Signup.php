<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        /* CSS for both Login of Guest and User */





        
        /* CSS for Sign Up */
        html, body{
            height: 100%;
            width: 100%;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fafafa;
        }

        .form-container{
            display: flex;
            flex-direction: column;
            width: 660px;
            background-color: white;
            box-shadow: 0px 4px 50px 2px rgba(0, 0, 0, 0.07);
            border-radius: 15px;
            height: 480px;
        }
        .card-head{
            border-radius: 15px 15px 0px 0px;
            background-color: #1B85F7;
            color: white;
            margin-bottom: 30px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 120px;
        }
        .card-head h3{
            font-size: 34px;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        input{
            border: none;
            border-bottom: 1px solid #1b85f770;
            padding: 5px;
            width: 580px;
        }
        input::placeholder{
            color: #244de066;
        }
        input:focus::placeholder{
            color: #173292;
            padding: 10px;
        }
        input:focus{
            border: none;
            outline: none;
            border-bottom:1px solid #173292;
        }
        .link{
            margin: 10px 0px 20px 0px;
        }
        a{
            text-decoration: none;
            font-size: 14px;
            color: #173292;
        }
        .name input{
            width: 268px;
        }
        .pass{display: flex;}
        .pass input{
            width: 268px;
        }
        #Conpass{
            margin-left: 30px;
        }
        #lastname{
            margin-left: 30px;
        }
        button{
            width: 120px; 
            height: 35px; 
            padding-left: 20px; 
            border: none;
            padding-right: 20px; 
            padding-top: 12px; 
            padding-bottom: 12px; 
            background: linear-gradient(106deg, #244DE0 0%, #1b85f7e6 100%); 
            border-radius: 30px; 
            justify-content: center; 
            align-items: center; 
            gap: 10px; 
            display: inline-flex;
            color: white;
            margin-top: 40px;
        }

        
    </style>

    <!-- ======== End of CSS ======== -->
</head>
<body>
    <div class="form-container">

        <div class="card-head">
            <h3>Sign Up</h3>
        </div>

        <div class="card_form">

            <form action="" method="post" autocomplete="off">
                <div class="name">
                    <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
                    <input type="text" name="lastname" id="lastname" placeholder="Last Name" >
                </div>
                <br>
                <input type="text" name="username" id="Username" placeholder="Username" required><br>
                <input type="text" name="email" id="Email" placeholder="Email: Name@gmail.com" required><br>
                
                <div class="pass">
                    <input type="password" name="password" id="pass" placeholder="Password" required><br>
                    <input type="password" name="Confirmpassword" id="Conpass" placeholder="Confirm Password" required>
                </div>

                
                <div class="btn">
                    <button type="submit" name="signup">Sign Up</button>
                </div>
            </form>
            <?php

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
                    $check_usename = "SELECT * FROM signup WHERE Username = '$userName' OR Email = '$mail'";


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
                            $data = "INSERT INTO signup (Firstname, Lastname, Username, Email, Password, Confirmed_Password) VALUES ('$fname', '$lname', '$userName', '$mail', '$password', '$confirm_password')";
                            mysqli_query($connection, $data);
                            echo "<script> alert('Registered successfully');window.location(../dashboard.php); </script>";
                        }
                        else{
                            echo "<script> alert('Password does not Match'); </script>";
                        };
                    };


                }




            ?>

        </div>
            
    </div>
</body>
</html>