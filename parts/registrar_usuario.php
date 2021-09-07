<?php

  $message_exitoso = '';
  $message_error = '';
  $message_error_contrasenia = '';
  
  if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) && (!empty($_POST['password_confirmacion'])) ) {
    if (($_POST['password']) == ($_POST['password_confirmacion'])) {
      $sql = "INSERT INTO users ( email, password, password_confirmacion ) VALUES ( :email, :password, :password_confirmacion)";
      $stmt = $conection -> prepare($sql);
      $stmt -> bindParam( ':email', $_POST['email'] );
      $password = password_hash( $_POST['password'], PASSWORD_BCRYPT );
      $stmt -> bindParam( ':password', $password );
      $password_confirmacion = password_hash( $_POST['password_confirmacion'], PASSWORD_BCRYPT );
      $stmt -> bindParam( ':password_confirmacion', $password_confirmacion );
      
      if ( $stmt -> execute() ) {
        $message_exitoso = 'El usuario ha sido creado correctamente';
      }else{
        $message_error = 'Disculpas, ha sucedido un error inesperado';
      }
      
    }else{
        $message_error_contrasenia = 'Por favor, corrobara las contraseñas sean iguales';
    }

  }

 ?>
