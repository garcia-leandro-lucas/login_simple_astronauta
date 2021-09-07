<?php

  $server = 'localhost';
  $user_name = 'root';
  $password = '';
  $data_base = 'login_data_base';

  try {

    $conection = new PDO("mysql:host=$server; dbname=$data_base;" , $user_name, $password);

  } catch ( PDOException $error ) {

    die('Connected failed: '. $error -> getMessage());

  }

 ?>
