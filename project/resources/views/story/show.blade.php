@extends('layouts.master')

@section('content')

<div class="container">
    <div class="main_content floatleft">
        <div class="basic-grey">

            <h1 class="basic-grey">
                {{ $story->title }}
                <span>{{ $story->genre }}
                <P>{{ $story->synopsis }}</P>
                    </span>
            </h1>

            {{-- Photos added for this location --}}
            @if( !$story->photos->isEmpty() )
                <p>Artwork for "{{ $story->title }}"</p>
                @foreach ($story->photos as $photo)

                    <br><img src="/{{ $photo->path }}" alt=""><br>

                @endforeach
                <hr><br>

            @endif
            <h2>Add pictures of your story</h2>
            <p>Files under 3 MB allowed: .jpg, .jpeg, .png</p>
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