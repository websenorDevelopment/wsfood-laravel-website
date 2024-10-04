@extends('admin_layout.admin_layout')
@section('content')

<div class="container-fluid px-4">
    <div class="row">

        <div class="col">
            <h1 class="mt-4">{{$category->name}} Menu For  {{$restaurant->name}} </h1>
        </div>
        <div class="col" style="text-align: end;margin-top: 40px;">
            <div class="btn btn-success">
                <a style="text-decoration:none;color:black;" href="{{route('menus.create')}}">
                    Add New Item To Menu
                </a>
            </div>
        </div>


    </div>



    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{$category->name}}
        </div>
        <div class="card-body">

            <table id="restaurant_table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Rating</th>
                        <th>Price</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Rating</th>

                        <th>Price</th>

                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($menus as $menu){


                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$menu->name}}</td>
                            <td>{{$menu->description}}</td>
                            <td>{{$menu->rating}}</td>
                            <td>{{$menu->price}}</td>

                        </tr>}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</div>



@endsection