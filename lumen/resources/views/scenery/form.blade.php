@inject('genres', 'App\Http\Utilities\Genre')

<div class="form-group">
    <label for="title">Title: </label>
    <input type="text" name="title" id="title" class="form-control" value="">
    {{--<input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">--}}
</div>

<div class="form-group">
    <label for="synopsis">Synopsis (one or two sentences): </label>
            <textarea type="text" name="synopsis" id="synopsis" class="form-control">

                {{--{{ old('synopsis') }}--}}
            </textarea>
</div>

<div class="form-group">
    <label for="genre">Genre: </label>
    <select name="genre" id="genre" class="form-control">
        @foreach ($genres::all() as $name => $code)
            <option value="{{ $code }}">{{ $name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="cover">Cover Image: </label>
    <input type="file" name="cover" id="cover" class="form-control" value="">
{{--    <input type="file" name="cover" id="cover" class="form-control" value="{{ old('cover') }}">--}}
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Create Story</button>
</div>