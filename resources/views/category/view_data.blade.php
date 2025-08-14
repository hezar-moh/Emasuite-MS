@extends('Base')

@section('maincontent')
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4 text-center p-3">
                <img src="{{ asset('storage/' . $view_data->image) }}" alt="Image" width="100%" height="auto"
                    class="img-fluid show-shadow">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title mb-3">{{ $view_data->name }}</h3>
                    <hr>
                    <p class="card-text fs-5">{{ $view_data->description }}</p>

                </div>

            </div>
        </div>
    </div>
@endsection
