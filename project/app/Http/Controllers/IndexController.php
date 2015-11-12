<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Providers;
use App\story;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function welcome()
    {
        $stories = story::with('lastPhoto')->orderBy('created_at', 'asc')->take(11)->get();

        return view('welcome', compact('stories'));
    }

}
