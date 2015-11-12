<?php
/**
 * Created by PhpStorm.
 * User: JaQuise
 * Date: 11/11/2015
 * Time: 7:33 PM
 */

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
    }


}