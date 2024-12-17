<?php
require_once '../model/server.php';

// Instantiate the Connector class
$connector = new Connector();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the form
    $booking_fullname = $_POST['booking_fullname'];
    $booking_email = $_POST['booking_email'];
    $booking_number = $_POST['booking_number'];
    $booking_services_id = $_POST['booking_services_id'];
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];

    // Input validation (basic)
    if (empty($booking_fullname) || empty($booking_email) || empty($booking_number) || empty($booking_date) || empty($booking_time)) {
        echo "All fields are required!";
        exit;
    }

    // Prepare SQL to insert the booking into the `booking_tb` table
    $sql = "INSERT INTO booking_tb (booking_services_id, booking_fullname, booking_email, booking_number, booking_date, booking_time) 
            VALUES (:booking_services_id, :booking_fullname, :booking_email, :booking_number, :booking_date, :booking_time)";

    $params = [
        ':booking_services_id' => $booking_services_id,
        ':booking_fullname' => $booking_fullname,
        ':booking_email' => $booking_email,
        ':booking_number' => $booking_number,
        ':booking_date' => $booking_date,
        ':booking_time' => $booking_time
    ];

    // Execute the query to insert the booking
    if ($connector->executeUpdate($sql, $params)) {
        echo "Your booking has been successfully submitted!"; 
        echo "There was an error submitting your booking.";
    }
}
?>

<!-- HTML form for booking submission -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Booking</title>
</head>
<body>
    <h2>Submit Your Booking</h2>
    <form action="../page/submit-booking.php" method="POST">
        <label for="booking_fullname">Full Name:</label>
        <input type="text" name="booking_fullname" id="booking_fullname" required><br><br>

        <label for="booking_email">Email:</label>
        <input type="email" name="booking_email" id="booking_email" required><br><br>

        <label for="booking_number">Phone Number:</label>
        <input type="text" name="booking_number" id="booking_number" required><br><br>

        <label for="booking_services_id">Select Service:</label>
        <select name="booking_services_id" id="booking_services_id" required>
            <!-- Option values should be generated dynamically based on the services available -->
            <?php
            $sql = "SELECT services_id, service_name FROM services_tb";
            $services = $connector->executeQuery($sql);
            foreach ($services as $service) {?>
                <option value="<?=$service['services_id'] ?>"><?=$service['services_name'] ?></option>
                <?php
            }
            ?>
        </select><br><br>

        <label for="booking_date">Booking Date:</label>
        <input type="date" name="booking_date" id="booking_date" required><br><br>

        <label for="booking_time">Booking Time:</label>
        <input type="time" name="booking_time" id="booking_time" required><br><br>

        <button type="submit">Submit Booking</button>
    </form>
</body>
</html>
