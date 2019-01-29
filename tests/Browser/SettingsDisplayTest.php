<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SettingsDisplayTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testSettingsMenuDisplay()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/settings')
            ->assertSee("Departments")
            ->assertSee("Ranks")
            ->assertSee("Levels")
            ->assertSee("Employee Ranking")
            ->assertSee("Evaluator")
            ->assertSee("Years of experience points")
            ->assertSee("Certification/ training points")
            ->assertSee("Examination score points")
            ->assertSee("Survey - Likert scale")
            ->assertSee("Scheduled evaluation reminder")
            ->assertSee("Allow employee to export evaluation");    
        });
    }
}
