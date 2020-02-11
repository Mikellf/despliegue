<?php

include_once('./src/calculadora.php');

use PHPUnit\Framework\TestCase;

echo "<h1>Calculadora</h1>";

class SaludoTest extends TestCase {

    public function testSumar()
    {

        $calculadora = new Calculadora();
        $this->assertEquals($calculadora->sumar(10, 10), 20);
    }

    
    public function testRestar()
    {

        $calculadora = new Calculadora();
        $this->assertEquals($calculadora->restar(20, 10), 10);
    }
    
}




?>