<?php

namespace Tests\Abstraccion;

use PHPUnit\Framework\TestCase;
use App\Abstraccion\Car;



class CarTest extends TestCase {

	public function test_A_car_have_4_wheels() 
	{
		//GIVEN - ESCENARIO
		$myCar = new Car();
		
		// WHEN - ACCIÓN
		$myCar->wheels = 4;
		
		//THEN - RESULT ASSERT
		$result = $myCar->wheels;
		$this->assertEquals(4, $result);
	}

	public function test_A_car_color_is_red() 
	{
		//GIVEN - ESCENARIO
		$myCar = new Car();
		
		// WHEN - ACCIÓN
		$myCar->color = "red";
		
		//THEN - RESULT ASSERT
		$result = $myCar->color;
		$this->assertEquals("red", $result);
	}

	public function test_A_car_initial_velocity_is_0() 
	{
		//GIVEN - ESCENARIO
		$myCar = new Car();
		
		// WHEN - ACCIÓN
		//$myCar->velocit = "red";
		
		//THEN - RESULT ASSERT
		$result = $myCar->velocity;
		$this->assertEquals(0, $result);
	}

	public function test_A_car_accelerate_as_velocityIncrement() 
	{
		//GIVEN - ESCENARIO
		$myCar = new Car();
		
		// WHEN - ACCIÓN
		$myCar->accelerate(20);
		
		//THEN - RESULT ASSERT
		$result = $myCar->velocity;
		$this->assertEquals(20, $result);
	}
}


