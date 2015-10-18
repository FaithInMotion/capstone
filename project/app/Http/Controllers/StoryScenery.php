<?php

namespace App\Http\Controllers;

use App\Scenery;
use App\Scenery_Photo;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SceneryRequest;
use Illuminate\Support\Facades\App;

class StoryScenery extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['story_id'] = 1;

        return view('scenery.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(SceneryRequest $request, $story_id)
    public function store(SceneryRequest $request)
    {
        /*
         * Persist the data
         */
        Scenery::create($request->all());

        /*
         * Flash message
         */

        /*
         * Redirect to landing page
         */
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($story_id, $id)
    public function show($id)
    {
        /*
         * Returns the requested scenery as a location
         */
//        $scenery = Scenery::where(compact('story_id', 'id'))->first();
        $location = Scenery::where(compact('id'))->first();

        return view('scenery.show', compact('location'));
    }

    /**
     * Stores the photo(s) given in Dropzone
     */
    public function addPhoto($location_id, Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg,png'
        ]);

        /*
         * Create the photo object that will be stored
         */
        $photo = Scenery_Photo::fromForm($request->file('photo'), $location_id);

        /*
         * Store the link to the database
         */
        Scenery::foundAt($location_id)->addPhoto($photo);

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
