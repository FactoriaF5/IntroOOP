<?php

namespace App\Polimorfismo;

class Api implements IRepository
{

    public function save(): string
    {
        return "guardo en api";
    }
}
