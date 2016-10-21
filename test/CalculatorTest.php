<?php

use PHPUnit\Framework\TestCase;

/*
 * Test Class for Calculator
 */
class CalculatorTest extends TestCase {
    
    private $calculator = null;
    
    /*
     * Setup Test 
     */
    public function setUp(){
        $this->calculator = new Calculator();
    }
    
    /*
     * Tear down
     */
    public function tearDown(){
        $this->calculator = null;
    }
    
    /* Test Additions */
    
    public function testAdditionPositive(){
                
        $returnValue = $this->calculator->addition(2,2);
        
        $this->assertEquals($returnValue,4);
    }
    
    public function testAdditionNegative(){
        
        $returnValue = $this->calculator->addition(2,2);
        
        $this->assertNotEquals($returnValue,5);
    }
    
    /* Test substraction */
    
    public function testSubstractionPositive(){
                
        $returnValue = $this->calculator->substraction(2,2);
        
        $this->assertEquals($returnValue,0);
    }
    
    public function testSubstractionNegative(){
        
        $returnValue = $this->calculator->substraction(2,2);
        
        $this->assertNotEquals($returnValue,5);
    }
    
    /* Test multiplication */
    
    public function testMultiplicationPositive(){
                
        $returnValue = $this->calculator->multiplication(2,2);
        
        $this->assertEquals($returnValue,4);
    }
    
    public function testMultiplicationNegative(){
        
        $returnValue = $this->calculator->multiplication(2,2);
        
        $this->assertNotEquals($returnValue,5);
    }
    
    /* Test division */
    
    public function testDivisionPositive(){
                
        $returnValue = $this->calculator->division(2,2);
        
        $this->assertEquals($returnValue,1);
    }
    
    public function testDivisionNegative(){
        
        $returnValue = $this->calculator->division(2,2);
        
        $this->assertNotEquals($returnValue,5);
    }
    
}