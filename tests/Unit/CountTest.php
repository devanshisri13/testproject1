<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\car;

class CountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCount()
    {
        $user = User::All();
        $recordCount = $user->count();
        $this->assertEquals(50, $recordCount);
    }
public function testCountCar()
{
    $car = car::All();
    $carCount = $car->count();
    $this->assertEquals(50, $carCount);
}
}
