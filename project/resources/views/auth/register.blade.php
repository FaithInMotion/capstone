@extends('layouts/master')

@section('content')
    <div class="container">
        <div class="main_content floatleft">

            @include('/errors/form_errors')

            <form method="POST" action="/auth/register" class="basic-grey">

                {!! csrf_field() !!}

                <h1 class="basic-grey">Register</h1>

                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>

                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>

                <br>
                <button type="submit" class="button">Register</button>

            </form>
        </div>
    </div>
@stop