<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\story;
use App\Story_Photo;
use App\Http\Requests;
use App\Http\Requests\StoryRequest;
use App\Http\Controllers\Controller;

class stories extends Controller
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

    public function list_stories($story_id)
    {
        $data = array();

        //Retreive all stores
        $story = stories::where('story_id', '=', $story_id)->get();

        //Store in data and move to model
        $data['story'] = $story;

        return view('story/list', $data);
    }

    public function show($id)
    {
        $story = story::with('photos')->where(compact('id'))->first();
        //if database is NOT empty redirect continue to Retreive

        if( !empty( $story ) )
        {
            //Pull data from database where story = id
            return view( 'story/show' , compact( 'story' ) );
        }
        //else redirect to create page
        else
        {
            return redirect()->action( 'stories@create' );
        }
    }

    /**
     * Stores the photo(s) given in Dropzone
     */
    public function addPhoto($story_id, Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg,png'
        ]);

        /*
         * Create the photo object that will be stored
         */
        $photo = Story_Photo::fromForm( $request->file( 'photo' ), $story_id );

        /*
         * Store the link to the database
         */
        story::foundAt( $story_id )->addPhoto( $photo );

        return "Done";
    }

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
        return view( 'story/create', $data );
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
        $story = story::create($request->all());

        $id = $story->id;

        return redirect()->route('story', [$id]);
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
