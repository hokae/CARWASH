<?php
    include 'nav/header.php';
    include_once '../model/BookingModel.php';
    $model = new BookingModel();
    $services = $model->get_service();
?>


    <body class="about-page">



    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/about-page-title-bg.jpg);">
            <div class="container">
            <h1>Services</h1>
            <nav class="breadcrumbs">
                <ol>
                <li><a href="home.php">Home</a></li>
                <li class="current">Services</li>
                </ol>
            </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- About Section -->


        <!-- Services Section -->
        <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Services</h2>
        </div><!-- End Section Title -->
        
        <div class="container">
            <div class="row gy-4">
                <?php foreach ($services as $srvc){
                    ?>
                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0">
                        <img src="../images/<?= $srvc['services_image'] ?>" alt="Service 1" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; border: 2px solid #fff;">
                    </div>
                    <div>
                        <h4 class="title"><?=$srvc['services_name'] ?></h4>
                        <p class="description"><?=$srvc['services_description'] ?></p>
                        <a href="../page/booking.php" class="readmore btn btn-primary stretched-link" style="background-color: #007bff; border-color: #007bff; color: #fff;">
                            <span>Select Services</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End Service Item -->
                    <?php
                }
                 
                ?>
                
            </div>
        </div>
        <hr>
        <section class="py-5 text-center container">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Products</h2>
            </div><!-- End Section Title -->
        </section><!-- /Services Section -->
        <!-- Service Cards Section -->
        <section id="service-cards" class="service-cards section">
            <div class="container-fluid">
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"><img src="../images/oil.jpg" alt=""></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Gulf Oil</h4>
                                        <p>Gulf oil refers to the vast petroleum reserves in the Gulf of Mexico, crucial for global energy production. The region is home to numerous offshore oil rigs that extract crude oil, which is refined into products like gasoline and diesel. While the Gulf is a major economic asset, it has also raised environmental concerns, particularly after incidents like the 2010 BP Deepwater Horizon spill. Despite these challenges, Gulf oil remains essential to the global energy market.</p>
                                        <div class="d-flex justify-content-end">
                                                <button class="btn btn-success ml-2" style="background-color: #28a745; border-color: #28a745; color: #fff;">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"><img src="../images/shine.jpg" alt=""></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Ultra Shine</h4>
                                        <p>Ultra Shine Wax is a high-performance car wax that provides a glossy finish and long-lasting protection. It creates a smooth, water-resistant layer that shields the paint from UV rays, dirt, and water, while enhancing the vehicle's shine. Known for its easy application and quick drying, it helps maintain a clean, fresh appearance for longer.</p>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-success ml-2" style="background-color: #28a745; border-color: #28a745; color: #fff;">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"><img src="../images/mat.jpg" alt=""></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Wash Pad</h4>
                                        <p>Our complete range of high-quality car care products is specially designed to make it faster and easier for you to keep your car looking in showroom condition – both inside and out. Give your car’s exterior and interior a streak-free finish with our microfiber car duster.</p>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-success ml-2" style="background-color: #28a745; border-color: #28a745; color: #fff;">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"><img src="../images/tire.jpg" alt=""></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Tire</h4>
                                        <p>Our tire is the best choice for your vehicle, offering unmatched traction, support, and durability. Engineered with a high-quality blend of rubber, steel, and fabric, our tire delivers superior performance on all road conditions, from smooth highways to rugged terrains. </p>   
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-success ml-2" style="background-color: #28a745; border-color: #28a745; color: #fff;">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                </div>
            </div>
        </section><!-- /Service Cards Section -->

        

<?php
    include 'nav/footer.php';
?>