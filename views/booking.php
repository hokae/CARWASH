<?php
    include 'nav/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Main CSS File -->
  <link href="../assets/dist/css/main.css" rel="stylesheet">
    <title>Premium Car Wash Services</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            line-height: 1.6;
        }
        .container {
            max-width: 1100px;
            margin-top: 150px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .header {
            text-align: center;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .service-card {
            background-color: #ecf0f1;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .service-card:hover {
            transform: scale(1.05);
        }
        .service-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .service-details {
            padding: 15px;
            text-align: center;
        }
        .service-details h3 {
            margin-bottom: 10px;
            color: #2c3e50;
        }
        .service-details p {
            color: #34495e;
            font-weight: bold;
        }
        .booking-form {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            margin-top: 30px;
        }
        .booking-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #34495e;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
        }
        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .submit-btn:hover {
            background-color: #2980b9;
        }
        @media (max-width: 768px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚗 Premium Car Wash Services</h1>
            <p>Quality Cleaning at Affordable Prices</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <img src="https://picsum.photos/seed/basic/400/300" alt="Basic Wash">
                <div class="service-details">
                    <h3>Basic Wash</h3>
                    <p>$15 | Exterior Cleaning</p>
                </div>
            </div>
            <div class="service-card">
                <img src="https://picsum.photos/seed/deluxe/400/300" alt="Deluxe Wash">
                <div class="service-details">
                    <h3>Deluxe Wash</h3>
                    <p>$30 | Exterior & Interior</p>
                </div>
            </div>
            <div class="service-card">
                <img src="https://picsum.photos/seed/premium/400/300" alt="Premium Wash">
                <div class="service-details">
                    <h3>Premium Wash</h3>
                    <p>$50 | Complete Detailing</p>
                </div>
            </div>
            <div class="service-card">
                <img src="https://picsum.photos/seed/wax/400/300" alt="Wax & Shine">
                <div class="service-details">
                    <h3>Wax & Shine</h3>
                    <p>$40 | Advanced Protection</p>
                </div>
            </div>
        </div>

        <div class="booking-form">
            <h2>Book Your Car Wash</h2>
            <form>
                <div class="form-group">
                    <label>Service Type</label>
                    <select required>
                        <option value="">Select Service</option>
                        <option>Basic Wash</option>
                        <option>Deluxe Wash</option>
                        <option>Premium Wash</option>
                        <option>Wax & Shine</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" required>
                </div>
                <div class="form-group">
                    <label>Time</label>
                    <input type="time" required>
                </div>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" placeholder="Your Phone" required>
                </div>
                <button type="submit" class="submit-btn">Schedule Appointment</button>
            </form>
        </div>
    </div>
</body>
</html>


<?php
    include 'nav/footer.php';
 ?>