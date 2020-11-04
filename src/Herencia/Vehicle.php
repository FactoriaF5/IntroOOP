<?php

namespace App\Herencia;

abstract class Vehicle
{

    protected Int $wheels;
    public String $color;
    protected Int $velocity = 0;

    public function accelerate(Int $velocityIncrement)
    {
        $this->velocity = $this->velocity + $velocityIncrement;
    }

    public function getWheels()
    {
        return $this->wheels;
    }

    public function getVelocity()
    {
        return $this->velocity;
    }
}
