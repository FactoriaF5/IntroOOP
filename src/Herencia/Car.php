<?php
namespace App\Herencia;


class Car extends Vehicle
{
    public function __construct() {
        $this->wheels = 4;
    } 
}