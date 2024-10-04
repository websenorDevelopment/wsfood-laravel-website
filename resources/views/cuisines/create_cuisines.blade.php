@extends('admin_layout.admin_layout')
@section('content')


<div class="container">
    <div class="container mt-5">
        <h2>Create Cuisines</h2>
        <form action="{{route('cuisines.store')}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="mb-3">
                <label for="name" class="form-label">Cuisine Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter cuisine name"
                    required>
            </div>
           






            <button type="submit" class="btn btn-primary">Add Cuisine</button>
        </form>
    </div>
</div>
<br>
<br>





@endsection