<?php include 'nav/topnav.php';
    include 'nav/server_sidebar.php';
    
    $info = isset($info) ? $info : [];
    require_once '../model/server.php';

    // Instantiate the Connector class
    $connector = new Connector();
    $to = "jjbright0402@gmail.com"; 
    // Fetch all bookings that are pending approval
    $sql = "SELECT inq_id, inq_name, inq_email, inq_message, inq_subject FROM inquire_tb WHERE 1";

    $inquire = $connector->executeQuery($sql);
    
    


?>
<!-- Example contact.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inquire</title>

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
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Costumer's Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Subject</th>
                    <th class="text-center">Messages</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($inquire as $info): ?>
                <tr>
                    <td><?=$info['inq_id']?></td>
                    <td><?=$info['inq_name']?></td>
                    <td><?=$info['inq_email']?></td>
                    <td><?=$info['inq_subject']?></td>
                    <td><?=$info['inq_message']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> <!-- Display the contact info fetched from the model -->
    </div>

</body>
</html>

<?php
    include 'nav/server_footer.php';
 ?>