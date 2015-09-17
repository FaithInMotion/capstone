<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class Story_Characters extends BaseController
{
    public function list_character ($character_id = null)
    {

        $data = array();

        /*
         * Retrieve all scenery associated with this story
         */
        $character = Characters::where('story_id', '=', $character_id)->get();

        /*
         * Store it in $data then move to the model
         */
        $data['Character'] = $character;

        return view('character/list', $data);
    }
    public function create()
    {


        return view('character.create');
    }
}