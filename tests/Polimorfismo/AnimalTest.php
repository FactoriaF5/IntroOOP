<?php

namespace Tests\Polimorfismo;

use App\Polimorfismo\Dog;
use App\Polimorfismo\Cat;
use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{

    public function test_dog_legs()
    {
        $lassie = new Dog();

        $this->assertEquals(4, $lassie->legs);
    }

    public function test_dog_name()
    {
        $Lassie = new Dog("Lassie");

        $this->assertEquals("Lassie", $Lassie->name);
    }

    public function test_cat_name()
    {
        $Lassie = new Cat("Mixi");

        $this->assertEquals("Mixi", $Lassie->name);
    }

    public function test_cat_legs()
    {
        $lassie = new Cat();

        $this->assertEquals(4, $lassie->legs);
    }

    public function test_cat_cominicate_miau()
    {
        $Mixii = new Cat();

        $this->assertEquals("Miaaaaauuu", $Mixii->comunicate());
    }

    public function test_dog_cominicate_guau()
    {
        $Mixii = new Dog();

        $this->assertEquals("Guau", $Mixii->comunicate());
    }
}
