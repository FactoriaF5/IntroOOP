<?php
namespace App\Abstraccion;

class Car {

    public Int $wheels = 4;
    public String $color;
    public Int $velocity = 0;

    public function accelerate(Int $velocityIncrement) {
        $this->velocity = $this->velocity + $velocityIncrement;
    }
}