<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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

    <!-- =======================================================
  * Name: Group 4a
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: Group 4a
  * License: https://bootstrapmade.com/license/
======================================================== -->
<style>
    *{
        padding: 0;
        margin: 0;
    }
    html, body{
        width: 100% !important;
        height: 100% !important;
    }
    .contain{
        display: flex;
        flex-direction: row;
    }
    .cards{
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .card1{
        width: 263px;
        height: 126px;
        background: white; 
        box-shadow: 0px 4px 50px 2px rgba(0, 0, 0, 0.07); 
        border-radius: 0px 0px 14px 14px;
        border-top: 8px solid #244DE0;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card1 h3 a {
        font-size: 20px;
    }
    main{
        height: 100% !important;
        width: 100% !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    iframe{
        width: inherit;
        height: 95%;
    }
</style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Group_4a</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

    </header><!-- End Header -->

    <aside id="sidebar" class="sidebar" style="flex: 0.15;">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="dashboard.php" target="pageFrame">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collased" data-bs-target="#forms-nav" data-bs-toggle="collapse" aria-controls="forms-nav" id="toggle"href="#">
                    <i class="bi bi-people"></i><span>Users</span><i class="bi bi-chevron-down ms-auto" id="tooggle"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="user.php"   target="pageFrame">
                            <i class="bi bi-circle"></i><span>All Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-layouts.php" class="active" target="pageFrame">
                            <i class="bi bi-circle"></i><span>Pending Approval</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="category.php" target="pageFrame">
                    <i class="bi bi-bookmark-plus"></i></i><span>Categories</span>
                </a>

            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="pages/product.php" target="pageFrame">
                    <i class="bi bi-journal-text"></i><span>Products</span>
                </a>

            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="pages/sales/sales.php" target="pageFrame">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Sales</span>
                </a>
            </li><!-- End Tables Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" href="salesReport.php" target="pageFrame">
                    <i class="bi bi-bar-chart"></i><span>Sales Reort</span>
                </a>
            </li><!-- End Icons Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="login.php" target="pageFrame">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Login Page Nav -->
        </ul>

    </aside><!-- End Sidebar-->
    <main>
        <iframe src="dashboard.php" name="pageFrame" frameborder="0"></iframe>
    </main>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- <script>
        const toggleBtn = document.getElementById('toggle');
        const content = document.getElementById('forms-nav');

        toggleBtn.addEventListener('click', ()=> {
            if(content.style.display === 'none'){  //if the nav is hidden, show it and change text to hide
        }
        else{
            //otherwise, hide it and change text back to show
            content.style.display='block';
        }
        }

        )
    </script> -->
</body>
</html>