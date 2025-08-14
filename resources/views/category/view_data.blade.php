<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>View Content</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>


</head>

<body class="bg-light">

  <div class="container py-5">
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
  </div>

</body>

</html>
