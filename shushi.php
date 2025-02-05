<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ร้านชูชิ - Sushi Shop</title>
  <meta name="description" content="ร้านชูชิสุดอร่อย">
  <meta name="keywords" content="Sushi, ร้านอาหารญี่ปุ่น, ชูชิ, อาหารญี่ปุ่น">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
<link rel="stylesheet" href="styles2.css">
  
  

</head>

<body>

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <h1 class="sitename">ร้านราชาซูชิ</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#home" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="home" class="hero d-flex align-items-center" style="background-image: url('imgshushi/shushi.png');">
    <div class="container text-center">
      <h1>ยินดีต้อนรับสู่ร้านชูชิของเรา!</h1>
      <p>อร่อย สดใหม่ เสิร์ฟทุกคำ</p>
      <a href="#menu" class="btn btn-primary">ดูเมนู</a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <h2>เกี่ยวกับร้านเรา</h2>
          <p>ร้านชูชิของเราใช้วัตถุดิบสดใหม่ทุกวัน เพื่อให้ลูกค้าได้รับประสบการณ์การรับประทานชูชิที่ดีที่สุด และได้รับรสชาติที่แท้จริงจากญี่ปุ่น.</p>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <img src="imgshushi/adoundshushi.png" alt="About Sushi">
        </div>
      </div>
    </div>
  </section>

  <!-- Menu Section -->
  <section id="menu" class="menu section-padding">
    <div class="container">
      <h2 class="text-center" data-aos="fade-up">เมนูชูชิของเรา</h2>

      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="imgshushi/shushi2.png" alt="Sushi 1">
            <h3>ชูชิปลาแซลมอน</h3>
          </div>
          <div class="swiper-slide">
            <img src="imgshushi/shushi3.png" alt="Sushi 2">
            <h3>ชูชิทูน่า</h3>
          </div>
          <div class="swiper-slide">
            <img src="imgshushi/shishi4.png" alt="Sushi 3">
            <h3>ชูชิไข่ปลาแซลมอน</h3>
          </div>
          <!-- เพิ่มภาพชูชิเพิ่มเติมที่นี่ -->
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact section-padding">
    <div class="container">
      <h2 class="text-center">ติดต่อเรา</h2>
      <p class="text-center">หากคุณมีคำถามหรือต้องการสั่งซื้อ สามารถติดต่อเราได้ที่นี่</p>
      <form action="#" method="post">
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="form-control" name="name" placeholder="ชื่อของคุณ" required>
          </div>
          <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="อีเมลของคุณ" required>
          </div>
        </div>
        <textarea class="form-control" name="message" rows="5" placeholder="ข้อความของคุณ" required></textarea>
        <button type="submit" class="btn btn-primary mt-3">ส่งข้อความ</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <p>&copy; 2025 ร้านชูชิ - All Rights Reserved.</p>
  </footer>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // Swiper initialization
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

    // AOS initialization
    AOS.init({
      duration: 1200,
    });
  </script>

</body>

</html>
