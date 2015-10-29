@extends('layouts/master')

@section('content')
    <div class="container">
        <div class="main_content floatleft">
        {{--This checks for and displays errors in the form based on our validation method in the Request file--}}
            @include('/errors/form_errors')
            
    <form method="POST" action="/character" enctype="multipart/form-data" class="basic-grey">
        <h1 class="basic-grey">Create New Character
            <span>Please fill in all the fields.</span>
        </h1>

        @include('character.form')

    </form>
        </div>
    </div>

@stop