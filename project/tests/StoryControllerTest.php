<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StoryControllerTest extends TestCase
{
    /** @test */
    public function create_story_form()
    {
        $this->visit('story/create');
        $this->type('My Title', 'title');
        $this->type('rap', 'genre');
        $this->type('a story about a woman', 'synopsis');
        $this->press('create');
    }


}