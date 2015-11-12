@extends('layouts.master')

@section('content')

@if(!empty($story))
    <h1>{{ $story->title }}</h1>
    <hr>
        {{ $story->genre }}
    <hr>
    <P>{{ $story->synopsis }}</P>
@else
    <hr>
        <h1>Broke bruh</h1>
    <hr>
@endif










@stop

