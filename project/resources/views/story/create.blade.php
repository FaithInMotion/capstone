@extends('layouts/master')

@section('content')

    <h1>Create a Story</h1>
    <hr>
    <form method="POST" action="/story" enctype="multipart/form-data">

        @include('story.form')
    </form>

@stope