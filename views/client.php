<?php
    include 'nav/topnav.php';
    include 'nav/server_sidebar.php';
    // Include the Connector class
    require_once '../model/server.php';

    // Instantiate the Connector class
    $connector = new Connector();

    // Fetch all bookings that are pending approval
    $sql = "SELECT booking_id, booking_fullname, booking_email, booking_number, booking_date, booking_time FROM booking_tb WHERE booking_status = 'pending'";

    $bookings = $connector->executeQuery($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Bookings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Basic page styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
           
        }

        /* Header styling */
        h2 {
            text-align: center;
            color: #343a40;
            margin-bottom: 30px;
        }

        /* Table styling */
        .table {
            margin: 0 auto;
            width: 95%;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            vertical-align: middle;
        }

        /* Table header styling */
        .table thead {
            background-color: #007bff;
            color: white;
        }

        /* Table row hover effect */
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Link styling for action button */
        .btn-approve {
            text-decoration: none;
            color: white;
            background-color: #28a745;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            font-size: 14px;
        }

        .btn-approve:hover {
            background-color: #218838;
        }

        /* Responsive Design */
        @media (max-width: 767px) {
            .table th, .table td {
                padding: 8px;
            }

            .btn-approve {
                padding: 6px 12px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Pending Bookings</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>Action</th>
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
                    <td>
                        <a href="admin-client.php?booking_id=<?php echo $booking['booking_id']; ?>" class="btn-approve">Approve</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
