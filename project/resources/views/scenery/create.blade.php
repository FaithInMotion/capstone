@extends('layouts/master')
@section('content')
    <div class="container">
        <div class="main_content floatleft">

    {{--This checks for and displays errors in the form based on our validation method in the Request file--}}
    @include('/errors/form_errors')

    {{--We are going to use a multipart form because I have included image uploading--}}
    <form method="POST" action="/scenery" enctype="multipart/form-data" class="basic-grey">

        <h1 class="basic-grey">Create New Place
            <span>Please fill in all the fields.</span>
            </h1>

        @include('scenery.form')

    </form>
    </div>
    </div>

@stop