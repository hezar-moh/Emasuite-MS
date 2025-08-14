@extends('Base')

@section('maincontent')
    <div class="form">
        <div class="card">
            <div class="col-md-10 m-auto">
                <form  method="POST" enctype="multipart/form-data" action="{{route('system.store')}}" >
                    @csrf
                    @method('POST')
                    <div class="mb-3 mt-3">
                <input type="text" name="name" placeholder="enter name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
               <textarea name="description" class="form-control" placeholder="description" cols="10" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" >

            <button type="submit" class="btn btn-primary mt-2 ms-5">Submit</button>
        </form>
            </div>
        </div>
    </div>
@endsection
