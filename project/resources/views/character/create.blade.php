@extends('layouts/master')

@section('content')

    <h1>Create New Character</h1>
    <hr>


    <form method="POST" action="/character" enctype="multipart/form-data">


        @include('character.form')

    </form>

@stop