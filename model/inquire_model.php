<?php
// Import database connector
require_once 'server.php';

// Class for handling inquiries
class InquireModel extends Connector {
    // Constructor
    function __construct() {
        parent::__construct();
    }
    
    // Function to fetch inquiry data (SELECT)
    function inquire() {
        $sql = "SELECT * FROM inquire_tb";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    // Function to add an inquiry (INSERT)
    function addInquire($inq_id, $inq_name, $inq_email, $inq_message, $inq_subject) {
        // Create the SQL insert query
        $sql = "INSERT INTO `inquire_tb` (`inq_id`, `inq_name`, `inq_email`, `inq_message`, `inq_subject`)
                VALUES (?, ?, ?, ?, ?)";

        // Prepare the statement
        $stmt = $this->conn->prepare($sql);

        // Bind parameters to the prepared statement (PDO method)
        $stmt->bindValue(1, $inq_id, PDO::PARAM_INT); // In case inq_id is an integer
        $stmt->bindValue(2, $inq_name, PDO::PARAM_STR);
        $stmt->bindValue(3, $inq_email, PDO::PARAM_STR);
        $stmt->bindValue(4, $inq_message, PDO::PARAM_STR);
        $stmt->bindValue(5, $inq_subject, PDO::PARAM_STR);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $stmt->errorInfo()[2]; // Return detailed error message
        }

        // Close the connection (PDO handles this automatically, but you can do it explicitly)
        $stmt = null;
    }
}
?>
