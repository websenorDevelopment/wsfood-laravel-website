@if($restaurant->count())
    @foreach ($restaurant as $resto)

        <div class="col-xl-4 col-xxl-3 col-lg-6 col-sm-16 col-md-6  col-6 d-flex justify-content-center mb-4 ">
            <a href="{{route('restaurant.showMenu', $resto->id)}}">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset($resto->image)}}" class="card-img-top" height="200px" width="100px" alt="...">
                    <div class="card-badge"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5M8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6" />
                            </svg></span>
                        Free Delivery
                    </div>
                    <div class="card-text">
                        ₹125 OFF ABOVE ₹249
                    </div>
                    <div class="card-body">
                        <div class="card-name">{{$resto->name}}

                        </div>
                        <div class="card-time"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg></span>{{$resto->rating}}• 30-35 mins

                        </div>
                        <div class="card-address">@foreach ($resto->categories as $category)
                            <span>{{$category->name}},</span>


                        @endforeach

                        </div>
                        <div class="card-address">
                            {{$resto->address}}
                        </div>
                    </div>
                </div>
            </a>
        </div>

    @endforeach
@else
    <p>No restaurants found matching your criteria.</p>
@endif