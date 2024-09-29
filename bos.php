<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

     body{   font-family: "Mukta", sans-serif;
    }

    img{
        border-radius: 8px;
    }

    .card-title{
        text-align: center;
        font-family: "Mukta", sans-serif;
        font-size: xx-large;
        font-weight: bold;;
    }

    html {
    scroll-behavior: smooth;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    transition: 0.5s;
}

.nav-bar{
    display: flex;
    width: 100%;
    height: 80px;
    background-color: rgb(31, 33, 51);
}

ul{
    display: flex;
    margin-top: 28px;
    list-style: none;
}

.list a{
    
    text-decoration: none;
    color: white;
    margin-left: 70px;
}

.list{
    margin-left:620px;
    display: flex;
    float: right;

}

ul a{
    font-family: "Montserrat", sans-serif;
}

.list ul li a:hover {
    color: #ff6347;
    transform: translateY(-5px);
}

.head{
    margin: 30px;
    font-family: "Montserrat", sans-serif;
    font-weight: bolder;
}
a{
    text-align: center;
}
    </style>
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="icon">
                <img src="img/logo.png" style="width: 200px; margin-top: 10px; margin-left: 20px;">
            </div>
            <div class="list">
                <ul>
                <li><a href="Home_page.php">Home</a></li>
                    <li><a href="abou_page.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="bos.php">Prices</a></li>
                    <li><a href="./contact.php">Contact</a></li>    
                </ul>
            </div>
        </div>
    </header>

    <div class="head">
        <h5 class="card-title">Price list</h5>
    </div>
    <Div class="container">
        <div class="col-lg-12 col-md-6 col-sm-2">
            <Div class="row">
                <div class="card me-5" style="width: 18rem;">
                    <img src="img/portfolio-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Wedding photos</h5> <h5> 20000 LKR </h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary w-100">Buy</a>
                    </div>
                </div>
                <div class="card me-5" style="width: 18rem;">
                    <img src="img/portfolio-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Birthday photos</h5> <h5> 7000 LKR </h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary w-100">Buy</a>
                    </div>
                </div>
                <div class="card me-5" style="width: 18rem;">
                    <img src="img/Couple image 1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Couples</h5> <h5> 12000 LKR </h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary w-100">Buy</a>
                    </div>
                </div>
                <div class="card me-4" style="width: 18rem;">
                    <img src="img/Solo image1.jpg" class="card-img-top" alt="soloimage">
                    <div class="card-body">
                      <h5 class="card-title">Model photos</h5> <h5> 5000 LKR </h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary w-100">Buy</a>
                    </div>
                </div>
            </Div>
        </div>
    </Div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>