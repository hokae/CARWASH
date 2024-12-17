<?php
// Include the Connector class
require_once '../model/server.php';

// Instantiate the Connector class
$server = new Connector();

// Check if the required POST fields are set first
if (isset($_POST['booking_fullname'], $_POST['booking_email'], $_POST['booking_number'], $_POST['booking_services_id'], $_POST['booking_date'], $_POST['booking_time'])) {
    
    // Sanitize and assign POST values
    $fullname = $_POST['booking_fullname'];
    $email = $_POST['booking_email'];
    $phone = $_POST['booking_number']; // Correct variable name here
    $service_id = $_POST['booking_services_id'];
    $booking_date = $_POST['booking_date']; // Correct variable name here
    $booking_time = $_POST['booking_time']; // Correct variable name here

    // Step 1: Check if the selected service_id exists in the services_tb table
    $check_service_sql = "SELECT COUNT(*) FROM services_tb WHERE services_id = :service_id";
    $check_service_params = [':service_id' => $service_id];
    $service_exists = $server->executeQuery($check_service_sql, $check_service_params);

    if ($service_exists[0]['COUNT(*)'] == 0) {
        // Service does not exist
        echo "Selected service does not exist!";
    } else {
        // Step 2: Proceed with the booking insertion
        
        // Default booking status
        $status = 'pending'; // Assuming 'pending' as a default value

        // Prepare the SQL query for inserting the booking
        $sql = "INSERT INTO booking_tb (booking_fullname, booking_email, booking_number, booking_services_id, booking_date, booking_time, booking_status) 
                VALUES (:fullname, :email, :phone, :service_id, :booking_date, :booking_time, :status)";
        
        // Parameters for the query
        $params = [
            ':fullname' => $fullname,
            ':email' => $email,
            ':phone' => $phone,
            ':service_id' => $service_id,
            ':booking_date' => $booking_date,
            ':booking_time' => $booking_time,
            ':status' => $status
        ];

        // Execute the query using the executeUpdate method
        if ($server->executeUpdate($sql, $params)) {
            echo "Booking submitted successfully!";
        } else {
            echo "Error submitting booking!";
        }
    }
} else {
    // If any required field is missing, print an error
    echo "All fields are required!";
}
?>
