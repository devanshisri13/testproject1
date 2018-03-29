<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\car;


class DeleteTest extends TestCase
{

    public function testDelete()
    {

        $user = new User();
        $user->name = 'hermoine';
        $user->email = 'hermoine@gmail.com';
        $user->password = 'harrypotter';
        $user->save();
        $this->assertTrue($user->delete());
    }

    public function testCarYearInteger()
    {
        $car = car::find(10);
        $car_year = (int)$car->year;
        $this->assertInternalType('integer', $car_year);
    }

    public function testCheckCarMake()
    {
        $car=car::find(18);
        $car_make=$car->Make;
        $this->assertContains($car_make,['ford','honda','toyota']);
    }
}