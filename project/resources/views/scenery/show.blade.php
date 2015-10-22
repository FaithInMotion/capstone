@extends('layouts/master')

@section('content')

    <div class="container">
        <div class="main_content floatleft">

            <div class="basic-grey">
                <h1 class="basic-grey">{{ $location->name }}
                <span>{!! nl2br($location->description) !!}</span>
                </h1>
                {{-- Dropzone --}}
                <h2>Add pictures of your scenery</h2>
                <p>Files under 3 MB allowed: .jpg, .jpeg, .png</p>
                {{-- File uploads! --}}
                    <br>
                <form id="addPhotosForm" action="{{ $location->id }}/photos" method="POST" class="dropzone">{{ csrf_field() }}</form>

                {{-- Photos added for this location --}}
                @foreach ($location->photos as $photo)
                    <br>
                    <img src="/{{ $photo->path }}" alt="">
                @endforeach
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