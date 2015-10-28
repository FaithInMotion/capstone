@extends('layout/master')

@section('content')

    @if(!empty($character))

    <h1>{{$character->name }}</h1>
    <hr>
    <p>{!! nl2br($character->description) !!}</p>
    <h3>{{ $character->age }}</h3>
    <h3>{{ $character->height }}</h3>
    <h3>{{ $character->weight }}</h3>

    <form id="addPhotosForm" action="{{ $character->id }}/photos" method="POST" class="dropzone">{{ csrf_field() }}</form>

    {{-- Photos added for this character --}}
    @foreach ($character->photos as $photo)
        <br>
        <img src="/{{ $photo->path }}" alt="">
    @endforeach


    @else
    <hr>
    <h1>The Character does not Exists</h1>
    <hr>
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