<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function ckeck_if_root_site_is_correct()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('ícaro jobs');
        });
    }

        /** @test */
        public function check_is_login_function_is_working()
    {
        $this->browse(function (Browser $browser){
           $browser->visit('/admin/login')
                ->type('email','nielferas@gmail.com')
                ->type('password','12345678')
                ->press('Login')
                ->assertPathIs('/admin');
        });
    }
}
