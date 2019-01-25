<?php

namespace Manu\DHT11\Model;

require 'config.php';

class Manager {
    
    private $host;
    private $dbname;
    private $user;
    private $password;
    
    function __construct(){
        
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
        
    }
    
    protected function dbConnect() {
        
        return new \PDO('mysql:host=$host;dbname=$dbname;charset=utf8', '$user', '$password');
    }
}


