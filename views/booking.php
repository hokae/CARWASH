<?php
    include 'nav/header.php';
    // Include the Connector class
    require_once '../model/server.php';

    // Instantiate the Connector class
    $connector = new Connector();

    // Fetch all bookings that are pending approval
    $sql = "SELECT booking_id, booking_fullname, booking_email, booking_number, booking_date, booking_time, booking_status FROM booking_tb WHERE booking_status IN ('pending', 'approved')";
    $bookings = $connector->executeQuery($sql);
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
    <hr>
    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>             
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookings as $booking): ?>
                <tr>
                    <td><?php echo $booking['booking_fullname']; ?></td>
                    <td><?php echo $booking['booking_email']; ?></td>
                    <td><?php echo $booking['booking_number']; ?></td>
                    <td><?php echo $booking['booking_date']; ?></td>
                    <td><?php echo $booking['booking_time']; ?></td>
                    <td style="color: green;"><?php echo $booking['booking_status']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<hr>

<?php
    include 'nav/footer.php';
?>