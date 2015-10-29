@extends('layouts.master')

@section('title', 'Character')

@section('content')

    @include('/errors/form_errors')

    @if (count($character) == 0)
        <h1>There are no characters added to this story yet!</h1>
    @else
        @foreach ($character as $person)
            <div style="width: 70%; margin: auto;">
                <h1>{{ $person->name }}</h1>
                <p>{{ $person->description }}</p>
                <p>{{ $person->age }}</p>
                <p>{{ $person->height }}</p>
                <p>{{ $person->weight }}</p>
                <span id="small_left" style="width: 30%;">Added: {{ $person->created_at }}</span>
                <span id="small_right" style="float: right; width: 30%;">Last Edited: {{ $person->updated_at }}</span>
            </div>
            <br>
        @endforeach
    @endif


@stop