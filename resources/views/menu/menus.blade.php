@extends('admin_layout.admin_layout')
@section('content')

<div class="container-fluid px-4">
    <div class="row">

        <div class="col">
            <h1 class="mt-4">Menu</h1>
        </div>
        <div class="col" style="text-align: end;margin-top: 40px;">
            <div class="btn btn-success">
                <a style="text-decoration:none;color:black;" href="{{route('menus.create')}}">
                    Add New
                </a>
            </div>
        </div>


    </div>


    <h2>Create Item</h2>
    <form action="{{route('menus.show')}}" method="POST" enctype="multipart/form-data">
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

        <button type="submit" class="btn btn-primary">See Menu</button>
    </form>


</div>



@endsection