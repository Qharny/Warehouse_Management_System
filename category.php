<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / General - NiceAdmin Bootstrap Template</title>
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

  <style>
    input[type='text']{
      border: none;
      border-bottom: 1px solid #1b85f7e6;
    }
    input[type='text']:focus{
      outline :none ;
      border: none;
      border-bottom: 1px solid #173292;
    }
    input::placeholder{
      color: #244de066;
    }
    input:focus::placeholder{
      padding: 5px;
      color: #173292;
    }
    button[type="submit"]{
      background:#173292;
      color: #fff;
      border: none;
      outline: none;
      border-radius: 30px;
      margin: 20px 0 0 0;
      padding: 5px 20px;
    }
    button[type="submit"]:hover{
      background: #2845ab;
    }

  </style>
</head>

<body>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <form action="" method="post">
              <div class="card-body">
                <h5 class="card-title">Add Category</h5>
                <input type="text" name="cat" id="cat" placeholder="Add category">
                <br>
                <button type="submit" name="cate">Add</button>
              </div>
            </form>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Category</h5>
              <form method="post">
                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                  </tr>
                </thead>
                <tbody id="tbody">
                  <?php
                    session_start();

                    $host_name = "localhost";
                    $user_name = "root";
                    $password = "";
                    $db_name = "Warehouse_Management_System";

                    $connection = mysqli_connect($host_name, $user_name, $password, $db_name);

                    if(isset($_POST['cate'])){
                      $category = $_POST['cat'];

                      $sql = "INSERT INTO category(Category_Name) VALUES ('$category')";
                      $result = mysqli_query($connection, $sql);

                      if($result){
                        echo "<script>alert('Added Successfully')</script>";
                      }
                      else{
                        echo "<script>alert('Data not Submitted')</script>";
                      }
                    }
                    $data = "SELECT * FROM category";
                    $info = $connection->query($data);
                    
                      if($rows = $info -> fetch_assoc()){
                        echo "
                        <tr>
                          <td>$rows[Category_ID]</td>
                          <td>$rows[Category_Name]</td>
                        </tr>
                        ";
                      }
                    
                  ?>
                </tbody>
              </table>
              </form>
              <!-- End Bordered Table -->
            </div>
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