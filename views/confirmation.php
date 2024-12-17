<?php
// Include necessary files and start a session if needed
session_start();

// Check if there was a successful booking
if (isset($_SESSION['booking_success']) && $_SESSION['booking_success'] === true) {
    // Clear the session variable after displaying the confirmation message
    unset($_SESSION['booking_success']);
} else {
    // Redirect back to the booking page if no successful booking
    header("Location: booking.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        /* Reset some default browser styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and layout styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        /* Main container for the content */
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            color: #4CAF50;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
        }

        p {
            font-size: 1.1em;
            text-align: center;
            margin-bottom: 30px;
        }

        .booking-details {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .booking-details h3 {
            color: #333;
            font-size: 1.5em;
            margin-bottom: 15px;
        }

        .booking-details ul {
            list-style: none;
            padding-left: 0;
        }

        .booking-details li {
            font-size: 1.1em;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .booking-details li:last-child {
            border-bottom: none;
        }

        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 25px;
            text-decoration: none;
            font-size: 1.1em;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 1.8em;
            }

            .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Your booking has been successfully confirmed!</h2>
        <p>Thank you for booking with us. Your service will be scheduled as per your selected time and date.</p>

        <!-- Optional: Display the booking details -->
        <div class="booking-details">
            <h3>Booking Details:</h3>
            <ul>
                <li><strong>Name:</strong> <?= $_SESSION['fullname'] ?? 'N/A' ?></li>
                <li><strong>Email:</strong> <?= $_SESSION['email'] ?? 'N/A' ?></li>
                <li><strong>Phone Number:</strong> <?= $_SESSION['number'] ?? 'N/A' ?></li>
                <li><strong>Service:</strong> <?= $_SESSION['service_name'] ?? 'N/A' ?></li>
                <li><strong>Booking Date:</strong> <?= $_SESSION['date'] ?? 'N/A' ?></li>
                <li><strong>Booking Time:</strong> <?= $_SESSION['time'] ?? 'N/A' ?></li>
            </ul>
        </div>

        <!-- Optional: Provide a link to the home page or service listings -->
        <a href="services.php" class="btn">Back to Services</a>
    </div>
</body>
</html>
