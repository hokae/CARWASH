<?php
require_once '../model/server.php';

$connector = new Connector();

if (isset($_GET['booking_id'])) {
    $booking_id = $_GET['booking_id'];
    
    // Delete the booking
    $sql = "DELETE FROM booking_tb WHERE booking_id = :id";
    $params = [':id' => $booking_id];
    
    if ($connector->executeUpdate($sql, $params)) {
        header("Location: booking.php");
        exit();
    } else {
        echo "Error deleting booking.";
    }
}
?>