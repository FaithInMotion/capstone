@extends('layouts/master')

@section('content')

    <h1>Create New Story</h1>
    <hr>

    <form method="POST" action="/stories " enctype="multipart/form-data">
        @include('scenery.form')
    </form>

@stop