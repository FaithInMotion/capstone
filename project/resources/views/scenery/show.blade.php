@extends('layouts/master')

@section('content')

    <h1>{{ $location->name }}</h1>
    <hr>
    <p>{!! nl2br($location->description) !!}</p>

    {{-- Dropzone --}}
    <br><br>
    <h2>Add Reference Photos</h2>
    <p>Files under 3 MB allowed: .jpg, .jpeg, .png</p>
    <br>
    {{-- File uploads! --}}
    <form id="addPhotosForm" action="{{ $location->id }}/photos" method="POST" class="dropzone">{{ csrf_field() }}</form>

    {{-- Photos added for this location --}}
    @foreach ($location->photos as $photo)
        <br>
        <img src="/{{ $photo->path }}" alt="">
    @endforeach

@stop

@section('scripts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
    <script>
        Dropzone.options.addPhotosForm =
        {
            paramName: 'photo',
            maxFileSize: 3,
            acceptedFiles: '.jpg, .jpeg, .png'
        }
    </script>
@stop