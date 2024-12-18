<?php
    include 'nav/header.php';
    include_once '../model/BookingModel.php';
    $model = new BookingModel();
    $services = $model->get_service();
 
?>


<body class="index-page">

  

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="../images/wash.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <h1 data-aos="fade-up">
              <div class="text-image " style="position: relative; padding-top: 300px;">
                  <img src="../images/was.png" alt="">
              </div>
            </h1>
            
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <div class="container">

        <div class="row g-0">

          <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
            <img src="../images/car.jpg" alt="">
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
                  <h3 class="mb-3">Grow your car wash business with us</h3>
                  <h4 class="mb-3">Optimize your services and stand out in the competitive market.</h4>
                  <p>Running a successful car wash business requires attention to detail, top-notch service, and the ability to adapt to customer needs. By focusing on high-quality equipment, eco-friendly practices, and exceptional customer service, your business can become the go-to choice for every car owner in town.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Innovation drives your car wash growth</h3>
                  <h4 class="mb-3">Embrace new technologies and provide excellent customer care.</h4>
                  <p>Innovation and efficient technology are key in the car wash business. By integrating automated systems, optimizing water usage, and offering additional services like waxing or detailing, you can significantly boost customer satisfaction and improve operational efficiency.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Stand out in the competitive car wash industry</h3>
                  <h4 class="mb-3">Improve service offerings and keep customers coming back.</h4>
                  <p>To stand out in a competitive car wash industry, it’s essential to constantly improve your service offerings. By focusing on customer retention strategies, introducing loyalty programs, and keeping up with the latest trends in eco-friendly car care, you can ensure long-term success and growth.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Enhance customer experience for better results</h3>
                  <h4 class="mb-3">Provide fast, quality service in a clean, welcoming environment.</h4>
                  <p>Improving your car wash business also means improving customer experience. By offering personalized services, efficient turnarounds, and maintaining a clean, welcoming environment, you can enhance customer satisfaction and drive repeat business.</p>
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
     
    

    </section><!-- /Services Section -->
  </main>

 <?php
    include 'nav/footer.php';
 ?>