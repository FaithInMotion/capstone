{{ csrf_field() }}

<div class="form-group">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" class="form-control" value="">

</div>

<div class="form-group">
    <label for="description">Description: </label>
            <textarea type="text" name="description" id="description" class="form-control"></textarea>
</div>

<div class="form-group">
   <label for="age">Age: </label>
    <input type="text" name="age" id="age" class="form-control" value="">

</div>

<div class="form-group">
    <label for="height">Height: </label>
    <input type="text" name="height" id="height" class="form-control" value="">

</div>

<div class="form-group">
    <label for="weight">Weight: </label>
    <input type="text" name="weight" id="weight" class="form-control" value="">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Create Character</button>
</div>