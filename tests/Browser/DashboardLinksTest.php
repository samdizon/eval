<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DashboardLinksTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertPathIs('/login')
                    ->type('email', 'dizon.sophia@gmail.com')
                    ->type('password','adminadmin')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/dashboard')
                    ->assertSee("Settings")
                    ->assertSee("Evaluation")
                    ->assertSee("Procedure")
                    ->assertSee("Survey")
                    ->assertSee("Team")
                    ->assertSee("Assessment");
        });
    }
}
