<?php 
    include "./dbConnection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />
  </head>
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $qry = "SELECT * FROM upload";
                    $res = $conn->query($qry);

                    while($row = $res->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?php echo $row["Id"]; ?></td>
                                <td><?php echo $row["title"]; ?></td>
                                <td><?php echo $row["description"]; ?></td>
                                <td>
                                    <img src="images/<?php echo $row["image"]; ?>" alt="" height="100px">
                                </td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['Id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['Id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                    }
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


<?php
include "dbConnection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST["title"];
    $description = $_POST["description"];

    // Handle the uploaded file
    $file = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $folder = 'images/' . $file;

  

        // Close the statement
        $stmt->close();
    } else {
        echo "Failed to upload image.";
    }

    // Close the connection
    $conn->close();

?>
