
<?php 
  $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1);
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HOME PAGE</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../images/" rel="icon">
  <link href="../images/" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/dist/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/dist/vendor2/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/dist/vendor2/aos/aos.css" rel="stylesheet">
  <link href="../assets/dist/vendor2/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/dist/vendor2/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/dist/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a class="logo d-flex align-items-center">
        <h1 class="sitename" style="background-color: red; border-radius: 10px;"></h1>
    </a>


      <nav id="navmenu" class="navmenu">
        <ul>
            <li class="nav-item" <?php if($_GET['page']="home") { ?> class="active" <?php } ?>>
                <a class="nav-link <?= $page == "home.php"? 'active bg-gradient-primary':'' ; ?> " href="../page/home.php" ><b>Home</b></a>
            </li>
            <li class="nav-item" <?php if($_GET['page']="about") { ?> class="active" <?php } ?>>
                <a class="nav-link <?= $page == "about.php"? 'active bg-gradient-primary':'' ; ?> " href="../page/about.php" ><b>About</b></a>
            </li>
            <li class="nav-item" <?php if($_GET['page']="services") { ?> class="active" <?php } ?>>
                <a class="nav-link <?= $page == "services.php"? 'active bg-gradient-primary':'' ; ?> " href="../page/services.php" ><b>Services</b></a>
            </li>
            <li class="nav-item" <?php if($_GET['page']="price") { ?> class="active" <?php } ?>>
                <a class="nav-link <?= $page == "price.php"? 'active bg-gradient-primary':'' ; ?> " href="../page/price.php" ><b>Price</b></a>
            </li>
            <li><a href="../page/contact.php" style="background-color: red; border-radius: 10px; padding: 5px 10px; color: black; text-decoration: none; font-weight:bold;">Contact Us</a></li>
            <!-- Log Out Button with Icon -->
            <li>
                <a href="../page/authentication.php?sub_page=login" style="padding: 5px 10px; color: white; text-decoration: none;">
                    <i class="bi bi-box-arrow-right" style="font-size: 24px;"></i>
                </a>
            </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
