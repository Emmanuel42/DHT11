<?php

  require_once 'config.php';

  try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  }
  catch (PDOException $pe){
    print " Erreur : " . $pe->getMessage() . "<br/>";
    die();
  }

