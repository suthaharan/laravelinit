<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5 Root page redirect');
    }

    /**
     * A basic functional test to test login.
     *
     * @return void
     */
    public function test_login_form()
    {
        $this->visit('/auth/login')
            ->submitForm('Log in', ['email' => 'sutha@gmail.com', 'password' => '123456'])
            ->see('Welcome!')
            ->onPage('dashboard');
    }

}
