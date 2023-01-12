<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.partials.css')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <meta content="" name="description">
      <h1 class="logo me-auto"><a href="{{ url('/')}}">Pengadaan</a></h1>
      @include('home.partials.menu')
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
        @include('home.partials.head')
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
          @include('home.partials.client')
      </div>
    </section><!-- End Cliens Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      @include('home.partials.services')
    </section><!-- End Services Section -->

    <section id="skills" class="skills">
      @include('home.partials.portofolio')
    </section><!-- End Skills Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Yusril Mahendri</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">Yusril Mahendri</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('home.partials.scripts')

</body>

</html>
