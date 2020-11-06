<?php

namespace App\Polimorfismo;

class Student
{
    public string $mesage;
    private IRepository $repository;

    public function __construct(IRepository $repository)
    {
        $this->repository = $repository;
    }

    public function save()
    {
        return $this->repository->save();
    }
}
