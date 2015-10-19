@extends('layouts/master')

@section('content')
    <div class="container">
        <div class="main_content floatleft">

            @include('/errors/form_errors')

            <form method="POST" action="/auth/login" class="basic-grey">
                {!! csrf_field() !!}

                <h1 class="basic-grey">Login</h1>

                @include('/errors/form_errors')

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>

                <br>
                <input type="checkbox" name="remember" style="margin-top: 15px;"> Remember Me

                <br>
                <button type="submit" class="button" style="margin-top: 15px;">Login</button>

            </form>

        </div>
    </div>
@stop