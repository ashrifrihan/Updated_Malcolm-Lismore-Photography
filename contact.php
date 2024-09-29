<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="contact.css">
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
    
    <section>
        <div class="main" id="home">
            <div class="body-main">
                <div class="image-1">
                    <img src="img/image-1.jpg" class="image-1">
                    <div class="content">
                        <div class="welcome-text">
                            <h1 class="welcome-text-1">Contact us</h1>
                            <p class="welcome-text-2">Malcolm Lismore</p>
                        </div>
                        <div class="side-information">
                            <div class="r-side">
                                <div class="contact-info">
                                    <h1>Email or call</h1>
                                    <p>Email: malcolm@example.com</p>
                                    <p>Phone: +123 456 7890</p>
                                </div>
                                <div class="social-media-icons">
                                    <a href="https://www.instagram.com/ashrif_rihan" target="_blank"><i class="ri-instagram-line"></i> Instagram </a>
                                    <a href="https://www.facebook.com/ashrif.rihan.9" target="_blank"><i class="ri-facebook-line"></i> Facebook</a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-form">
                            <form action="connect.php" method="post">
                                <input type="text" name="fullname" placeholder="Full Name" name="fullname">
                                <input type="email" name="email" placeholder="Email" name="email">
                                <textarea name="message" placeholder="Message" name="message"></textarea>
                                <button type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
