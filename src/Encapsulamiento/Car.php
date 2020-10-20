<?php
namespace App\Encapsulamiento;

class Car 
{
    private Int $wheels;
    public String $color;
    private Int $velocity;

    public function __construct(String $color) {
        $this->wheels = 4;
        $this->color = $color;
        $this->velocity = 0;
    }

    public function getWheels() {
        return $this->wheels;
    }

    public function accelerate(Int $velocityIncrement) {
        $this->velocity = $this->velocity + $velocityIncrement;
    }
}