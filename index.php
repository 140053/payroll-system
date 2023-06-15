<?php require_once(dirname(__FILE__) . '/config.php'); 
if ( isset($_SESSION['Admin_ID']) && $_SESSION['Login_Type'] == 'admin' ) {
    header('location:' . BASE_URL . 'attendance/');
}
if ( isset($_SESSION['Admin_ID']) && $_SESSION['Login_Type'] == 'emp' ) {
    header('location:' . BASE_URL . 'profile/');
} ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login - Payroll</title>
   <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>plugins0/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>plugins0/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist0/css/adminlte.min.css">
    <style>
      .dark-mode input:-webkit-autofill{
        -webkit-text-fill-color: #000;
      }

    </style>
</head>

<body class="login-page dark-mode" style="min-height: 466px;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" role="form" data-toggle="validator" id="login-form">
        <div class="input-group mb-3 has-feedback">
            <input type="text" class="form-control" id="code" name="code" placeholder="Employee Code" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="input-group mb-3 has-feedback">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
          <button type="submit" class="btn btn-success btn-block btn-flat">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
     
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<?php  require_once(dirname(__FILE__) . '/partials/fDlink.php');  ?>

</html>