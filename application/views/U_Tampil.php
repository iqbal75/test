<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pt. Pranata Aditama Tecnologi</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/clock.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<style type="text/css">
  .sosial{
    position: relative;
    text-align: center;
    align-items: center;
    margin-left: 40px;
  }
</style>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <div class="col-md-4">
        <img src="assets/img/clock.png" width="35%" >
      </div>
      <div class="col-md-8">
      

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#hero">Home</a></li>
            <li><a href="#about-us">About</a></li>

            
              <li><a href="#LiniBisnis">Lini Bisnis</a></li>
              <li><a href="#VisiMisi">Visi&Misi</a></li>
              <li><a href="#portfolio">Product</a></li>
              <li><a href="#clients">clients</a></li>
              <li><a href="#footer">Contact</a></li>

          </ul>
        </nav><!-- .nav-menu -->
        </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Pranata Aditama Technology</span></h2>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Pranata Aditama Technology</span></h2> 
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Pranata Aditama Technology</span></h2> 
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            

            <img src="assets/gambar/About/about1.jpg" width="100%">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            
              <?php 
                  foreach($about as $u){ 
                  ?>
                    <p><?php echo $u->About ?></p>
                    
                  
            <!--   PT. Pranata Aditama Teknologi adalah perusahaan swasta nasional yang bergerak dalam bidang jasa konsultansi manajemen meliputi bidang manajemen Teknologi Informasi (TI). Khusus dibidang Teknologi informasi, PT. Pranata Aditama Teknologi memberikan layanan  untuk bidang: -->
            
            <ul>
              <li><i class="ri-check-double-line"></i> <?php echo $u->A1 ?></li>
              <li><i class="ri-check-double-line"></i> <?php echo $u->A2 ?></li>
              <li><i class="ri-check-double-line"></i> <?php echo $u->A3 ?></li>
              <li><i class="ri-check-double-line"></i> <?php echo $u->A4 ?></li>

              <?php } ?> 
              
            </ul>
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Lini Bisnis Section ======= -->
    <section id="LiniBisnis" class="LiniBisnis section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Lini Bisnis</strong></h2>
          <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
          		<?php 
                  foreach($linibisnis as $u){ 
                  ?>
                    <p><?php echo $u->LiniBisnis ?></p>
                    
                  <?php } ?> 
          </div>
          <div class="col-md-2"></div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->



    <section id="VisiMisi" class="VisiMisi">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Visi Misi</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <center>
                <img src="assets/img/visi.png" width="50%">
            </center>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <?php 
                  foreach($visimisi as $u){ 
                  ?>
                    <p><?php echo $u->Visi ?></p>
            <!-- <p>
              Menjadi Perusahaan IT Yang Profesional dan Inovatif dalam Memberikan Solusi Terbaik Bagi Pemanfaatan Teknologi Informasi.
            </p> -->
          </div>
        </div>
          <br>
          <br>
            <hr>
          <br>
          <br>
        <div class="row content">
          
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <ul>
              <li><!-- <i class="ri-check-double-line"></i>  --><?php echo $u->Misi1 ?></li>
              <li><!-- <i class="ri-check-double-line"></i>  --><?php echo $u->Misi2 ?></li>
              <li><!-- <i class="ri-check-double-line"></i>  --><?php echo $u->Misi3 ?></li>
              <li><!-- <i class="ri-check-double-line"></i>  --><?php echo $u->Misi4 ?></li>
              
            </ul>
            <?php } ?> 
          </div>
          <div class="col-lg-6" data-aos="fade-right">
            <center>
                <img src="assets/img/misi.png" width="50%">
            </center>
          </div>
        </div>

      </div>
    </section>




    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Product</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-Android">Android</li>
              <li data-filter=".filter-Destop">Destop</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-Android">
            <img src="assets/img/portfolio/andro1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Android 1</h4>
              <p>App Screen Capture</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Android 1"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Android">
            <img src="assets/img/portfolio/andro2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Android 2</h4>
              <p>App Online Shop</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Android 2"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Destop">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Destop 2</h4>
              <p>Destop</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Destop 2"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Android">
            <img src="assets/img/portfolio/andro3.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Android 3</h4>
              <p>App Penjualan Sepatu</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Android 3"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Destop">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Destop 1</h4>
              <p>Destop</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Destop 1"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Destop">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Destop 3</h4>
              <p>Destop</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Destop 3"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Clients</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <center>
              <h3>Alamat</h3>
              <hr>
              <p>
                Jl. Pasir Kaliki No. 25-27 <br>
                Paskal Hypersquare Blok C 25,<br>
                Kebon Jeruk, Andir, Kota Bandung 40181 <br><br>
              </p>
            </center>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <center>
            <h3>Contact</h3>
            <hr>
              <strong>Phone:</strong> +62 858 6082 8208<br>
              <strong>Email:</strong> pranata.teknologi@gmail.com <br>
            </center>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h3>Sosial Media</h3>
            <hr>
            <div class="sosial">
            <div class="row">
              <div class="col-md-2">
                <ul>
                  <li><a href="#" class="twitter"><i class="bx bxl-twitter"></i></a></li>
                  <li><a href="#" class="facebook"><i class="bx bxl-facebook"></i></a></li>
                  
                </ul>
              </div>
              <div class="col-md-2">
                <ul>
                  <center>
                  <li><a href="#" class="instagram"><i class="bx bxl-instagram"></i></a></li>
                  <li><a href="#" class="google-plus"><i class="bx bxl-skype"></i></a></li>
                  <li><a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a></li>
                </center>
                </ul>
              </div>
            </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Pt. Pranata Aditama Teknologi</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>