<?php
include ('../app/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=APP_NAME;?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=APP_URL;?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=APP_URL;?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=APP_URL;?>/public/dist/css/adminlte.min.css">
    <!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition login-page"
      style="background-image: url('<?=APP_URL;?>/public/dist/img/fondoinsti.jpg');
             background-size: cover;
             background-position: center;
             background-repeat: no-repeat;">
      <style>
            .btn-login {
            background-color: #006549;
            color: white;
            transition: all 0.3s ease;}

            .btn-login:hover {
                background-color: #00825D;
                color: white;
                box-shadow: 0px 4px 12px rgba(0,0,0,0.3);
                transform: translateY(-2px);}
</style>         
<div class="login-box">
    <center>
        <br>
        <img src="<?=APP_URL;?>/public/dist/img/logo_institucion.png"
             style="max-width:270px; height:auto; filter: drop-shadow(0px 5px 6px rgba(0,0,0,0.3));" alt=""><br>
    </center>
    <div class="login-logo">
        <h3 style="color:white;
                    font-weight:700;
                    text-align:center;
                    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                    INSTITUCIÓN EDUCATIVA <br>"LA MISIÓN DE JESÚS"
        </h3>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Inicio de sesión</p>
            <hr>

            <form action="controller_login.php" method="post">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="input-group mb-3">
                    <button class="btn btn-block btn-login" type="submit">
                    Ingresar
                    </button>
                </div>
            </form>


            <?php
            session_start();
            if(isset($_SESSION['mensaje'])){
                $mensaje = $_SESSION['mensaje'];
                ?>
                <script>
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "<?=$mensaje;?>",
                        showConfirmButton: false,
                        timer: 4000
                    });
                </script>
            <?php
                session_destroy();
            }
            ?>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=APP_URL;?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=APP_URL;?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=APP_URL;?>/public/dist/js/adminlte.min.js"></script>
</body>
</html>
