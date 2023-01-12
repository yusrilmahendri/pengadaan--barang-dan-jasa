<!DOCTYPE html>
<html lang="en">

<head>
  <!-- file css -->
  @include('home.partials.css')
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Pengajuan</a></h1>
         <!-- navbar -->
         @include('home.partials.menu')
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero (HEAD) Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="height:0px;">
  </section><!-- End Hero -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Registrasi</h2>
          <p>Silahkan Daftarkan Usaha Anda disini.</p>
        </div>
        <div class="row" style="">

          <!-- notifikasi if gagal registrasi -->
          @if(\Session::has('berhasil'))
          <div class="alert alert-success" role="alert">
              {{ \Session::get('berhasil') }}
            </div>
          @endif

          @if(\Session::has('gagal'))
            <div class="alert alert-danger" role="alert">
              {{ \Session::get('gagal') }}
            </div>
          @endif

          <!-- notifikasi if true or flase in form registrasi -->

          @if(count($errors->all()) > 0)
            <div class="alert alert-danger" role="alert">
              <ul>
                @foreach($errors as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form class="row g-3" action="{{ url('/simpanRegister') }}" method="post">

            {{ csrf_field() }}

            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Nama Usaha</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" name="alamat" rows="10" required></textarea>
            </div>

            <div class="row" style="margin-top:50px;">
              <div class="form-group col-md-6">
                <label for="no_npwp">No Wpwp</label>
                <input type="text" name="no_npwp" class="form-control" id="name" required>
              </div>

              <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="email" required>
              </div>

              <div class="text-center" style="margin-top:50px;">
                <button type="submit" class="btn btn-primary">Daftarkan</button>
              </div>
          </form>
          </div>
      </div>
    </section><!-- End Contact Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Yusril Mahendri</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Created by <a href="yusrilahendri.yusril@gmail.com">Yusril Mahendri</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i></a>

  <!-- scripts js  -->
  @include('home.partials.scripts')
  </body>
</html>
