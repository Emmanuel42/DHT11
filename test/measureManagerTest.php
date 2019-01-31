<?php

namespace DHT11\Model;

use Manu\DHT11\Model\Measure;
use PHPUnit\Framework\TestCase;

use \Manu\DHT11\Model\measureManager as MeasureManager;

class MeasureManagerTest extends TestCase {
    
    private $measureManager;

    protected function setUp()
    {
        parent::setUp();
        
        $this->measureManager = new measureManager();
    }

    protected function tearDown()
    {
        $this->measureManager = null;
        
        parent::tearDown();
    }
    
   // public function test{
   
    public function testCreateMeasure() {
        
        $measure = new Measure();
        
        $measure->temperature = "35";
        
        $measure->humidity = "40";
        
        $id = $this->measureManager->createMeasure($measure);
        
        $measures = $this->measureManager->getAllMeasures();
        
        $this->assertEquals(5, count($measures));
        
    }

}

