<?php
    include 'nav/topnav.php';
    include 'nav/server_sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Bookings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table-container {
            max-width: 2000px; /* Adjust the maximum width here */
            margin-top: 30px auto; /* Centers the container */
            padding: 2px; /* Adds padding inside the container */
        }

        .btn {
            margin-right: 5px;
        }

        th {
            background-color: #4e73df;
            color: white ;
        }    
    </style>
</head>
<body>

<div class="container table-container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Customers</th>
                <th>Book ID</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>101</td>
                <td>2023-10-01</td>
                <td>Confirmed</td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>102</td>
                <td>2023-10-02</td>
                <td>Pending</td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mark Johnson</td>
                <td>103</td>
                <td>2023-10-03</td>
                <td>Confirmed</td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Emily Davis</td>
                <td>104</td>
                <td>2023-10-04</td>
                <td>Cancelled</td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Michael Brown</td>
                <td>105</td>
                <td>2023-10-05</td>
                <td>Pending</td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Sarah Wilson</td>
                <td>106</td>
                <td>2023-10-06</td>
                <td>Confirmed</td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>