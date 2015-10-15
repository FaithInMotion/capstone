@extends('layouts/master')

@section('content')
    <div class="container">
        <div class="main_content floatleft">

    <form method="POST" action="/story" enctype="multipart/form-data" class="basic-grey">

        <h1 class="basic-grey">Create A New Story
            <span>Please fill in all the fields.</span>
        </h1>
        @include('story.form')
    </form>
        </div>
    </div>
@stop