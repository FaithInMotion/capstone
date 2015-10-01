@extends('layouts/master')

@section('content')

    <h1>Login</h1>
    <hr>


    <form method="POST" action="/login/{{ $users }}" enctype="multipart/form-data">


        @include('login.form')

    </form>

@stop