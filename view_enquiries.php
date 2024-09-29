<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />
  <style>
    .container {
      max-width: 90%;
      margin-left: 200px;
    }
  </style>
</head>
<body>
  <?php include "./sidebar.php"; ?>

  <?php
    // Database connection
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "image";
    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Handle deletion
    if (isset($_GET['delete_id'])) {
      $id = $_GET['delete_id'];

      // Delete query
      $qry = "DELETE FROM enquiry WHERE Id = ?";
      $stmt = $conn->prepare($qry);
      $stmt->bind_param("i", $id);

      if ($stmt->execute()) {
        echo "
          <script>
            alert('Record deleted successfully');
            window.location.href = 'Customer Order.php'; // Redirect to the main page after deletion
          </script>
        ";
      } else {
        echo "
          <script>
            alert('Error deleting record: " . $stmt->error . "');
            window.location.href = 'Customer Order.php'; // Redirect to the main page if an error occurs
          </script>
        ";
      }

      $stmt->close();
    }
  ?>

  <div class="container">
    <div class="d-flex flex-column vh-100 justify-content-center align-items-center">
      <table class="table table-striped table-bordered" id="demotable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Event Type</th>
            <th>Event Date</th>
            <th>Event Location</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Fetch data
            $qry = "SELECT * FROM enquiry";
            $res = $conn->query($qry);

            while($row = $res->fetch_assoc()){
          ?>
            <tr>
              <td><?php echo $row["Id"]; ?></td>
              <td><?php echo $row["Full_Name"]; ?></td>
              <td><?php echo $row["Email_Address"]; ?></td>
              <td><?php echo $row["phone_number"]; ?></td>
              <td><?php echo $row["event_type"]; ?></td>
              <td><?php echo $row["Event_Date"]; ?></td>
              <td><?php echo $row["Event_Location"]; ?></td>
              <td>
                <a href="?delete_id=<?php echo $row['Id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
              </td>
            </tr>
          <?php
            }
            $conn->close();
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>

  <script>
    $(document).ready(function() {
      $('#demotable').DataTable();
    });
  </script>
</body>
</html>
