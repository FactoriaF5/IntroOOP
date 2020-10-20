<?php

namespace Tests\Encapsulamiento;

use PHPUnit\Framework\TestCase;
use App\Encapsulamiento\Car;



class CarTest extends TestCase {

	public function test_can_choose_car_color() 
	{
		$myCar = new Car("red");
		$result = $myCar->color;

		$this->assertEquals("red", $result);
	}

	public function test_B_initial_car_have_4_wheels() 
	{
		$myCar = new Car("");
		$result = $myCar->getWheels();

		$this->assertEquals(4, $result);
	}

}


