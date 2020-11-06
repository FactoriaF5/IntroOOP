<?php

namespace App\Polimorfismo;

class Database implements IRepository
{

    public function save(): string
    {
        return "guardo en base de datos";
    }
}
