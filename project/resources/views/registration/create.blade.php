@extends('layouts/master')

@section('content')

    <h1>Create a new account</h1>
    <hr>


    <form method="POST" action="/registration/{{ $users }}" enctype="multipart/form-data">


        @include('registration.form')

    </form>

@stop