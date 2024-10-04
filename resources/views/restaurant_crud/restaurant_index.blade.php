@extends('admin_layout.admin_layout')
@section('content')

<div class="container-fluid px-4">
    <div class="row">

        <div class="col">
            <h1 class="mt-4">Restaurants</h1>
        </div>
        <div class="col" style="text-align: end;margin-top: 40px;">
            <div class="btn btn-success">
                <a style="text-decoration:none;color:black;" href="{{route('restaurant.create')}}">
                    Add New
                </a>
            </div>
        </div>


    </div>



    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Restaurant table
        </div>
        <div class="card-body">

            <table id="restaurant_table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Opening_time</th>
                        <th>Closing_time</th>
                        <th>Rating</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Latitude</th>
                        <th>Longitude</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Opening_time</th>
                        <th>Closing_time</th>
                        <th>Rating</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($restaurants as $restaurant)


                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$restaurant->name}}</td>
                            <td>{{$restaurant->email}}</td>
                            <td>{{$restaurant->phone}}</td>
                            <td>{{$restaurant->address}}</td>
                            <td>{{$restaurant->opening_time}}</td>
                            <td>{{$restaurant->closing_time}}</td>
                            <td>{{$restaurant->rating}}</td>
                            <td>{{$restaurant->description}}</td>
                            <td>{{$restaurant->image}}</td>
                            <td>{{$restaurant->latitude}}</td>
                            <td>{{$restaurant->longitude}}</td>
                            <td>
                                <div class="btn btn-success">
                                    <a style="text-decoration:none;color:black;" href="{{route('menus.create')}}">
                                        Add Menu
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</div>



@endsection