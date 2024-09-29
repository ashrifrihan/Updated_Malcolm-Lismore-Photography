<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      label, input {
        padding-top: 20px;
        padding-bottom: 20px;
      }

      #main-content {
        margin-left: 270px; /* Adjust to create space between sidebar and content */
        padding: 20px; /* Add some padding for the main content */
        border: none;
      }

      .mb-3, h4{
      margin-left: 27px;
      margin-right: 27px;
      }
    </style>
  </head>
  <body>
    <?php
    include "./sidebar.php";
    include"./dbConnection.php";
    ?> 
    <div id="main-content" class="container allContent-section py-3">  
      <div class="col">
          <div class="card-body">
            <div class="col-sm-3">
              <div class="card" style="width: 34rem;">
                <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                <h4 style="color:black;">Image Upload</h4>
                <h5 style="color:black;">
                  <form action="" class="table" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Image Title</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter the image title" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Image Description</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter the Description" name="description">
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Image one</label>
                      <input class="form-control" type="file" id="formFile" accept=".jpeg, .jpg, .png" name="image">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <button class="btn btn-primary" type="submit" name="upload" onclick="sweet()">Upload</button>
                    </div>
                  </form>
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script type="text/javascript">
      function sweet() {
        swal("Good job!", "You clicked the button!", "success");
    }
    function normal() {
        alert('Normal Alert');
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
