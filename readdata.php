<?php

        require_once 'connectDb.php';

        try {
                $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                
                $sql = 'SELECT datetime, temperature, humidity FROM dht11 ORDER BY datetime';
             
                $q = $db->query($sql);
                $q->setFetchMode(PDO::FETCH_ASSOC);

            }

             catch (PDOException $pe) {
                die("Could not connect to the database $dbname :" . $pe->getMessage());
            }


