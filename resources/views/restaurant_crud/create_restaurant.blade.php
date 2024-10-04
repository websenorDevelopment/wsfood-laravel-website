@extends('admin_layout.admin_layout')
@section('content')


<div class="container">
    <div class="container mt-5">
        <h2>Create Restaurant</h2>
        <form action="{{route('restaurant.store')}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="mb-3">
                <label for="name" class="form-label">Restaurant Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter restaurant name"
                    required>
            </div>


            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="Enter full address"
                    required></textarea>
            </div>


            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter contact number"
                    required>
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter contact email"
                    required>
            </div>
            <div class="mb-3">
                <label for="state">Select State</label>
                <select name="state" id="state" class="form-control">
                    <option value="" disabled selected>Select State</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>

                    <option value="Chandigarh">Chandigarh</option>


                    <option value="Delhi">Delhi</option>


                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" required>
            </div>
            <div class="mb-3">
                <label for="opening_hours" class="form-label">Opening Time</label>
                <input type="time" class="form-control" id="opening_hours" name="opening_time"
                    placeholder="Enter Opening-Hours" required>
            </div>
            <div class="mb-3">
                <label for="opening_hours" class="form-label">Closing Time</label>
                <input type="time" class="form-control" id="opening_hours" name="closing_time"
                    placeholder="Enter Opening-Hours" required>
            </div>
            <div class="mb-3">


                <label for="cuisine_type" class="form-label">Cuisine Type</label>
                <select class="js-example-basic-multiple form-control" name="cuisine_type[]" multiple="multiple">
                    @foreach($cuisines as $cuisine)
                        <option value="{{ $cuisine->id }}">{{ $cuisine->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" placeholder="Enter rating " min="1"
                    max="5">
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"
                    placeholder="Enter a brief description of the restaurant" required></textarea>
            </div>


            <div class="mb-3">
                <label for="logo" class="form-label">Restaurant Logo/Image</label>
                <input type="file" class="form-control" id="logo" name="image" accept="image/*">
            </div>


            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="number" class="form-control" id="latitude" name="latitude" placeholder="Enter latitude between -90 and 90"
                    required>
            </div>

            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="number" class="form-control" id="longitude" name="longitude" placeholder="Enter longitude between -180 and 180"
                    required>
            </div>




            <button type="submit" class="btn btn-primary">Add Restaurant</button>
        </form>
    </div>
</div>
<br>
<br>





@endsection