@extends('layouts/master')

@section('content')

    <div class="container">
        <div class="main_content floatleft">

    @if(!empty($character))
                <div class="basic-grey">
                    <h1 class="basic-grey">{{$character->name }}
                    <span>{!! nl2br($character->description) !!}
                        <br>Age: {{ $character->age }}
                    <br>Height: {{ $character->height }}
                    <br>Weight: {{ $character->weight }}</span>
                        </h1>
                    <h2>Add pictures of your character</h2>
                    <p>Files under 3 MB allowed: .jpg, .jpeg, .png</p>
                    <br>
                    
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
    @endif

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