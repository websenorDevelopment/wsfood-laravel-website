@extends('admin_layout.admin_layout')
@section('content')


<div class="container">
    <div class="container mt-5">
        <h2>Create Category</h2>
        <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name"
                    required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Add Image</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Add a Image"
                    required>
            </div>






            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
</div>
<br>
<br>





@endsection