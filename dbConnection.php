<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "image";

// Create connection
$conn = mysqli_connect($server, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = 'images/' . $file;

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO upload (title, description, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $description, $file);

    if ($stmt->execute()) {
        if (move_uploaded_file($tmp_name, $folder)) {
            echo "Image uploaded successfully!";
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Failed to insert record.";
    }

    $stmt->close();
    $conn->close();
}

?>
