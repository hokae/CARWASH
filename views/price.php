<!DOCTYPE html>
<html>
<head>
  <title>Carwash Pricelist Form</title>
  <style>
    table {
      border-collapse: collapse;
      width: 50%;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }
    th {
      background-color: #f0f0f0;
    }
  </style>
</head>
<body>
  <h1>Carwash Pricelist Form</h1>
  <table>
    <tr>
      <th>Service</th>
      <th>Price</th>
    </tr>
    <tr>
      <td>Basic Car Wash</td>
      <td>$10.00</td>
    </tr>
    <tr>
      <td>Deluxe Car Wash</td>
      <td>$20.00</td>
    </tr>
    <tr>
      <td>Interior Cleaning</td>
      <td>$30.00</td>
    </tr>
    <tr>
      <td>Exterior Waxing</td>
      <td>$40.00</td>
    </tr>
    <tr>
      <td>Full Service Package</td>
      <td>$60.00</td>
    </tr>
  </table>
  <br>
  <h2>Schedule an Appointment</h2>
  <form>
    <label for="service">Select a Service:</label>
    <select id="service" name="service">
      <option value="basic">Basic Car Wash</option>
      <option value="deluxe">Deluxe Car Wash</option>
      <option value="interior">Interior Cleaning</option>
      <option value="exterior">Exterior Waxing</option>
      <option value="full">Full Service Package</option>
    </select>
    <br>
    <label for="vehicle">Select a Vehicle Type:</label>
    <select id="vehicle" name="vehicle">
      <option value="car">Car</option>
      <option value="truck">Truck</option>
      <option value="van">Van</option>
      <option value="suv">SUV</option>
    </select>
    <br>
    <label for="additional">Select Additional Services:</label>
    <input type="checkbox" id="interior" name="additional" value="interior">
    <label for="interior">Interior Cleaning</label>
    <input type="checkbox" id="exterior" name="additional" value="exterior">
    <label for="exterior">Exterior Waxing</label>
    <br>
    <input type="submit" value="Schedule Appointment">
  </form>
</body>
</html>