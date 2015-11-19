{{ csrf_field() }}

<input type="hidden" name="user_id" value="{{ $user_id }}" />

<label for="name"><span>Name: </span>
    <input type="text" name="name" id="name" class="form-control" placeholder="Character Name" value="">
</label>

    <label for="description"><span>Description: </span>
            <textarea type="text" name="description" id="description" class="form-control" placeholder="Character Description"></textarea>
    </label>

   <label for="age"><span>Age: </span>
    <input type="text" name="age" id="age" class="form-control" value="" placeholder="Character's age">
   </label>

    <label for="height"><span>Height: </span>
    <input type="text" name="height" id="height" class="form-control" value="" placeholder="Character's height">
    </label>

    <label for="weight"><span>Weight: </span>
    <input type="text" name="weight" id="weight" class="form-control" value="" placeholder="Character's weight">
    </label>

<label>
    <span></span>
    <button type="submit" class="button">Create Character</button>
</label>