<?php
    include 'nav/topnav.php';
    include 'nav/server_sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

/* Adjusted table-container width */
.table-container {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    padding: 20px;
    width: 100%; /* Percentage width */
    max-width: 2000px; /* Max width for larger screens */
}

/* Table styles */
table {
    width: 200%; /* Use full width of container */
    border-collapse: collapse;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

/* Header styles */
th {
    background-color: #4e73df;
    color: white;
    font-size: 18px;
    padding: 15px;
    text-align: center;
    font-weight: bold;
}

/* Data cell styles */
td {
    background-color: #f9f9f9;
    font-size: 16px;
    padding: 15px;
    text-align: center;
    border: 1px solid #ddd;
    transition: background-color 0.3s ease;
}

/* Even row styling */
tr:nth-child(even) td {
    background-color: #f2f2f2;
}

/* Hover effect for rows */
tr:hover td {
    background-color: #ddd;
}

/* Improved text readability */
th, td {
    line-height: 5.5;
}
</style>

</head>
<body>
<div class="table-container">
    <table>
        <tr>
            <th>Date</th>
            <th>Customer's Name</th>
            <th>Product Name</th>
            <th>Unit Price</th>
            <th>Total Sales</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>  

</body>
</html>