@extends('layouts/master')

@section('content')

    <h1>Create New Place</h1>
    <hr>

    {{--We are going to use a multipart form because I have included image uploading--}}
    <form method="POST" action="/scenery/{{ $story_id }}" enctype="multipart/form-data">

        {{--This line includes the form piece, pulled out to make things cleaner--}}
        @include('scenery.form')

    </form>

@stop