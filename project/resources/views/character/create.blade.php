@extends('layouts/master')

@section('content')
    <div class="container">
        <div class="main_content floatleft">
            
    <form method="POST" action="/character" enctype="multipart/form-data">
        <h1 class="basic-grey">Create New Character
            <span>Please fill in all the fields.</span>
        </h1>

        @include('character.form')

    </form>
        </div>
    </div>

@stop