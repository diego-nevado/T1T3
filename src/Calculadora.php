<?php

class Calculadora
{
    public $valor1; 
    public $valor2;

    public function __construct($a1,$a2)
    {
        $this->valor1=$a1;
        $this->valor2=$a2;
    }

    public function suma(){

        return $this->valor1+$this->valor2;
    }

    public function resta(){

        return $this->valor1-$this->valor2;
    }
}
?>
