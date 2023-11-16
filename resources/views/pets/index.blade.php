@extends('pets.layout')

@section('content')
   {{-- @foreach($students as $item)
      <tr>
         <td>{{ $loop->iteration }}</td>
         <td>{{ $item->name }}</td>
         <td>{{ $item->address }}</td>
         <td>{{ $item->mobile }}</td>
      </tr> --}}
   {{-- petnames clickable to take to page where edit name:
   <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>--}}
   <button type="button" data-bs-target="/pets/create" class="btn btn-primary" title="Add Pet">Create Pet</button>

@endsection