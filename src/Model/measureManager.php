<?php

namespace Manu\DHT11\Model;

require '../vendor/autoload.php';

class MeasureManager extends dbConnection {
    
    
    public function createMeasure(Measure $measure) {
        
        $db = $this->dbConnection();
        
        $measure = [];
        
        $req = $db->prepare('INSERT INTO data (temperature, humidity) VALUES (:temperature, :humidity)');
        
        $req->bindParam(":temperature", $measure->temperature);
        
        $req->bindParam(":humidity", $measure->humidity);
        
        $req->execute();    

    }
    
    
    public function getAllMeasures(){
        
        $measures = [];
        
        $db = $this->dbConnection();
        
        $req = $db->query('SELECT id, datetime, temperature, humidity FROM data order by id');
        
        while ($measureRow = $req->fetch()) {
            
            $measure = new Measure();
            
            $measure->id = $measureRow['id'];
            
            $measure->datetime = $measureRow['datetime'];
            
            $measure->temperature = $measureRow['temperature'];
            
            $measure->humidity = $measureRow['humidity'];
            
            array_push($measures, $measure);
        }
        
        return $measures;
        
    }
        
        
     public function getById($id){
            
            $measure = null;
            
            $db = $this->dbConnection();
            
            $req = $db->prepare('SELECT id, datetime, temperature, humidity FROM data where id = :id');
            
            $req->bindParam(":id", $id);
            
            if ($req->execute()) {
            
                if ($measureRow = $req->fetch()) {
                    
                    $measure = new Measure();
                    
                    $measure->id = $measureRow['id'];
                    
                    $measure->datetime = $measureRow['datetime'];
                    
                    $measure->temperature = $measureRow['temperature'];
                    
                    $measure->humidity = $measureRow['humidity'];
                }
            }
            
            return $measure;
            
        }
       
        
     public function getLastMeasure(){
            
            $measure = null;
         
            $db = $this->dbConnection();
            
            $req = $db->prepare('SELECT id, datetime, temperature, humidity FROM data ORDER BY id DESC LIMIT 1');
            
            $req->execute();
                
            if ($measureRow = $req->fetch()){
                    
                    $measure = new Measure();
                    
                    $measure->id = $measureRow['id'];
                    
                    $measure->datetime = $measureRow['datetime'];
                    
                    $measure->temperature = $measureRow['temperature'];
                    
                    $measure->humidity = $measureRow['humidity'];
                    
            }
            
            return $measure;
              
        }
    

        public function updateMeasure($measure){
            
            $measure = [];
            
            $db = $this->dbConnection();
            
            $req = $bdd->prepare('UPDATE data SET datetime = :datetime, temperature = :temperature, humidity = :humidity WHERE id = :id');
            
            $req->bindParam(":datetime", $measure->datetime);
            
            $req->bindParam(":temperature", $measure->temperature);
            
            $req->bindParam(":humidity", $measure->humidity);
            
            $req->execute();
            
        }
        
        
        public function deleteMeasure($id) {
            
            $db = $this->dbConnection();
            
            $req = $bdd->prepare('DELETE FROM data where id = :id');
            
            $req->bindParam(":id", $id);
            
            $req->execute();
        }
        
        
            
}