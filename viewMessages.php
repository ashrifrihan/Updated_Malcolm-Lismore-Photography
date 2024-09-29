
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View all message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />
  </head>
  <style>
    .container {
      max-width: 90%;
      margin-left: 200px;
    }
  </style>  
  <body>
    <?php
    include "./sidebar.php";
    ?>
    <div class="container">
        <div class="d-flex vh-100 justify-content-center align-items-center">
           <table class="table" id="demotable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                <?php
            // Database connection
            $server = "localhost";
            $user = "root";
            $password = "";
            $db = "test-1";
            $conn = mysqli_connect($server, $user, $password, $db);
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            
            // Fetch data
            $qry = "SELECT * FROM contact";
            $res = $conn->query($qry);

            while($row = $res->fetch_assoc()){
          ?>
            <tr>
              <td><?php echo $row["ID"]; ?></td>
              <td><?php echo $row["fullname"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["message"]; ?></td>
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
        let table = new DataTable('#demotable');
    </script>
  </body>
</html>

