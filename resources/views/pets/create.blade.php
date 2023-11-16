@extends('pets.layout')

@section('content')
<form method="POST" action="{{url("/pets")}}">
    <div class="mb-3">
   
        <label for="name" class="form-label">Pet name</label>
        <input type="name" class="form-control" id="name" placeholder="Enter new pet's name">

        <button type="submit" class="btn btn-ptimary">Create</button>
    </div>
</form>

@endsection