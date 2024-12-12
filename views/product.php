<?php
    include 'nav/topnav.php';
    include 'nav/server_sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    /* Flexbox to center the table on the page */
    .table-container {
        display: flex;
        justify-content: center;
        align-items: flex-start; /* Adjusted from "top" to "flex-start" */
        min-height: 100vh;
        padding: 20px;
        box-sizing: border-box;
    }

    /* Table styles */
    table {
        width: 100%; /* Use full width with some padding around */
        max-width: 1000px; /* Add a max-width for large screens */
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
        line-height: 1.6;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        table {
            width: 100%;
            font-size: 14px;
        }
        th, td {
            padding: 10px;
        }
    }
</style>
</head>
<body>
<div class="table-container">
    <table>
        <tr>
            <th>Product</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        <!-- Example of dynamically generated rows -->
        <tr>
            <td>Product 1</td>
            <td>Example Product 1</td>
            <td>This is a description of the first product.</td>
        </tr>
        <tr>
            <td>Product 2</td>
            <td>Example Product 2</td>
            <td>This is a description of the second product.</td>
        </tr>
        <tr>
            <td>Product 3</td>
            <td>Example Product 3</td>
            <td>This is a description of the third product.</td>
        </tr>
        <!-- Additional rows can be added dynamically if needed -->
    </table>
</div>
</body>
</html>
