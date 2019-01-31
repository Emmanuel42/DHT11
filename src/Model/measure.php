<?php

namespace Manu\DHT11\Model;

class Measure {
    
    private $id;
    private $datetime;
    private $temperature;
    private $humidity;
    
    
    public function __construct($datetime, $temperature, $humidity){
        
        $this->datetime = $datetime;
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        
    }
    
    public function getId(){
        
        return $this->id;
    }
    
    public function setId($id):void {
        
        $this->id = $id;
    }
    
    public function getDatetime(){
        
        return $this->datetime;
    }
    
    public function setDatetime($datetime):void {
        
        $this->datetime = $datetime;       
    }
    
    public function getTemperature(){
        
        return $this->temperature;
    }
    
    public function setTemperature($temperature):void {
        
        $this->temperature = $temperature;
    }
    
    public function getHumidity(){
        
        return $this->humidity;
    }
    
    public function setHumidity($humidity):void {
        
        $this->humidity = $humidity;
    }
    
    public function save(){
       
    }
    
}