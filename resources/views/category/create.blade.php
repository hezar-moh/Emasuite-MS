<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
<div class="card m-5">
  <div class="card-body m-5">
    <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Categoty Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="6" required></textarea>
        </div>

        <div class="mb-3">
            <label for="image"> Image</label>
            <input type="file" name="image">
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i> Save Category
            </button>
            <a href="/home" class="btn btn-outline-danger"><i class="fa fa-arrow-left"></i>Cancel</a>
        </div>

    </form>
  </div>
</div>

</body>

</html>
