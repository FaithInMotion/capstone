<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SceneryControllerTest extends TestCase
{
    /** @test */
    public function create_scenery_form_user_not_logged_in()
    {
        $this->visit('scenery/create');
        $this->type('JaQuise', 'name');
        $this->type('a dark room', 'description');
        $this->press('send');
    }

}
