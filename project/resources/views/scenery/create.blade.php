@extends('layouts/master')
@section('content')
    <div class="container">
        <div class="main_content floatleft">

    {{--We are going to use a multipart form because I have included image uploading--}}
    <form method="POST" action="/scenery" enctype="multipart/form-data" class="basic-grey">

        <h1 class="basic-grey">Create New Place
            <span>Please fill in all the fields.</span>
            </h1>
        {{--This checks for and displays errors in the form based on our validation method in the Request file--}}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{--This line includes the form piece, pulled out to make things cleaner--}}
        @include('scenery.form')

    </form>
    </div>
    </div>

@stop