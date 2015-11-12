<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CharacterControllerTest extends TestCase
{
    /** @test
    public function create_character_form()
    {
        $this->visit('character/create');
        $this->type('a big guy', 'description');
        $this->type('21', 'age');
        $this->type('5"7', 'height');
        $this->type('135', 'weight');
        $this->press('submit');
    }

}
*/