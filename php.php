<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and assign variables
    $Full_Name = isset($_POST['Full_Name']) ? htmlspecialchars($_POST['Full_Name']) : '';
    $Email_Address = isset($_POST['Email_Address']) ? htmlspecialchars($_POST['Email_Address']) : '';
    $phone_number = isset($_POST['phone_number']) ? htmlspecialchars($_POST['phone_number']) : '';
    $Event_Type = isset($_POST['Event_Type']) ? htmlspecialchars($_POST['Event_Type']) : '';
    $Event_Date = isset($_POST['Event_Date']) ? htmlspecialchars($_POST['Event_Date']) : '';
    $Event_Location = isset($_POST['Event_Location']) ? htmlspecialchars($_POST['Event_Location']) : '';
    $Package = isset($_POST['Package']) ? htmlspecialchars($_POST['Package']) : '';

    // Database connection details
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "photo_db";

    // Create connection
    $conn = new mysqli($server, $user, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO enquiry (Full_Name, Email_Address, phone_Number, Event_Type, Event_Date, Event_Location, Package) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $Full_Name, $Email_Address, $phone_number, $Event_Type, $Event_Date, $Event_Location, $Package);

        // Execute statement
        if ($stmt->execute()) {
            header("Location: Customer Order.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $conn->close();
}
?>
