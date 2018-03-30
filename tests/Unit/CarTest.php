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
   /* public function testInsertCar()
    {

        $car = new car();

        $car->make = 'toyota';
        $car->model = 'corolla';
        $car->year ='2017';

        $this->assertTrue($car->save());

    }*/

    public function testUpdateCar()
    {

        $car1 = car::inRandomOrder()->first();


        $car1->year = 2000;


        $this->assertTrue($car1->save());
    }

    public function testDeleteCar()
    {

        $car1 = car::inRandomOrder()->first();


        $this->assertTrue($car1->delete());
    }

    /*public function testCountCarSeed()
    {

        $car = factory(car::class)->create();
        $carCount = $car->count();
        //dd($carCount);
        $this->assertTrue($carCount=50);
    }*/

    public function testCarYearType()
    {

        $car = car::inRandomOrder()->first();

        $this->assertInternalType('integer', $car->year);
    }


}
