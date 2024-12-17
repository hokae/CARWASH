<?php
// Include database connection (assuming Connector.php handles the database logic)
require_once '../model/server.php';

// Instantiate the Connector class
$connector = new Connector();

// SQL query to get all pending bookings
$sql = "SELECT booking_id, booking_fullname, booking_email, booking_number, booking_services_id, booking_date, booking_time 
        FROM booking_tb 
        WHERE booking_status = 'pending'";

// Fetch the pending bookings
$pendingBookings = $connector->executeQuery($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Bookings</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Pending Bookings</h2>

<table>
    <thead>
        <tr>
            <th>Booking ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Service</th>
            <th>Booking Date</th>
            <th>Booking Time</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Check if there are any pending bookings
        if ($pendingBookings) {
            foreach ($pendingBookings as $booking) {
                echo "<tr>";
                echo "<td>" . $booking['booking_id'] . "</td>";
                echo "<td>" . $booking['booking_fullname'] . "</td>";
                echo "<td>" . $booking['booking_email'] . "</td>";
                echo "<td>" . $booking['booking_number'] . "</td>";
                

                // Get the service name from the service_id
                $serviceId = $booking['booking_services_id'];
                $serviceQuery = "SELECT service_name FROM services_tb WHERE services_id = :services_id";
                $serviceParams = [':services_id' => $serviceId];
                $serviceResult = $connector->executeQuery($serviceQuery, $serviceParams);
                $serviceName = $serviceResult ? $serviceResult[0]['services_name'] : 'Unknown';

                echo "<td>" . $serviceName . "</td>";
                echo "<td>" . $booking['booking_date'] . "</td>";
                echo "<td>" . $booking['booking_time'] . "</td>";
                echo "<td>" . $booking['booking_status'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No pending bookings found.</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
