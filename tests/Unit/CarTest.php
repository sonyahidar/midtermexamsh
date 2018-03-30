<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {

        $car = new car();

        $car->make = 'toyota';
        $car->model = 'corolla';
        $car->year ='2017';

        $this->assertTrue($car->save());

    }
}
