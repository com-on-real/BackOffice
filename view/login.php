<?php

$title = 'Connection';

ob_start();
?>

 <!-- /.login-logo -->
  <div class="login-box-body">

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Connection</button>
        </div>
    </form>

    <div class="social-auth-links text-center">
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>Avec Google</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">Mot de passe oublié</a><br>
    <a href="register.html" class="text-center">Se creer un compte</a>

  </div>
  <!-- /.login-box-body -->
<?php

$content = ob_get_clean(); 