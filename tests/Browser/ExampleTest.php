<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Chrome;
use App\User;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    /*@test*/
//    public function testLinkReservation() {
//        $this->browse(function (Browser $browser) {
//            $browser->visit('/')
//                ->clickLink('RESERVE A TABLE')
//                ->assertPathIs('/customer/reservation');
//        });
//
//    }


        /*@test*/
//    public function testUserFeedback()
//    {
//        $this->browse(function (Browser $browser) {
//            $this->visit('/customer/feedback')
//                ->type('Taylor', 'name')
//                ->clickLink('Submit')
//                ->assertPathIs('/');
//        });
//    }

    use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testUserLogin()
    {
        $user = factory(User::class)->create([
            'email' => 'taylor@laravel.com',
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'secret')
                ->press('Login')
                ->assertPathIs('/');
        });
    }


}
