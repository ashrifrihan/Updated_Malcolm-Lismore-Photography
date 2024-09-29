<?php
include("./dbConnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry form - Malcolm Lismore Photography</title>
    <link rel="stylesheet" href="Customer Order.css">
    <link rel="icon" href="img/web icon.png">
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
<a href="Home_page.html">
    <svg height="32px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="62px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <polygon points="352,128.4 319.7,96 160,256 160,256 160,256 319.7,416 352,383.6 224.7,256 " class="svg-1"/>
    </svg>
</a>
<div class="container">
    <h1 class="cumt">Enquiry Form</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <h2>Contact Details</h2>
        <label for="name">Full Name</label>
        <input type="text" id="name" name="Full_Name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="Email_Address" required>

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone_number" required>

        <h2>Event Details</h2>
        <label for="event-type">Event Type</label>
        <input type="text" id="event_type" name="event_type">

        <label for="event-date">Event Date</label>
        <input type="date" id="event-date" name="Event_Date" required>

        <label for="event-location">Event Location</label>
        <input type="text" id="event-location" name="Event_Location" required>

        <button type="submit" name="submit">Submit</button>
    </form>
</div>
<!-- Include SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "image";

// connection
$conn = mysqli_connect($server, $user, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $Full_Name = $_POST["Full_Name"];
    $Email_Address = $_POST["Email_Address"];
    $phone_number = $_POST["phone_number"];
    $event_type = $_POST["event_type"];
    $Event_Date = date("Y-m-d", strtotime($_POST["Event_Date"]));
    $Event_Location = $_POST["Event_Location"];

    // SQL Insert
    $stmt = $conn->prepare("INSERT INTO enquiry (Full_Name, Email_Address, phone_number, event_type, Event_Date, Event_Location) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $Full_Name, $Email_Address, $phone_number, $event_type, $Event_Date, $Event_Location);

    if ($stmt->execute()) {
        echo "
            <script>
                Swal.fire({
                    title: 'Saved Successfully!',
                    text: 'Your enquiry has been submitted.',
                    icon: 'success'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'Customer Order.php';
                    }
                });
            </script>
        ";
    } else {
        echo "
            <script>
                Swal.fire({
                    title: 'Error!',
                    text: 'There was an error submitting your enquiry. Please try again.',
                    icon: 'error'
                });
            </script>
        ";
    }

    $stmt->close();
}

$conn->close();
?>
