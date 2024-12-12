
<?php 
  $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1)
?>


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
                <a href="../views/login.php" style="padding: 5px 10px; color: white; text-decoration: none;">
                    <i class="bi bi-box-arrow-right" style="font-size: 24px;"></i>
                </a>
            </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
