@extends('layouts.master')

@section('title', 'Scenery')

@section('content')

{{--    {{$scenery}}--}}

        <hr style="width: 70%;">
    @foreach ($scenery as $place)
        <div style="width: 70%; margin: auto;">
            <h1>{{ $place->name }}</h1>
            <p>{{ $place->description }}</p>
            <span id="small_left" style="width: 30%;">Added: {{ $place->created_at }}</span>
            <span id="small_right" style="float: right; width: 30%;">Last Edited: {{ $place->updated_at }}</span>
        </div>
        <br>
        <hr style="width: 70%;">
    @endforeach


@stop