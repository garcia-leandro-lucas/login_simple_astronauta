<?php

session_start();

if (isset($_SESSION['users_id'])) {
  header('Location: /Login');
}

require 'date_base.php';
require 'parts/validar_credenciales.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- font-family: 'Roboto', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <!-- font-family: 'Roboto Condensed', sans-serif; -->
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/javascript.js"></script>
</head>

<body>
    <div class="container div-content">

        <?php if( !empty($message) ): ?>
          <div class="mensaje_de_envio_error">
            <div class="row">
              <div class="col">
                <i class="fas fa-times"> <strong class="message"><?= $message ?></strong></i>
            </div>
            </div>
          </div>
        <?php endif; ?>
        <section class="inicio" id="centrar">
          <?php require 'parts/header.php' ?>
          <h1>Login</h1>

          <form class="" action="login.php" method="POST">
            <div class="row">
              <div class="col">
                  <div class="input_email">
                    <label for="exampleInputEmail1" class="form-label">Ingrese su e-mail</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" autocomplete="off" required>
                    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                  </div>

                  <div class="input_contrasenia">
                    <label for="exampleInputPassword1" class="form-label">Ingrese su contraseña</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" pattern="[A-Za-z0-9!?-]{6,12}" autocomplete="off" required>
                  </div>
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                  </div>
              </div>
            </div>
        </form>

        <div class="opcion_de_registro">
          <span>¿No tienes un usuario? <strong><a href="sign_up.php"> Sign Up</a></strong></span>
        </div>

      </section>

    </div>
</body>

</html>
