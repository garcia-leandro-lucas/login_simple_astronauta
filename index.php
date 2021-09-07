<?php
  session_start();
  require 'date_base.php';
  require 'parts/comprobar_usuario.php';
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
</head>

<body> <!-- onload="centrarDiv()" onresize="centrarDiv()" id="central" -->
    <div class="container div-content">
        <?php if(!empty($users)): ?>
        <br />
        <h1>¡Bienvenid@! : )</h1> <br />
        <?php require 'parts/header_ingreso.php' ?>
        <h2><?= $users['email'] ?></h2>
        <br />
        <span>Tu has ingresado correctamente correctamente</span>
        <br />
        <a href="logout.php">Logout</a>
        <?php else: ?>

      <section class="inicio" id="centrar">
        <div>
          <?php require 'parts/header.php' ?>
          <h1>Por favor, <br />
            Registrate o inicia sesión</h1>

          <p><strong><a href="login.php">Login</a></strong> o <strong><a href="sign_up.php">Sign_up</a></strong></p>
        </div>
      </section>

        <?php endif; ?>
    </div>
    
    <!-- scripts -->
    <script src="asset/js/javascript.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <!-- Fin scripts -->
</body>

</html>
