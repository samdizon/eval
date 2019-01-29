<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegistrationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testUserCanRegisterSuccessfully()
    {
       
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->value('#first-name','Erich')
                    ->value('#last-name','Ankunding')
                    ->value('#username','xjacobs')
                    ->value('#email','david40@example.org')
                    ->value('#organization','Schuppe-Kessler')
                    ->value('#password','adminadmin')
                    ->value('#password-confirm','adminadmin')
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
