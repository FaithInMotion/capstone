<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthControllerTest extends TestCase
{
    /** @test */
    public function user_registration()
    {
        $this->visit('auth/register.blade');
        $this->type('JaQuise', 'name');
        $this->type('ajbrice@coastal.edu', 'email');
        $this->type('antonio12', 'password');
        $this->type('antonio12', 'confirmation_password');
        $this->press('submit');
        $this->seePageIs('character/create');
    }

    public function user_login()
    {
        $this->visit('auth/login.blade');
        $this->type('ajbrice@coastal.edu', 'email');
        $this->type('antonio12', 'password');
        $this->check('remember');
        $this->press('submit');
        $this->seePageIs('character/create');
        

    }

}