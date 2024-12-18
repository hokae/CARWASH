<?php
// Include database connection
require_once '../model/server.php'; // Ensure this file contains your database connection settings

// Check if the booking ID is passed via POST request
if (isset($_POST['booking_id'])) {
    $bookingId = $_POST['booking_id'];

    try {
        // Prepare and execute the query to update the booking status to 'approved'
        $sql = "UPDATE booking_tb SET status = 'approved' WHERE booking_id = :booking_id";
        $query = $pdo->prepare($sql);
        $stmt->bindParam(':booking_id', $bookingId, PDO::PARAM_INT);
        $stmt->execute();

        // If the update was successful, send a success response
        echo json_encode(['success' => true]);
    } catch (Exception $e) {
        // If an error occurs, send a failure response
        echo json_encode(['success' => false]);
    }
} else {
    // If no booking ID is provided, return failure response
    echo json_encode(['success' => false]);
}
?>
