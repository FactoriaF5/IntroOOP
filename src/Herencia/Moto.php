<?php
namespace App\Herencia;


class Moto extends Vehicle
{
    public function __construct() {
        $this->wheels = 2;
    } 
}