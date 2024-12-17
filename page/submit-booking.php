<?php
// Include the Connector class
require_once '../model/server.php';

// Instantiate the Connector class
 $server = new Connector();


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the form
    $booking_fullname = $_POST['name']; // Full Name
    $booking_email = $_POST['email'];   // Email
    $booking_number = $_POST['phone'];  // Phone Number
    $booking_date = $_POST['date'];     // Booking Date
    $booking_time = $_POST['time'];     // Booking Time
    $booking_service = $_POST['service']; // Service Type
    $booking_notes = $_POST['notes'];   // Additional Notes (optional)

    // Input validation (basic)
    if (empty($booking_fullname) || empty($booking_email) || empty($booking_number) || empty($booking_date) || empty($booking_time) || empty($booking_service)) {
        echo "All fields are required!";
        exit;
    }

    // Map service type to service ID (assuming services are stored in the database)
    // For now, you can map manually if the service names correspond to IDs or use a query to get the service_id
    switch ($booking_service) {
        case 'consultation':
            $booking_services_id = 1; // Example ID for consultation
            break;
        case 'treatment':
            $booking_services_id = 2; // Example ID for treatment
            break;
        case 'therapy':
            $booking_services_id = 3; // Example ID for therapy
            break;
        default:
            $booking_services_id = 0;
            break;
    }

    // Prepare SQL to insert the booking into the `booking_tb` table with an "approved" status
    $sql = "INSERT INTO booking_tb (booking_services_id, booking_fullname, booking_email, booking_number, booking_date, booking_time, booking_status) 
            VALUES (:booking_services_id, :booking_fullname, :booking_email, :booking_number, :booking_date, :booking_time, 'pending')";

    $params = [
        ':booking_services_id' => $booking_services_id,
        ':booking_fullname' => $booking_fullname,
        ':booking_email' => $booking_email,
        ':booking_number' => $booking_number,
        ':booking_date' => $booking_date,
        ':booking_time' => $booking_time
    ];

    // Execute the query to insert the booking
    if ($server->executeUpdate($sql, $params)) {
        echo "Your booking has been successfully submitted and approved!";
        include "../views/client.php";
    } else {
        echo "There was an error submitting your booking.";
    }
}
?>
