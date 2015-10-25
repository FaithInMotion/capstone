<?php

namespace App\Http\Controllers;

use App\StoryCharacter;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CharacterRequest;
use Illuminate\Support\Facades\App;

class StoryCharacters extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_character($character_id = null)
    {
        $data = array();

        /*
         * Retrieve all the Characters associated with this story
         */
        $character = Characters::where('story_id', '=', $character_id)->get();

        /*
         * Store it in $data then move to the model
         */
        $data['Character'] = $character;

        return view('character/list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['story_id'] = 1;
        return view('character.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CharacterRequest $request)
    {
        StoryCharacter::create($request->all());



        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = StoryCharacter::where(compact('id'))->first();
        return view('character.show' , compact('character'));
    }

    public function addPhoto($character_id, Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg,png'
        ]);

        /*
         * Create the photo object that will be stored
         */
        $photo = Character_Photo::fromForm($request->file('photo'), $character_id);

        /*
         * Store the link to the database
         */
        StoryCharacter::foundAt($character_id)->addPhoto($photo);

        return "Done";
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
