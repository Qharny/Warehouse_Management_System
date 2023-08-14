<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/user1.css">

    <style>
        html,body{
            height:100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
    </style>

</head>

<body>
    <div class="container">
        <div class="content">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    
                </thead>
                <tbody>
                    <?php
                        session_start();

                        $host_name = "localhost";
                        $user_name = "root";
                        $password = "";
                        $db_name = "Warehouse_Management_System";

                        $connection = mysqli_connect($host_name, $user_name, $password, $db_name);
                        $sql = "SELECT * FROM signup";
                        $result = $connection->query($sql);

                        while($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>$row[ID]</td>
                                <td>$row[Firstname]</td>
                                <td>$row[Lastname]</td>
                                <td>$row[Username]</td>
                                <td>$row[Email]</td>
                                <td>
                                    <a class='btn btn-danger btn-sm' name='delete' href='?delete_id=".$row['ID']."'>Delete</a>
                                </td>
                            </tr>                      
                            ";
                        }
                        if(isset($_GET['delete_id'])){
                            $delete = $_GET['delete_id'];

                            // prepare and execute the delete query
                            $code = "DELETE FROM signup Where ID = ?";
                            $conn = $connection -> prepare($code);
                            $conn-> bind_param("i", $delete);

                            if ($conn->execute()){
                                echo "<script type='text/javascript'>alert('Successfully deleted'); window.location='user.php';</script>";
                            }else{
                                echo "<script type='text/javascript'>alert('Error');</script>";
                            }
                            // close the statement
                            $conn -> close();
                        }

                    ?>
                </tbody>
            </table>          

        </div>
    </div>
</body>
</html>