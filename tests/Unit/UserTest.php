<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /* public function testInsertUser()
     {

         $user = new User();

         $user->name = 'Sonya';
         $user->email = 'sonya@gmail.com';
         $user->password ='password342';

         $this->assertTrue($user->save());

     }*/

    public function testUpdateUser()
    {

        $user1 = User::inRandomOrder()->first();


        $user1->name = 'Steve Smith';


        $this->assertTrue($user1->save());
    }


}
