@extends('layouts/master')

@section('content')
    <div class="container">
        <div class="main_content floatleft">

            @include('/errors/form_errors')

            <form method="POST" action="/auth/register" class="basic-grey">

                {!! csrf_field() !!}

                <h1 class="basic-grey">Register
                    <span>Please fill in all the fields.</span>
                </h1>

                <label for="name"><span>Name:</span>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                </label>

                <label for="email"><span>Email:</span>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                </label>

                <label for="password"><span>Password:</span>
                <input type="password" name="password" id="password" required>
                </label>

                <label for="password_confirmation"><span>Confirm Password:</span>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
                </label>

                <label>
                    <span></span>
                <button type="submit" class="button">Register</button>
                </label>

            </form>
        </div>
    </div>
@stop