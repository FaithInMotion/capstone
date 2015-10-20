@extends('layouts/master')

@section('content')
    <div class="container">
        <div class="main_content floatleft">

            @include('/errors/form_errors')

            <form method="POST" action="/auth/login" class="basic-grey">
                {!! csrf_field() !!}

                <h1 class="basic-grey">Login
                    <span>Please fill in all the fields.</span>
                </h1>

                @include('/errors/form_errors')

                <label for="email"><span>Email:</span>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                </label>

                <label for="password"><span>Password:</span>
                <input type="password" name="password" id="password" required>
                </label>

                <label>
                    <span></span>
                <input type="checkbox" name="remember" style="margin-top: 15px;"> Remember Me
                </label>

                <label>
                    <span></span>
                <button type="submit" class="button" style="margin-top: 15px;">Login</button>
                </label>

            </form>

        </div>
    </div>
@stop