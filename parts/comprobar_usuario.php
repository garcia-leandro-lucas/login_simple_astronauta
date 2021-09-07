<?php

  if (isset($_SESSION['user_id'])) {
    $records = $conection -> prepare( 'SELECT id, email, password FROM users WHERE id = :id' );
    $records -> bindParam( ':id', $_SESSION['user_id'] );
    $records -> execute();
    $results = $records -> fetch( PDO::FETCH_ASSOC );

    $users = NULL;

    if ( count( $results ) > 0 ) {
      $users = $results;
    }

  }

 ?>
