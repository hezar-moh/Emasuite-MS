
@extends('Base')

@section('maincontent')


<div class="table">

       <span>
         <a href="{{ route('system.create') }}" class="btn btn-primary float-end">Add System</a>
       </span>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($system as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>
        @if ( $item->image)
          <img src="{{ asset('upload/systems/' .  $item->image) }}" alt="System Image" width="50">
        @else
          No Image
        @endif
      </td>
      <td>{{  $item->name }}</td>
      <td>{{  $item->description }}</td>
      <td>
        <a href="{{ route('system.edit',  $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil" ></i></a>
        <form action="{{ route('system.destroy',  $item->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button onclick="return confirm('Are you want to Delete??')" type="submit" class="btn btn-danger"><i class="fa fa-trash" ></i></button>
        </form>
      </td>

    @endforeach

  </tbody>
</table>
</div>


@endsection
