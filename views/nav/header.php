
<?php 
  $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1)
?>


  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Nova</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li class="nav-item" <?php if($_GET['page']="home") { ?> class="active" <?php } ?>>
                <a class="nav-link <?= $page == "home.php"? 'active bg-gradient-secondary':'' ; ?> " href="home.php" ><b>Home</b></a>
            </li>
            <li class="nav-item" <?php if($_GET['page']="about") { ?> class="active" <?php } ?>>
                <a class="nav-link <?= $page == "about.php"? 'active bg-gradient-secondary':'' ; ?> " href="about.php" ><b>About</b></a>
            </li>
            <li class="nav-item" <?php if($_GET['page']="services") { ?> class="active" <?php } ?>>
                <a class="nav-link <?= $page == "services.php"? 'active bg-gradient-secondary':'' ; ?> " href="services.php" ><b>Services</b></a>
            </li>
            <li class="nav-item" <?php if($_GET['page']="price") { ?> class="active" <?php } ?>>
                <a class="nav-link <?= $page == "price.php"? 'active bg-gradient-secondary':'' ; ?> " href="price.php" ><b>Price</b></a>
            </li>
            <li class="nav-item" <?php if($_GET['page']="contact") { ?> class="active" <?php } ?>>
                <a class="nav-link <?= $page == "contact.php"? 'active bg-gradient-secondary':'' ; ?> " href="contact.php" ><b>Contact Us</b></a>
            </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
