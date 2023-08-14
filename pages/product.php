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
            font-size: 16px;
        }
        .data:focus{
            width: 100%;
            padding: 5px;
            background: rgba(217, 217, 217, 0);
            border-radius: 5px; 
            border: 1px solid #173293 ;
            outline: none;
        }
        .container{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10%
        }
    </style>
</head>
<body>
    
    <form method="post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-title-bg">
                            <p style="padding-left: 20px;" class="bg-primary text-#173293 text-right py-3"> <a
                                    class="btn btn-info text-white" style="font-weight: 600; " href="#" onclick="product()"
                                    id="product"> + Add Product</a></p>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Category Name</th>
                                        <th>In stock</th>
                                        <th>Quantity</th>
                                        <th>Buying Price</th>
                                        <th>Selling Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <?php

        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_name = "Warehouse_Management_System";

        $connection = mysqli_connect($host_name, $user_name, $password, $db_name);
    
        if(isset($_POST['add'])){
            $product = $_POST["pname"];
            $category = $_POST["cname"];
            $stock = $_POST["stock"];
            $quantity = $_POST["quantity"];
            $buying = $_POST["buy"];
            $selling = $_POST["sell"];
    
            $query = "INSERT INTO product(Product_Name, Category_Name, In_stock, Quantity, Buying_Price, Selling_Price) VALUES ('$product','$category','$stock','$quantity','$buying', '$selling')";
    
            $result = mysqli_query($connection, $query);
    
            if($result){
                echo "<script> alert('Added successfully')</script>";
            }
            else{
                echo "<script>alert('Data not submitted');</script>" . mysqli_error($connection);
            }
        }
        $sql = "SELECT * FROM product";
        $result = $connection->query($sql);

        while($row = $result->fetch_assoc()){
            echo "
                <tr>
                    <td>$row[Product_ID]</td>
                    <td>$row[Product_Name]</td>
                    <td>$row[Category_Name]</td>
                    <td>$row[In_Stock]</td>
                    <td>$row[Quantity]</td>
                    <td>¢$row[Buying_Price]</td>
                    <td>¢$row[Selling_Price]</td>
                    <td>
                        <a class='btn btn-danger btn-sm' name='delete' href='?delete_id=".$row['Product_ID']."'>Delete</a>
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
                echo "<script type='text/javascript'>alert('Successfully deleted'); window.location='../pages/product.php';</script>";
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
                </div>
            </div>
        </div>
    </form>
    

    <script>
        function product(){
            var Addproduct = document.getElementById('product');
            return(
                document.getElementById('tbody').innerHTML = 
                `
                <tr>
                    <td>#</td>
                    <td>
                        <input type="text" name="pname" class="data" placeholder=" Product name">
                    </td>
                    <td>
                        <input type="text" name="cname" class="data" placeholder="Input Name">
                    </td>
                    <td>
                        <select name="stock" id="stock">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        </select>
                    </td>
                    <td><input type="number" class="data" name="quantity" placeholder="Enter quantity"></td>
                    <td>
                        <input type="number" class="data" name="buy" placeholder="">
                    </td>
                    <td>
                        <input type="text" class='data' name="sell" id="sell" placeholder="Input selling Price">
                    </td>
                    <td>
                        <button class="btn btn-info text-white" style="background-color: #4BC548; outline: none; border: none;" href="#" name="add">
                            Add </button>
                    </td>
                </tr>
                `
            )
        }
    </script>
</body>
</html>