<?php
namespace App\Http\Controllers;

use App\Models\Scenery;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class Story_Scenery extends BaseController
{
    public function list_scenery($story_id = null)
    {
        /*
         * TODO: Need user validation - don't show page to anyone but author/contributors
         */

        /*
         * TODO: Make sure the requested story even exists!
         * Need a model first...
         */

        /*
         * Setup our data which we will pass to the view
         * The view can then use it to display what we hand it
         */
        $data = array();

        /*
         * Retrieve all scenery associated with this story
         */
        $scenery = Scenery::where('story_id', '=', $story_id)->get();

        /*
         * Store it in $data then move to the model
         */
        $data['scenery'] = $scenery;

        return view('scenery/list', $data);
    }

    public function create()
    {
        /*
         * TODO: Need the story id in order to redirect back to the scenery listing
         */
        $data['story_id'] = 1;

        return view('scenery.create', $data);
    }

    public function store(Request $request, $story_id)
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
}