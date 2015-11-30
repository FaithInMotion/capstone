{{--This is absolutely required--}}
{{ csrf_field() }}

    <input type="hidden" name="user_id" value="{{ $user_id }}" />

    <label for="name"><span>Name: </span>
    <input type="text" name="name" id="name" placeholder="Scenery Name" value="{{ old('title') }}" required />
    </label>

    <label for="description"><span>Description: </span>
            <textarea type="text" name="description" id="description" placeholder="Scenery Description" required>{{ old('description') }}</textarea>
    </label>

{{--<div class="form-group">--}}
{{--<label for="photo">Example Imagery: </label>--}}
{{--<input type="file" name="photo" id="photo" class="form-control" value="">--}}
{{--</div>--}}

<label>
    <span></span>
    <button type="submit" class="button" value="send">Create Location</button>
</label>


