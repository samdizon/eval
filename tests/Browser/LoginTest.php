<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /* @test */
    public function testCreateRandomUserAssertCanLoginSeeDashboard()
    {
        $user = factory(User::class);

        $this->browse(function($browser) use ($user){
            $browser->visit('/login')
                    ->assertPathIs('/login')
                    ->type('email', 'dizon.sophia@gmail.com')
                    ->type('password','adminadmin')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/dashboard')
                    ->assertSee("You are logged in!"); 

        });
    }
}
