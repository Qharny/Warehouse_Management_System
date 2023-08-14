<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users / Profile - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body> 

  <main id="main" class="main">

    <section class="section profile">
      <div class="row">


          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">All Sales</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Last 7 days</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Last Month</button>
                </li>

              </ul>

              <div class="tab-content pt-2">

                <!-- All Sales -->
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                        $host_name = "localhost";
                        $user_name = "root";
                        $password = "";
                        $db_name = "Warehouse_Management_System";

                        $connection = mysqli_connect($host_name, $user_name, $password, $db_name);

                        $sql = "SELECT signup.ID, signup.Username, product.Product_Name, product.Quantity FROM signup, product";
                        $result = $connection->query($sql);
                        if ($result ->num_rows > 0){
                          if($row = $result->fetch_assoc()){
                            echo "
                            <tr>
                              <td>$row[ID]</td>
                              <td>$row[Username]</td>
                              <td>$row[Product_Name]</td>
                              <td>$row[Quantity]</td>
                              <td>
                                <a class='btn btn-danger btn-sm' name='id' href='php/delete.php'>Delete</a>
                              </td>
                            </tr>
                            ";
                          }
                        }


                      ?>
                    </tbody>
                  </table>

                </div>

                <!-- Last one week -->
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Product</th>
                        <th scope="col">Sales</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                        $host_name = "localhost";
                        $user_name = "root";
                        $password = "";
                        $db_name = "Warehouse_Management_System";

                        $connection = mysqli_connect($host_name, $user_name, $password, $db_name);

                        $sql = "SELECT signup.ID, signup.Username, product.Product_Name, product.Quantity FROM signup, product";
                        $result = $connection->query($sql);
                        if ($result ->num_rows > 0){
                          if($row = $result->fetch_assoc()){
                            echo "
                            <tr>
                              <td>$row[ID]</td>
                              <td>$row[Username]</td>
                              <td>$row[Product_Name]</td>
                              <td>$row[Quantity]</td>
                              <td>
                                <a class='btn btn-danger btn-sm' name='id' href='php/delete.php'>Delete</a>
                              </td>
                            </tr>
                            ";
                          }
                        }


                      ?>
                    </tbody>
                  </table>

                </div>

                <!-- Last month -->
                <div class="tab-pane fade pt-3" id="profile-settings">

                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Product</th>
                        <th scope="col">Sales</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php

                        $host_name = "localhost";
                        $user_name = "root";
                        $password = "";
                        $db_name = "Warehouse_Management_System";

                        $connection = mysqli_connect($host_name, $user_name, $password, $db_name);

                        $sql = "SELECT signup.ID, signup.Username, product.Product_Name, product.Quantity FROM signup, product";
                        $result = $connection->query($sql);
                        if ($result ->num_rows > 0){
                          if($row = $result->fetch_assoc()){
                            echo "
                            <tr>
                              <td>$row[ID]</td>
                              <td>$row[Username]</td>
                              <td>$row[Product_Name]</td>
                              <td>$row[Quantity]</td>
                              <td>
                                <a class='btn btn-danger btn-sm' name='delete' href='?delete_id=".$row['ID']."'>Delete</a>
                              </td>
                            </tr>
                            ";
                          }
                        }
                        if(isset($_GET['delete_id'])){
                            $delete = $_GET['delete_id'];

                            // prepare and execute the delete query
                            $code = "DELETE FROM $sql Where ID = ?";
                            $conn = $connection -> prepare($code);
                            $conn-> bind_param("i", $delete);

                            if ($conn->execute()){
                                echo "<script type='text/javascript'>alert('Successfully deleted'); window.location='salesReport.php';</script>";
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

              </div><!-- End Bordered Tabs -->

          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>