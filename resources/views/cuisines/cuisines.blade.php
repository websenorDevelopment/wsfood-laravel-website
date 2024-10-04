@extends('admin_layout.admin_layout')
@section('content')

<div class="container-fluid px-4">
    <div class="row">

        <div class="col">
            <h1 class="mt-4">Cuisines</h1>
        </div>
        <div class="col" style="text-align: end;margin-top: 40px;">
           <div class="btn btn-success">
           <a  style="text-decoration:none;color:black;" href="{{route('cuisines.create')}}">
                Add New
            </a>
           </div>
        </div>


    </div>



    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Cuisines table
        </div>
        <div class="card-body">

            <table id="restaurant_table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                       
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                       
                        
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($cuisines as $cuisine)


                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$cuisine->name}}</td>
                          
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</div>
<!-- <footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Swiggy_clone.com 2023</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer> -->


@endsection