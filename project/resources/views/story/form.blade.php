{{ csrf_field() }}



<!--TITLE-->
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="Test5">
</div>

<!--GENRE-->
<div class="form-group">
    <label for="genre">Genre</label>
    <input type="text" name="genre" id="genre" class="form-control" value="Horror">
</div>

<!--SYNOPSIS-->
<div class="form-group">
    <label for="synopsis">Synopsis</label>
    <textarea rows="3" name="synopsis" id="synopsis" class="form-control">Once apon a peck</textarea>
</div>

<!--CREATE BUTTON-->
<div class="form-group">
    <input type="submit" name="create" value="Create">
</div>
<br>

<?php
echo "Today is ".date("m/d/Y")."!";
