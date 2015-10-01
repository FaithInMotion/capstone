@extends('layouts.master')

@section('title', 'Users')

@section('content')

    @if(count($users) == 0)
        <h1>There are no users added to this story yet!</h1>
    @else
        @foreach ($user as $login)
            <div style="width: 70%; margin: auto;">
                <h1>{{ $login->displayname }}</h1>
                <p>{{ $login->name }}</p>
                <p>{{ $login->email }}</p>
                <p>{{ $login->password }}</p>
                <p>{{ $login->birthdate }}</p>
                <span id="small_left" style="width: 30%;">Added: {{ $login->created_at }}</span>
                <span id="small_right" style="float: right; width: 30%;">Last Edited: {{ $login->updated_at }}</span>
            </div>
            <br>
        @endforeach
    @endif


@stop