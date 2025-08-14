@extends('Base')

@section('maincontent')

    {{-- <div class="modal fade" id="{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1>{{ $category->id }}</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}


    <div class="mb-4">
        <a href="{{ url('/create') }}" class="btn btn-success">
            <i class="fa fa-plus me-1"></i> Create New Category
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            @if (empty($categories))
                <div class="p-4 text-center text-muted"> You have no notes yet. <br> <br><a href="{{ url('/create') }}"
                        class="btn btn-success"><i class="fa fa-plus me-2"></i>Create
                        your first note</a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        @if ($category->image)
                                            <img src="{{ asset('storage/' . $category->image) }}" alt="category Image"
                                                class="image-fluid" style="height: 50px; width: 50px;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ url('/edit', $category->id) }}" class="btn btn-sm btn-primary me-2"
                                            title="Edit"> <i class="fa fa-sm fa-pencil"></i></a>

                                        {{-- <a href="{{ route('view_data', $category->id) }}" class=""><i class="fa fa-eye"></i></a> --}}
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#{{ $category->id }}">
                                            <i class="fa fa-eye "></i>
                                        </button>

                                        <form action="{{ url('/destroy', $category->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger ms-2" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this note?')">
                                                <i class="fa fa-trash-alt"></i>
                                                <!--alt is to enhance good looking-->
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <div class="modal fade" id="{{ $category->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Category Detail</h1>

                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="row g-0">
                                                        <div class="col-md-4 text-center p-3">
                                                            <img src="{{ asset('storage/' . $category->image) }}"
                                                                alt="Image" width="100%" height="auto"
                                                                class="img-fluid show-shadow">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h3 class="card-title mb-3">{{ $category->name }}</h3>
                                                                <hr>
                                                                <p class="card-text fs-5">{{ $category->description }}</p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>


@endsection
