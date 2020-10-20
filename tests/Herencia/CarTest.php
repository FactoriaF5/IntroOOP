<?php

namespace Tests\Herencia;

use PHPUnit\Framework\TestCase;
use App\Herencia\Car;



class CarTest extends TestCase {

	public function test_D_car_have_4_wheels() 
	{
		$myCar = new Car();
		$result = $myCar->getWheels();

		$this->assertEquals(4, $result);
	}

}


