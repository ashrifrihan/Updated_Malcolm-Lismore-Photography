<?php 
    include "./dbConnection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="gallery.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="icon">
                <img src="img/logo.png" style="width: 200px; margin-top: 10px; margin-left: 20px;">
            </div>
            <div class="list">
                <ul>
                <li><a href="index.php">Home</a></li>
                    <li><a href="abou_page.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="bos.php">Prices</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <h2 class="section__header">GALLERY</h2>
    <div class="gallery__grid">
    <?php
            $qry = "SELECT * FROM upload";
            $res = $conn->query($qry);

            while($row = $res->fetch_assoc()){
                ?>
                <div class="gallery__item">
                    <img src="images/<?php echo $row["image"]; ?>" alt="gallery" />
                    <div class="description"><?php echo $row["title"]; ?></div>
                </div>

                <?php
            }
        ?>
    </div>
</body>
</html>
