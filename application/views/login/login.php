<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Control Sanitario</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/dist/css/AdminLTE.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/iCheck/square/blue.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0);"><b>Control </b>Sanitario</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <img src="<?php echo base_url('assets/img/logogadma.jpg');?>"  width="150" heigth="150" class="center-block img-responsive">
    
    <?php echo $this->session->flashdata('msg');?>
    
    <form action="<?php echo base_url('login/auth');?>" method="post" autocomplete="off">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" id="usuario" name="usuario" required="required">
        <span class="fa  fa-user fa-lg form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Clave" id="clave" name="clave" required="required">
        <span class="fa  fa-lock fa-lg form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button class="btn btn-primary btn-block btn-flat" type="submit">Iniciar Sesión</button>
        </div>
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- Registro Comerciante-</p>

        <a href="<?php echo base_url('registro'); ?>" class="btn btn-danger btn-block btn-flat">Registrarme</a>
    </div>

    <a href="<?php echo base_url('login/recuperarClave'); ?>">¿Olvidaste tu contraseña?</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/AdminLTE/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

</body>
</html>
