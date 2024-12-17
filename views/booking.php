<?php
    include 'nav/header.php';
 
?>

<link rel="stylesheet" href="../assets/dist/css/book.css">
<body class="about-page">



    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/about-page-title-bg.jpg);">
            <div class="container">
                <h1>Booking</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="home.php">Home</a></li>
                        <li class="current">Booking</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Booking Form -->
        <div class="container">
            <section class="booking-form">
                <h2>Book Your Appointment</h2>
                <form action="../page/booking.php?sub_page=pending" method="POST">

                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required placeholder="Enter your full name">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required placeholder="Enter your email address">
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
                    </div>

                    <!-- Date -->
                    <div class="form-group">
                        <label for="date">Select Date</label>
                        <input type="date" id="date" name="date" required>
                    </div>

                    <!-- Time -->
                    <div class="form-group">
                        <label for="time">Select Time</label>
                        <input type="time" id="time" name="time" required>
                    </div>

                    <!-- Service Type -->
                    <div class="form-group">
                        <label for="service">Select Service</label>
                        <select id="service" name="service" required>
                            <option value="consultation">Consultation</option>
                            <option value="treatment">Treatment</option>
                            <option value="therapy">Therapy</option>
                        </select>
                    </div>

                    <!-- Additional Notes -->
                    <div class="form-group">
                        <label for="notes">Additional Notes</label>
                        <textarea id="notes" name="notes" rows="4" placeholder="Any additional information"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="submit-btn">Book Now</button>
                    </div>
                </form>
            </section>
        </div>

    </main>
  
    


 <?php
    include 'nav/footer.php';
 ?>



