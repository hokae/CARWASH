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
                <?php foreach ($services as $srvc): ?>
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0">
                            <img src="../images/<?= $srvc['services_image'] ?>" alt="<?= $srvc['services_name'] ?>" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; border: 2px solid #fff;">
                        </div>
                        <div>
                            <h4 class="title"><?= $srvc['services_name'] ?></h4>
                            <p class="description"><?= $srvc['services_description'] ?></p>
                            <!-- Button that triggers the modal for the specific service -->
                            <button type="button" class="readmore btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal<?= $srvc['services_id'] ?>" style="background-color: #007bff; border-color: #007bff; color: #fff;">
                                <span>Select Services</span>
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div><!-- End Service Item -->

                    <!-- Modal for Booking Form for each service -->
                    <div class="modal fade" id="bookingModal<?= $srvc['services_id'] ?>" tabindex="-1" aria-labelledby="bookingModalLabel<?= $srvc['services_id'] ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="bookingModalLabel<?= $srvc['services_id'] ?>">Book Your Service: <?= $srvc['services_name'] ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="../page/submit-booking.php" method="POST">
                                        <label for="booking_fullname">Full Name:</label>
                                        <input type="text" name="booking_fullname" id="booking_fullname" class="form-control" required><br><br>

                                        <label for="booking_email">Email:</label>
                                        <input type="email" name="booking_email" id="booking_email" class="form-control" required><br><br>

                                        <label for="booking_number">Phone Number:</label>
                                        <input type="text" name="booking_number" id="booking_number" class="form-control" required><br><br>

                                        <label for="booking_services_id">Select Service:</label>
                                        <input type="text" name="booking_services_id" value="<?= $srvc['services_name'] ?>" readonly class="form-control mb-2" required><br><br>

                                        <label for="booking_date">Booking Date:</label>
                                        <input type="date" name="booking_date" id="booking_date" class="form-control" required><br><br>

                                        <label for="booking_time">Booking Time:</label>
                                        <input type="time" name="booking_time" id="booking_time" class="form-control" required><br><br>

                                        <button type="submit" class="btn btn-primary">Submit Booking</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                <?php endforeach; ?>
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
                                        <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                                        <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
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
                                        <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                                        <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
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
                                        <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                                        <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
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
                                        <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                                        <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
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