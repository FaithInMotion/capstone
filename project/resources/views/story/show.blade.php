@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="main_content floatleft">

            <div class="basic-grey">

@if(!empty($story))
    <h1 class="basic-grey">{{ $story->title }}
    <span>
        <b>Genre:</b> {{ $story->genre }}
        <br><b>Synopsis:</b> {{ $story->synopsis }}<span>
    </h1>
                    <h2>Add pictures of your story</h2>
                    <p>Files under 3 MB allowed: .jpg, .jpeg, .png</p>
    <br>
@else
    <hr>
    <h1>Broke bruh</h1>
    <hr>
@endif

    </div>
    </div>
    </div>


@stop

