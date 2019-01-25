<?php

namespace DHT11\Model;

require '../Model/dataManager.php';

use PHPUnit\Framework\TestCase;

use \Manu\DHT11\Model\dataManager as dataManager;

class dataManagerTest extends TestCase {
    
    private $dataManager;

    protected function setUp()
    {
        parent::setUp();
        
        $this->dataManager = new dataManager();
    }

    protected function tearDown()
    {
        $this->dataManager = null;
        
        parent::tearDown();
    }
    
    public function test

}

