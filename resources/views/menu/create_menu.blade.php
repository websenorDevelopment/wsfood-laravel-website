@extends('admin_layout.admin_layout')
@section('content')


<div class="container">
    <div class="container mt-5">
        <h2>Add Item</h2>
        <form action="{{route('menus.store')}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="mb-3">
                <label for="restaurant">Select Restaurant:</label>
                <select name="restaurant_id" id="restaurant">
                    @foreach($restaurants as $restaurant)
                        <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="restaurant">Select Category:</label>
                <select name="category_id" id="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Description</label>
                <input type="text" class="form-control" id="name" name="description"  placeholder="Enter Description"
                    required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Image</label>
                <input type="file" class="form-control" id="name" name="image" required placeholder="Choose image"
                    required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Price</label>
                <input type="text" class="form-control" id="name" name="price" required placeholder="Enter price" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Rating</label>
                <input type="decimal" class="form-control" id="name" name="rating"  placeholder="Enter rating" required>
            </div>


            <button type="submit" class="btn btn-primary">Add To Menu</button>
        </form>
    </div>
</div>
<br>
<br>
@endsection