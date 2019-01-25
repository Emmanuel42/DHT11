<?php

namespace Manu\DHT11\Model;

require '../vendor/autoload.php';

require 'Manager.php';

class DataManager extends Manager {
    
    public function setData() {
        
        $req = $db->prepare('INSERT INTO dht11 (temperature, humidity) VALUES (:temperature, :humidity)');
        
        $temperature = $_POST['temperature'];
        $humidity = $_POST['humidity'];
        
        $req->execute(array('temperature'=>$temperature,
                            'humidity'=>$humidity
        ));
        
        $req->closeCursor();
    }
    
    
    public function getData(){
        
        $db = $this->dbConnect();
        
        $req = 'SELECT datetime, temperature, humidity FROM dht11 ORDER BY datetime';
        
        
        
        $req->closeCursor();

        
    }
    
}