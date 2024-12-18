<?php
    include 'nav/header.php';
?>


<body class="about-page">



  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/about-page-title-bg.jpg);">
      <div class="container">
        <h1>About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="home.php">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
 

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <div class="container">

        <div class="row g-0">

          <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
            <img src="../images/download.jpg" alt="">
          </div>

          <div class="col-xl-7 slides position-relative" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "centeredSlides": true,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
              </script>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <p>As I pulled into the car wash, I couldn't help but feel a sense of relief wash over me. The warm sun beat down on my dirty vehicle, and the thought of a sparkling clean ride was just what I needed. The attendant expertly guided my car through the automated tunnel, where high-pressure jets of water and gentle brushes scrubbed away the dirt and grime. The sweet scent of soap filled the air as the car emerged from the other side, looking like new again. I couldn't believe how much dirt and debris had accumulated on my tires and wheels - it was amazing how a good car wash could transform my vehicle from dull and dingy to shiny and fresh.</p>
                  </div>
                </div><!-- End slide item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="../images/bgk.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
          <div class="text-center">
            <h3>Get Your Car Washed Today!</h3>
            <p>Experience the best car wash service to make your car shine like new. Fast, affordable, and high-quality cleaning.</p>
            <a class="cta-btn" href="services.php">Book Now</a>
          </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Team</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="../images/prof2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jasper James Calinawan</h4>
                <span>Scammer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="../images/prof.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Espiel Reo</h4>
                <span>Assistant Scammer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
        </div>

      </div>

    </section><!-- /Team Section -->

  </main>

 <?php
    include 'nav/footer.php';
 ?>