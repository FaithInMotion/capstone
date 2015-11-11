@extends('layouts.master')

@section('content')

<div class="container">
    <div class="main_content floatleft">
        <div class="basic-grey">

            <h1 class="basic-grey">
                {{ $story->title }}
                <span>{{ $story->genre }}</span>
            </h1>

            <h1 class="basic-grey">
                Synopsis
                <span>
                    <P>{{ $story->synopsis }}</P>
                </span>
            </h1>

            {{-- Photos added for this location --}}
            @if( !$story->photos->isEmpty() )

                <p>Artwork for "{{ $story->title}}"</p>
                <hr>
                @foreach ($story->photos as $photo)

                    <br><img src="/{{ $photo->path }}" alt=""><br>
                    <span><i>{{$photo->created_at}}</i></span>

                @endforeach
                <hr><br>

            @endif
            <p>Add artwork to "{{ $story->title }}"</p>
            <form id="addPhotosForm" action="{{ $story->id }}/photos" method="POST" class="dropzone">{{ csrf_field() }}</form>

        </div>
    </div>
</div>

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