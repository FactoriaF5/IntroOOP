<?php

namespace Tests\Herencia;

use PHPUnit\Framework\TestCase;
use App\Herencia\Moto;



class MotoTest extends TestCase {

	public function test_moto_have_2_wheels() 
	{
		$myMoto = new Moto();

		$result = $myMoto->getWheels();
		$this->assertEquals(2, $result);
	}

	public function test_moto_can_accelerate() 
	{
		$myMoto = new Moto();
		
		$myMoto->accelerate(40);

		$result = $myMoto->velocity;
		$this->assertEquals(40, $result);
	}

}


