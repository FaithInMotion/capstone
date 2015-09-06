@inject('genres', 'App\Http\Utilities\Genre')

<div class="form-group">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" class="form-control" value="">
    {{--<input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">--}}
</div>

<div class="form-group">
    <label for="description">Description: </label>
            <textarea type="text" name="description" id="description" class="form-control">
                {{--{{ old('synopsis') }}--}}
            </textarea>
</div>

<div class="form-group">
    <label for="photo">Example Imagery: </label>
    <input type="file" name="photo" id="photo" class="form-control" value="">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Create Location</button>
</div>