<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/Admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('/Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/Admin/dist/css/adminlte.min.css') }}">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ url('/') }}" class="h1"><b>Pengadaan</b>App</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan masuk sebagai suplier</p>

      <form action="{{ url('/loginSuplier') }}" method="post">

        {{ csrf_field() }}

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="container" style="position:relative;">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>

      <div style="position:relative; margin-top:25px;">
        <a href="{{ url('/register') }}" type="submit" class="btn btn-primary btn-block">Daftar</a>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


<!-- jQuery -->
<script src="{{ asset('/Admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/Admin/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
