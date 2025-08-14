<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <title>Document</title>

</head>

<body>
    <div class="card m-5">
        <div class="card-body m-5">
            <form action="{{url('/update', $category_data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    
                <div class="mb-3">
                    <label for="name">Categoty Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $category_data->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="6" required>{{ old('description', $category_data->description) }}</textarea> {{-- old help only to return the value when anything happen eg; if thereis an error the value user entred 1st will not dissappear --}}
                </div>

                @if ($category_data->image)
                    <div class="mb-3">
                        <label class="form-label">Current Image</label><br>
                        <img src="{{ asset('storage/' . $category_data->image) }}" alt="Note Image" width="150">
                    </div>
                @endif

                <!-- we upload image here Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Change Image (optional)</label>
                    <input type="file" id="image" name="image" class="form-control" accept="image/*">
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Update Category
                    </button>
                    <a href="/home" class="btn btn-outline-danger"><i class="fa fa-arrow-left"></i>Cancel</a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
