<?php

namespace Tests\Polimorfismo;

use App\Polimorfismo\Student;
use App\Polimorfismo\Api;
use App\Polimorfismo\Database;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{

    public function test_save_in_database()
    {
        $DB = new Database();

        $student = new Student($DB);


        $this->assertEquals("guardo en base de datos", $student->save());
    }

    public function test_save_in_api()
    {
        $api = new Api();

        $student = new Student($api);


        $this->assertEquals("guardo en api", $student->save());
    }
}
