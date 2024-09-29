<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

$server = "localhost";
$user = "root";
$password = "";
$db = "test-1";

$conn = mysqli_connect($server,$user,$password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    $sent = $conn->prepare("insert into contact(fullname,email,message) values (?,?,?)");
    $sent->bind_param("sss", $fullname, $email, $message);
    $sent->execute();
    header("Location: contact.php");
    exit();
  }
?>