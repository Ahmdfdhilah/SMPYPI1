<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-color: #001f3f;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/lte/index2.html" class="h1" style="color: #1a6cf0;"><b>Login</b></a>
    </div>
    <div class="card-body">
      <!-- <p class="login-box-msg" style="color:#1a6cf0 ;">Sign in to start your session</p> -->

      @error('loginError')
      <div class="alert alert-danger">
        <strong>Error</strong>
        <p>{{ $message }}</p>
      </div>
      @enderror

      <form method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text" style="background-color: #1a6cf0;">
              <span class="fas fa-envelope" style="color: white;"></span>
            </div>
          </div>
        </div>
        @error('email')
        <small style="color:red" >{{ $message}}</small>
        @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text" style="background-color: #1a6cf0;">
              <span class="fas fa-lock" style="color: white;"></span>
            </div>
          </div>
        </div>
        @error('password')
        <small style="color:red" >{{ $message}}</small>
        @enderror
        <div class="row">
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-block" style="background-color: #1a6cf0; color : white">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/lte/dist/js/adminlte.min.js"></script>
</body>
</html>
