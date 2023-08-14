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
                <input type="text" name="Username" id="Username" placeholder="Username" required><br>
                <input type="text" name="Email" id="Email" placeholder="Email: Name@gmail.com" required><br>
                
                <div class="pass">
                    <input type="password" name="password" id="pass" placeholder="Password" required><br>
                    <input type="password" name="Confirmpassword" id="Conpass" placeholder="Confirm Password" required>
                </div>

                
                <div class="btn">
                    <button type="submit" name="submit">Sign Up</button>
                </div>
                <div class="link"><a href="#">Login as Admin</a></div>

            </form>

        </div>
            
    </div>
</body>
</html>