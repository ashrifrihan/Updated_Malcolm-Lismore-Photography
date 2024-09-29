<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malcolm Lismore</title>
    <link rel="icon" href="img/web icon.png">
    <link rel="stylesheet" href="Home-page.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="icon">
                <img src="img/logo.png" style="width: 200px; margin-top: 10px; margin-left: 20px;">
            </div>
            <div class="list">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="abou_page.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="bos.php">Prices</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>

    <section>
    <div class="main" id="home">
        <div class="body-main">
            <div class="image-1">
                <img src="img/image-1.jpg" class="image-1">
                <div class="welcome-text">
                      <h1 class="welcome-text-1">Welcome to Malcolm Lismore Photography Website</h1>
                      <p class="welcome-text-2">Capturing the beauty of nature</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-website" id="about">
    <h2 class="header">WE CAPTURE THE MOMENTS</h2>
    <p class="description">
        At Capturer, we specialize in freezing those fleeting moments in time
        that hold immense significance for you. With our passion for photography
        and keen eye for detail, we transform ordinary moments into
        extraordinary memories.
    </p>
    <p class="description">
        Whether it's a milestone event, a candid portrait, or the breathtaking
        beauty of nature, we strive to encapsulate the essence of every moment,
        ensuring that your cherished memories last a lifetime. Trust us to
        capture the magic of your life's journey, one frame at a time.
    </p>
    
    <img src="img/logo balc.png" alt="logo">
    <div class="about-btn">
      <button class="btn" ><a href="abou_page.php">VIEW  ABOUT</a></button>
    </div>
</section>

<section class="section__container gallery__container" id="gallery">
    <h2 class="section__header">~ GALLERY ~</h2>
    <div class="gallery__grid">
      <img src="img/gallery image 1.jpg" alt="gallery" />
      <img src="img/gallery image 2.jpg" alt="gallery" />
      <img src="img/gallery image 3.jpg" alt="gallery" />
      <img src="img/gallery image 4.jpeg" alt="gallery" />
      <img src="img/gallery image 5.jpeg" alt="gallery" />
      <img src="img/gallery image 6.jpg" alt="gallery" />
      <img src="img/gallery image 7.jpg" alt="gallery" />
      <img src="img/gallery image 8.jpg" alt="gallery" />
    </div>
    <div class="gallery__btn">
      <button class="btn" id="viewGalleryBtn">VIEW GALLERY</button>
    </div>
  </section>   
<footer id="contact">
    <div class="section__container footer__container">
      </div>
      <div class="footer__col">
        <ul class="footer__links">
          <li><a href="./Home_page.php">HOME</a></li>
          <li><a href="./abou_page.php">ABOUT US</a></li>
          <li><a href="./gallery.php">GALLARY</a></li>
          <li><a href="./bos.php">PRICES</a></li>
          <li><a href="./contact.php">CONTACT US</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>STAY IN TOUCH</h4>
      </div>
      <div class="contact-info">
        <h2>Contact Malcolm Lismore</h2>
        <p>Email: malcolm@example.com</p>
        <p>Phone: +123 456 7890</p>
    </div>
      <div class="social-media-icons">
        <a href="https://www.instagram.com/ashrif_rihan" target="_blank"><i class="ri-instagram-line"></i> Instagram </a>
        <a href="https://www.facebook.com/ashrif.rihan.9" target="_blank"><i class="ri-facebook-line"></i> Facebook</a>
      </div>

      <div>
        <p class="footer__col-1">
            Keep up-to-date with all things Capturer! Join our community and
            never miss a moment!
          </p>
      </div>
    </div>
    <div class="footer__bar">
      Copyright © 2023 Malcolm Lismore Photography . All rights reserved.
    </div>
  </footer>

  <script>
    document.getElementById('viewGalleryBtn').addEventListener('click', function() {
        document.getElementById('home','about','gallery','contact').scrollIntoView({ behavior: 'smooth' });
    });
</script>
</body>
</html>