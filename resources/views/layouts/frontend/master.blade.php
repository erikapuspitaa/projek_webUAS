<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DentCare</title>


  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!--  #HEADER-->
  <header class="header">
    <div class="header-top">
      <div class="container">
        <ul class="contact-list">
          <li class="contact-item">
            <ion-icon name="mail-outline"></ion-icon><a href="mailto:dentcare@gmail.com" class="contact-link">dentcare@gmail.com</a></li>
          <li class="contact-item"><ion-icon name="call-outline"></ion-icon><a href="tel:+62857792813405" class="contact-link">+62857792813405</a></li>
        </ul>

        <ul class="social-list">
          <li><a href="#" class="social-link"><ion-icon name="logo-facebook"></ion-icon></a></li>
          <li><a href="#" class="social-link"><ion-icon name="logo-instagram"></ion-icon></a></li>
          <li><a href="#" class="social-link"><ion-icon name="logo-twitter"></ion-icon></a></li>
          <li><a href="#" class="social-link"><ion-icon name="logo-youtube"></ion-icon></a></li>
        </ul>
      </div>
    </div>

    <div class="header-bottom" data-header>
      <div class="container">
        <a href="#" class="logo">DentCare.</a>
        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li><a href="#home" class="navbar-link" data-nav-link>Home</a></li>
            <li><a href="scalling.html" class="navbar-link" data-nav-link>Services</a></li>
            <li><a href="#about" class="navbar-link" data-nav-link>About Us</a></li>
            <li><a href="#blog" class="navbar-link" data-nav-link>Blog</a></li>
            <li><a href="#" class="navbar-link" data-nav-link>Contact</a></li>
            <li><a href="dashboard.html" class="navbar-link" data-nav-link>Profile</a></li>
          </ul>
        </nav>

        <a href="/login" class="btn">Login</a>

        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
          <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
          <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
        </button>
      </div>
    </div>
  </header>


  <main>
    <article>
      <!-- 7. HERO -->

      <section class = "section hero" id = "home" style="background-image: url('./assets/images/hero-bg.png')" aria-label = "dokter-welcome">
        <div class = "container">
          <div class = "hero-content">
            <p class = "section-subtitle">Welcome To DentCare</p>
            <h1 class = "h1 hero-title">We Are Best Dental Service</h1>
            <p class = "hero-text">
              DentCare telah dipercaya melayani pasien di Jawa Timur selama lebih dari 10 tahun dengan 4 cabang
              yang tersebar di Surabaya. Dengan berbagai keunggulan demi memberikan kenyamanan selama prosedur perawatan gigi dan mulut di DentCare.
            </p>

            <button type="submit" class = "btn-booking"><a href="bookappoiment.html">Book Appointment</a></button>
          </div>
          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="587" height="839" alt="hero banner" class="w-100">
          </figure>
        </div>
      </section>
    </article>
  </main>

  @yield('content')


     

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="footer-top section">
      <div class="container">
        <div class="footer-brand">
          <a href="#" class="logo">DentCare.</a>

          <p class="footer-text">
            DentCare adalah Klinik Dokter Gigi Spesialis TERBESAR di Surabaya 
            dengan komitmen memberikan layanan kesehatan gigi dan mulut yang expert, 
            profesional, berkualitas, serta up-to-date dengan teknologi dental berstandar 
            internasional.
          </p>

          <div class="schedule">
            <div class="schedule-icon">
              <ion-icon name="time-outline"></ion-icon>
            </div>

            <span class="span">
              Monday - Saturday:<br>
              9:00am - 10:00Pm
            </span>
          </div>

        </div>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Other Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Home</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">About Us</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Services</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Project</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Our Team</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Latest Blog</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Our Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Gum-Lifting</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Bleaching</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Operasi Gigi Bungsu</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Implan dan Penambalan Gigi</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Perawatan Kawat Gigi</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Scalling</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Contact Us</p>
          </li>

          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="item-text">
              Jl. Ir. Hj. Soekarno, Universitas Airlangga, Surabaya.
            </address>
          </li>

          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="call-outline"></ion-icon>
            </div>
            <a href="tel:+62857792813405" class="footer-link">+62857792813405</a>
          </li>

          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <a href="mailto:dentcare@gmail.com" class="footer-link">dentcare@gmail.com</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <ul class="social-list">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>





  



  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>