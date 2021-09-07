<?php

  if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ){
    $records = $conection -> prepare( 'SELECT id, email, password FROM users WHERE email = :email' );
    $records -> bindParam( ':email', $_POST['email'] );
    $records -> execute();
    $results = $records -> fetch( PDO::FETCH_ASSOC );

    $message = '';

    if ( (count($results ) > 0) && (password_verify( $_POST['password'], $results['password'] )) ) {
      $_SESSION['user_id'] = $results['id'];
      header('Location: /Login');
    }else{
      $message = '¡Estas credenciales no son correctas!';
    }
  }

 ?>
