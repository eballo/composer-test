<?php

class CalculatorException extends Exception { }
/**
 * Calculator class
 */
class Calculator {
    
    public function addition($x, $y){
        if (!is_numeric($x) || !is_numeric($y)) {
            throw new CalculatorException('Only Numbers are allowed.');
        }
        return $x + $y;
    }
    
    public function substraction($x, $y){
        if (!is_numeric($x) || !is_numeric($y)) {
            throw new CalculatorException('Only Numbers are allowed.');
        }
        return $x - $y;
    }
    
    public function multiplication($x, $y){
        if (!is_numeric($x) || !is_numeric($y)) {
            throw new CalculatorException('Only Numbers are allowed.');
        }
        return $x * $y;
    }
    
    public function division($x, $y){
        
        if (!is_numeric($x) || !is_numeric($y)) {
            throw new CalculatorException('Only Numbers are allowedgit .');
        }else
        {
            if ($y == 0) {
                throw new CalculatorException('No puedes dividir entre cero');
            }
        }
        
        return $x / $y;
    }
}