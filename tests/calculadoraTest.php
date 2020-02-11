<?php

include_once('./src/calculadora.php');

use PHPUnit\Framework\TestCase;

class SaludoTest extends TestCase {

    public function testSumar()
    {

        $calculadora = new Calculadora();
        $this->assertEquals($calculadora->sumar(10, 10), 20);
    }
    
}




?>