<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Reports</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        html, body {
            width: 100%;
            height: 100%;
            position: relative;
            background: #FBFBFB;
            justify-content: center;
            align-items: center;
        }

        .card-title-bg {
            background: #FBFBFB;
        }
        .card-title-text {
            color: white;
            font-size: 25px;
            font-family: Montserrat;
            font-weight: 600;
            word-wrap: break-word;
        }
        .data{
            width: 100%;
            border: 1px solid rgba(0, 0, 0, 0.219);
            border-radius: 5px;
            padding: 5px;
        }
        .data:focus{
            width: 100%;
            padding: 5px;
            background: rgba(217, 217, 217, 0);
            border-radius: 5px; 
            border: 1px solid #173293 ;
            outline: none;
        }
        .data ::placeholder [type="date"]{
            float: right;
        }
        .container{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10%;
        }
    </style>
</head>
<body>
    
    <form method="post">
        <div class="container" >
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-title-bg">
                        <p style="padding-left: 20px;" class="bg-primary text-#173293 text-right py-3"> <a class="btn btn-info text-white" style="font-weight: 600; " href="#" onclick="appear()" id="sales"> + Add Sales</a></p>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody id="tbody">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <?php
        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_name = "Warehouse_Management_System";

        $connection = mysqli_connect($host_name, $user_name, $password, $db_name);

        if(isset($_POST['add'])){
            $product = $_POST['pname'];
            $quantity = $_POST['quantity'];
            $total = $_POST['total'];
            $date = $_POST['date'];

            $query = "INSERT INTO sale(Product_Name, Quantity, Total, Date) values('$product','$quantity','$total','$date')";

            $result = mysqli_query($connection, $query);
            if($result){
                echo "<script>alert('Submitted successfully')</script>";
            }
            else{
                echo "<script>alert('Data submitted')</script>";
            }
        }
    ?>
    <script>
        function appear(){
            var AddSales = document.getElementById('sales');
            return(
                document.getElementById('tbody').innerHTML =
                `
            <tr>
                <td>
                    <input type="text" name="pname" class="data" placeholder=" Enter name">
                </td>
                <td>
                    <input type="text" name="quantity" class="data" placeholder="Input quantity">
                </td>
                <td>
                    <input type="text" name="total" class="data" placeholder="Input total amount">
                </td>
                <td>
                    <input type="date" name="date" class="data" placeholder="">
                </td>
                <td>
                    <button class="btn btn-info text-white" style="background-color: #4BC548; outline: none; border: none;" href="#" name="add">
                        Add 
                    </button>
                </td>
            </tr>
            `
            )
            
        }
    </script>
</body>
</html>