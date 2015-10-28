{{ csrf_field() }}

<!--TITLE-->
    <label for="title"><span>Title: </span>
    <input type="text" name="title" id="title" class="form-control" placeholder="Story's Title">
    </label>
<!--GENRE-->

    <label for="genre"><span>Genre: </span>
    <input type="text" name="genre" id="genre" class="form-control" placeholder="Story's Genre">
    </label>

<!--SYNOPSIS-->
    <label for="synopsis"><span>Synopsis: </span>
    <textarea rows="3" name="synopsis" id="synopsis" class="form-control" placeholder="Story's Synopsis"></textarea>
    </label>

<!--CREATE BUTTON-->
<label>
    <span></span>
    <input type="submit" name="create" value="Create" class="button">
</label>

