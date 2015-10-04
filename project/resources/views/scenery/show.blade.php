@extends('layouts/master')

@section('content')

    <h1>{{ $location->name }}</h1>
    <hr>
    <p>{!! nl2br($location->description) !!}</p>

@stop