
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="d-flex vh-100 justify-content-center align-items-center">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="" class="form-label">Package Name</label>
                    <input type="text" name="packName" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Package Price</label>
                    <input type="text" name="packPrice" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Image One</label>
                    <input type="file" name="imageOne" id="" class="form-control"  accept=".jpeg, .jpg, .png">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Image Two</label>
                    <input type="file" name="imageTwo" id="" class="form-control">
                </div>
                <input type="submit" value="Register" class="btn btn-primary">
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
  </body>
</html>

<?php

    include "dbconnection.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //print_r($_POST);
        $packname = $_POST["packName"];
        $packprice = $_POST["packPrice"];

        //echo "<br/>";
        //print_r($_FILES);
        $imageOneFileName = $_FILES["imageOne"]["name"];
        $imageOneTempName = $_FILES["imageOne"]["tmp_name"];
        //Change file name
        $imageOneNewFileName = uniqid()."-".$imageOneFileName;

        $imageTwoFileName = $_FILES["imageTwo"]["name"];
        $imageTwoTempName = $_FILES["imageTwo"]["tmp_name"];

        $imageTwoNewFileName = uniqid()."-".$imageTwoFileName;

        move_uploaded_file($imageOneTempName,'pack_img/'.$imageOneNewFileName);
        move_uploaded_file($imageTwoTempName,'pack_img/'.$imageTwoNewFileName);

        $qry = "INSERT INTO packages(PackageName, Price, ImageOne, ImageTwo) VALUES('$packname','$packprice','$imageOneNewFileName','$imageTwoNewFileName')";

        $i =$con->query($qry);
        if($i > 0){
            echo "
                <script>
                
                    Swal.fire({
                        title: 'Saved Successfully!',
                        text: 'You clicked the button!',
                        icon: 'success'
                        });

                    window.location.href ='view.php';
            
            </script>
            ";

            header("Location: view.php");
        }else{
            die("Error");
        }
    }

?>