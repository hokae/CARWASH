<?php
    include 'nav/header.php';
    include_once '../model/BookingModel.php';
    include_once '../model/Booking_Model.php';
    $model = new BookingModel();
    $services = $model->get_service();
   

// Create an instance of Booking_Model
$bookingModel = new Booking_Model();

// Get all services
$services = $bookingModel->get_service();

// Include the Connector class
require_once '../model/server.php';
$connector = new Connector();

// Fetch all bookings that are pending approval
$sql = "SELECT booking_id, booking_fullname, booking_email, booking_number, booking_date, booking_time FROM booking_tb WHERE booking_status = 'pending'";
$bookings = $connector->executeQuery($sql);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $service_id = $_POST['service_id'];  // Get the selected service ID from the form

    // Attempt to insert the booking
    $result = $bookingModel->insert_booking($fullname, $email, $number, $date, $time, $service_id);

    if ($result === true) {
        echo "Booking successfully added!";
    } else {
        echo $result;  // Display error message if any
    }
}
?>



    <body class="about-page">



    <main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background" style="background-image: url(assets/img/about-page-title-bg.jpg);">
            <div class="container">
                <h1>Services</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="home.php">Home</a></li>
                        <li class="current">Services</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Services Section -->
        <section id="services" class="services section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Services</h2>
            </div>

            <div class="container">
                <div class="row gy-4">
                    <?php foreach ($services as $srvc): ?>
                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                            <div class="icon flex-shrink-0">
                                <img src="../images/<?= $srvc['services_image'] ?>" alt="<?= $srvc['services_name'] ?>" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">
                            </div>
                            <div>
                                <h4 class="title"><?= $srvc['services_name'] ?></h4>
                                <p class="description"><?= $srvc['services_description'] ?></p>
                                <button type="button" class="readmore btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal<?= $srvc['services_id'] ?>">
                                    <span>Select Services</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Modal for Booking Form -->
                        <div class="modal fade" id="bookingModal<?= $srvc['services_id'] ?>" tabindex="-1" aria-labelledby="bookingModalLabel<?= $srvc['services_id'] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="bookingModalLabel<?= $srvc['services_id'] ?>">Book Your Service: <?= $srvc['services_name'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../page/submit-booking.php" method="POST">
                                            <input type="hidden" name="service_id" value="<?= $srvc['services_id'] ?>" />
                                            <label for="fullname">Full Name:</label>
                                            <input type="text" name="fullname" id="fullname" class="form-control" required><br><br>

                                            <label for="email">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control" required><br><br>

                                            <label for="number">Phone Number:</label>
                                            <input type="text" name="number" id="number" class="form-control" required><br><br>

                                            <label for="date">Booking Date:</label>
                                            <input type="date" name="date" id="date" class="form-control" required><br><br>

                                            <label for="time">Booking Time:</label>
                                            <input type="time" name="time" id="time" class="form-control" required><br><br>

                                            <button type="submit" class="btn btn-primary">Submit Booking</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

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