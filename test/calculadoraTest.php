<?php

use PHPUnit\Framework\TestCase;
include './src/Calculadora.php';

class calculadoraTest extends TestCase {

    public function testSuma() {
       
        $objeto = new Calculadora(100, 22);
        $this->assertEquals(122, $objeto->suma());

    }

    public function testResta() {
       
        $objeto = new Calculadora(100, 22);
        $this->assertEquals(78, $objeto->resta());

    }

    
}



?>