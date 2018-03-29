<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class DeleteCartest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

        public function testDeleteCar()
    {
        $car = new car();
        $car->Make='toyota';
        $car->Model='m';
        $car->year='1922';
        $car->save();
        $this->assertTrue($car->delete());
    }

}
