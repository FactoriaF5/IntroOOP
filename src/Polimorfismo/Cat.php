<?php

namespace App\Polimorfismo;

class Cat extends Animal implements IComunicate
{
    public function __construct($name = '')
    {
        $this->legs = 4;
        $this->name = $name;
    }

    public function comunicate(): string
    {
        return "Miaaaaauuu";
    }
}
