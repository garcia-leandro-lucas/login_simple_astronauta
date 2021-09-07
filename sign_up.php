<?php require 'parts/mostrar_errores.php' ?>

<?php

  require 'date_base.php';
  require 'parts/registrar_usuario.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sing Up</title>
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

    <div class="container">

        <?php if ( !empty( $message_exitoso ) ): ?>
          <div class="mensaje_de_envio_exitoso">
            <div class="row">
              <div class="col">
                <i class="fas fa-check"> <strong class="message"><?= $message_exitoso ?></strong></i>
            </div>
            </div>
          </div>
        <?php endif; ?>

        <?php if ( !empty( $message_error ) ): ?>
          <div class="mensaje_de_envio_error">
            <div class="row">
              <div class="col">
                <i class="fas fa-times"> <strong class="message"><?= $message_error ?></strong></i>
            </div>
            </div>
          </div>
        <?php endif; ?>
        
        <?php if ( $message_error != $message_error_contrasenia ): ?>
          <div class="mensaje_de_envio_error">
            <div class="row">
              <div class="col">
                <i class="fas fa-times"> <strong class="message"><?= $message_error_contrasenia ?></strong></i>
            </div>
            </div>
          </div>
        <?php endif; ?>

        <section class="inicio" id="centrar">
          <?php require 'parts/header.php' ?>
          <h1>Sign Up</h1>

        <form class="" action="sign_up.php" method="POST">
          <div class="row">
            <div class="col">
                <div class="input_email">
                  <label for="exampleInputEmail1" class="form-label">Ingrese su e-mail</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" autocomplete="off" required>
                  <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>

                <div class="input_contrasenia">
                  <label for="exampleInputPassword1" class="form-label">Ingrese su contraseña</label>
                  <input type="password" name="password" class="form-control" id="password" pattern="[A-Za-z0-9!?-]{8,12}" autocomplete="off" required>
                  <span id = "mensaje_de_validacion"></span>
                </div>
                <div class="lista_de_validaciones">
                  <ul>
                    <li id="mayusculas">2 Mayúsculas</li>
                    <li id="minusculas">2 Letras Minúsculas</li>    
                    <li id="numeros">3 números</li>
                    <li id="cantidad_de_caracteres">Mínimo 8 caracteres</li>
                    <li id="caracter_especial">1 caracter especial</li>
                  </ul>
                </div>
                <div class="input_contrasenia">
                  <label for="exampleInputPassword1" class="form-label">Ingrese nuevamente su Contraseña</label>
                  <input type="password" name="password_confirmacion" class="form-control" id="password_confirmacion" pattern="[A-Za-z0-9!?-]{8,12}" autocomplete="off" required>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
          </div>
      </form>

      <div class="opcion_de_registro">
        <span>¿Ya tienes un usuario? <a href="login.php">Login</a> </span>
      </div>

      </section>

    </div>
  </div>

  <!-- scripts -->
  <script src="asset/js/jquery.js"></script>
  <script src="asset/js/validar_password.js"></script>
  <!-- Fin scripts -->
</body>

</html>
