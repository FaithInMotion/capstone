<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\story;
use App\Http\Requests;
use App\Http\Requests\StoryRequest;
use App\Http\Controllers\Controller;

class stories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list_stories($story_id = null){
        $data = array();
        //Retreive all stores
        $story = stories::where('story_id', '=', $story_id)->get();
        //Store in data and move to model
        $data['story'] = $story;

        return view('story/list', $data);
    }

    public function show($id)
    {
        //Pull data from database where story = id
        $story = Story::where(compact('id'))->first();
        return view('story/show' , compact('story'));
    }

//    public function list_stories($story_id = null)
//    {
//
//        $story = story::table('id')->get();
//
//        return view('story/list', ['id' => $story_id]);
//    }


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
        return view('story/create');
        //creates the story
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoryRequest $request)
    {
        story::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
