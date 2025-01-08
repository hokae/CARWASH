<?php
// Example PHP code to handle booking approval
require_once '../model/server.php';

// Check if a booking ID is passed in the URL
if (isset($_GET['booking_id'])) {
    $booking_id = $_GET['booking_id'];

    // Instantiate the Connector class
    $connector = new Connector();

    // Update the booking status to 'approved'
    $sql = "UPDATE booking_tb SET booking_status = 'approved' WHERE booking_id = :booking_id";
    $params = [
        ':booking_id' => $booking_id
    ];

    // Execute the update query
    if ($connector->executeUpdate($sql, $params)) {
        // Redirect with a success message (approved=true)
        header("Location: ../views/client.php");
        exit();
    } else {
        // Redirect with an error message (approved=false)
        header("Location: ../views/client.php");
        exit();
    }
}
?>
