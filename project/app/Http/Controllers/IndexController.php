<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\story;

class IndexController extends Controller
{
    public function welcome()
    {
        $stories = story::with('latestPhoto')->orderBy('created_at', 'asc')->take(11)->get();

        return view('welcome', compact('stories'));
    }

}
