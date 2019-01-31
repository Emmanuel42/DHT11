<?php

namespace Manu\DHT11\Model;

require '../inc/config.php';

class DbConnection {
    
    private $host;
    private $dbname;
    private $user;
    private $password;
    
    public function __construct($host, $dbname, $user, $password){
        
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
        
    }
    
    protected function dbConnection($host, $dbname, $user, $password) {
        
        return new \PDO('mysql:host=$host;dbname=$dbname;charset=utf8', '$user', '$password');
    }
}


