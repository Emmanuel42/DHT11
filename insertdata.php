<?php
    require_once 'connectDb.php';

    $req = $db->prepare('INSERT INTO dht11 (temperature, humidity) VALUES (:temperature, :humidity)');

    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];

    $req->execute(array('temperature'=>$temperature,
                        'humidity'=>$humidity
                        ));

    $req->closeCursor();

  
?>
