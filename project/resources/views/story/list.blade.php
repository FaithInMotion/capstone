@extends('layouts.master')

@section('title', 'Story')

@section('content')

    @if (count($story_id) == 0)
        <h1>No Story Available</h1>
    @else
        @foreach ($story as $story)
            <div style="width: 70%; margin: auto;">

                <h1>    {{ $story ->title      }}</h1>
                <p>     {{ $story ->genre      }}</p>
                <p>     {{ $story ->synopsis   }}</p>

                <span id="small_left" style="width: 30%;">Added: {{ $storys->created_at }}</span>
                <span id="small_right" style="float: right; width: 30%;">Last Edited: {{ $storys->updated_at }}</span>
            </div>
            <br>
        @endforeach
    @endif


@stop