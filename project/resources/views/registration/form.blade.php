{{--This is absolutely required--}}
{{ csrf_field() }}

<div class="form-group">
    <label for="name">Display Name: </label>
    <input type="text" name="displayname" id="displayname" class="form-control" value="">

</div>

<div class="form-group">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" class="form-control" value="">

</div>

<div class="form-group">
    <label for="name">Email: </label>
    <input type="text" name="email" id="email" class="form-control" value="">

</div>

<div class="form-group">
    <label for="name">Password: </label>
    <input type="password" name="password" id="password" class="form-control" value="">

</div>

<div class="form-group">
    <label for="name">Birthdate: </label>
    <input type="date" name="birthdate" id="birthdate" class="form-control" value="">

</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Register</button>
</div>


