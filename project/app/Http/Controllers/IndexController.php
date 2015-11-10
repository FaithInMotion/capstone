<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\story;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function welcome()
    {
        $stories = story::take(11)->get();
//        $stories = $query->toArray();
//        $data['feature_1'] = array_shift($stories) ;
//        $data['feature_2'] = array_shift($stories);
//        $data['stories'] = $stories;

        return view('welcome', compact('stories'));

    }

}
