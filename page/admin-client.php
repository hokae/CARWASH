<?php
// Example code for admin to approve a booking
require_once '../model/server.php';

// Instantiate the Connector class
$connector = new Connector();

// Get the booking ID from the URL (e.g., booking_id=1)
$booking_id = $_GET['booking_id'];

// Update the booking status to 'approved'
$sql = "UPDATE booking_tb SET booking_status = 'approved' WHERE booking_id = :booking_id";

$params = [
    ':booking_id' => $booking_id
];

// Execute the update query
if ($connector->executeUpdate($sql, $params)) {
    echo "Booking has been approved!";
} else {
    echo "There was an error approving the booking.";
}
?>
