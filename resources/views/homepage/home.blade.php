<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home_layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">



    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @include('swiggy_layouts.navbar')

    <div class="container container-padding text-md-start">
        <div class="row d-flex justify-content-between">
            <div class="col username">Nikita, what's on your mind?</div>
            <div class="scroll-btn-row">
                <button class="scroll-btn scroll-btnB" data-target="#food-row"><svg xmlns="http://www.w3.org/2000/svg"
                        class="scroll_arrows" viewBox="0 0 448 512">
                        <path
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg></button>
                <button class="scroll-btn scroll-btnF " data-target="#food-row"><svg xmlns="http://www.w3.org/2000/svg"
                        class="scroll_arrows" viewBox="0 0 448 512">
                        <path
                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg></button>
            </div>
        </div>
        <div class="row  food-row" id="food-row">

            <div class="row  d-flex">
                @foreach ($categories as $category)
                    <div class="food-items">
                        <a href="{{route('category.restaurants', $category->id)}}"><img src="{{asset($category->image)}}"
                                class="food-items-img border-rounded" alt="">
                            <h5>{{$category->name}}</h5>
                        </a>
                    </div>
                @endforeach



            </div>


        </div>
        <hr>
    </div>
    <div class="container container-padding">
        <div class="row">
            <div class="col username">Top restaurant chains in Udaipur</div>
            <div class="scroll-btn-row">
                <button class="scroll-btn scroll-btnB" data-target="#cards-row"><svg xmlns="http://www.w3.org/2000/svg"
                        class="scroll_arrows" viewBox="0 0 448 512">
                        <path
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg></button>
                <button class="scroll-btn scroll-btnF " data-target="#cards-row"><svg xmlns="http://www.w3.org/2000/svg"
                        class="scroll_arrows" viewBox="0 0 448 512">
                        <path
                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg></button>
            </div>

        </div>
        <div class="row cards_row" id="cards-row">
            <div class="row card-row ">
                @foreach ($restaurant as $resto)
                    <div class=" d-flex justify-content-center mb-4  ">


                        <a href="{{ route('restaurant.showMenu', $resto->id) }}">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset($resto->image)}}" class="card-img-top" height="200px" width="100px"
                                    alt="...">
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
                                    <div class="card-time"><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
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
            </div>
        </div>
        <hr>
    </div>

    <div class="container container-padding">
        <div class="row">
            <div class="col username">Restaurants with online food delivery in Udaipur</div>
            <!-- <div class="col"></div> -->
        </div>
    </div>
    <div class="container-fluid sticky_container ">
        <div class="container  list-options">
            <div class="row sorting-options  justify-content-start">
                <div class="list-items list-modal sorting-option border">

                    <button type="button" class="filter-button " data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        Filter <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg></span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade " id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content filter_modal">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal2-body">
                                    <div class="row">
                                        <div class="col-5 border-end">
                                            <ul id="itemList">
                                                <li id="list-item1">Sort
                                                </li>
                                                <li id="list-item2">Delivery Time</li>
                                                <li id="list-item3">Cuisines</li>
                                                <li id="list-item4">Explore</li>
                                                <li id="list-item5">Ratings</li>
                                                <li id="list-item6">Veg/Non-Veg</li>
                                                <li id="list-item7">Offers</li>
                                                <li id="list-item8">Cost for two</li>
                                            </ul>

                                        </div>

                                        <div class="col-7 " id="right-section">

                                            <div id="item1" class="hidden-list-items">
                                                <div>SORT BY</div>
                                                <input type="radio" id="item1-optionA" checked name="sort-options">
                                                <label for="item1-optionA">Relevance (Default)</label><br>

                                                <input type="radio" id="item1-optionB" name="sort-options">
                                                <label for="item1-optionB">Delivery Time</label><br>

                                                <input type="radio" id="item1-optionC" name="sort-options">
                                                <label for="item1-optionC">Rating</label><br>

                                                <input type="radio" id="item1-optionD" name="sort-options">
                                                <label for="item1-optionD">Cost: Low to High</label><br>

                                                <input type="radio" id="item1-optionE" name="sort-options">
                                                <label for="item1-optionE">Cost: High to Low</label>
                                            </div>
                                            <div id="item2" class="hidden-list-items" style="display:none">
                                                <div class="">
                                                    FILTERBY
                                                </div>
                                                <input type="radio" id="item2" name="item2-optionA">
                                                <label for="item2-optionA">Fast Delivery</label><br>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer modal-foot" style="display:none">
                                    <button type="button" class="btn clear-button " data-bs-dismiss="modal">Clear
                                        Filters</button>
                                    <button type="button" class="btn apply-button">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-items list-dropdown sorting-option border">
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sort By
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <div class="dropdown-item">
                                <input type="radio" id="item1-optionA" checked name="sort-options">
                                <label for="item1-optionA">Relevance (Default)</label><br>
                            </div>

                            <div class="dropdown-item">
                                <input type="radio" id="item1-optionB" name="sort-options">
                                <label for="item1-optionB">Delivery Time</label><br>

                            </div>
                            <div class="dropdown-item">
                                <input type="radio" id="item1-optionC" name="sort-options">
                                <label for="item1-optionC">Rating</label><br>
                            </div>

                            <div class="dropdown-item">
                                <input type="radio" id="item1-optionD" name="sort-options">
                                <label for="item1-optionD">Cost: Low to High</label><br>

                            </div>

                            <div class="dropdown-item">
                                <input type="radio" id="item1-optionE" name="sort-options">
                                <label for="item1-optionE">Cost: High to Low</label>
                            </div>
                            <hr>
                            <button type="button" style="color:orangered" class="btn">Apply</button>
                        </ul>
                    </div>
                </div>
                <div class="list-items sorting-option border" data-filter="fast_delivery">Fast delivery</div>
                <div class="list-items sorting-option border" data-filter="new_on_swiggy">New on Swiggy</div>
                <div class="list-items sorting-option border" data-filter="rating">Ratings 4.0+</div>
                <div class="list-items sorting-option border" data-filter="pure_veg">Pure Veg</div>
                <div class="list-items sorting-option border" data-filter="offers">Offers</div>
                <div class="list-items sorting-option border" data-filter="300_600">Rs. 300-Rs. 600</div>

                <div class=" search_for border"><a href="{{route('search')}}">Search for restaurant and food </a>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="container">
        <div class="row">

            <div class="row card-row2  " id="restaurantList">

                @foreach ($restaurant as $resto)

                    <div class="col-xl-4 col-xxl-3 col-lg-6 col-sm-16 col-md-6  col-6 d-flex justify-content-center mb-4 ">
                        <a href="{{route('restaurant.showMenu', $resto->id)}}">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset($resto->image)}}" class="card-img-top" height="200px" width="100px"
                                    alt="...">
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
                                    <div class="card-time"><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
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


            </div>



        </div>


    </div>


    <div class="container places-container">
        <div class="row ">
            <div class="best_places">Best Places to Eat Across Cities</div>
        </div>
        <div class="row places">

            @foreach ($cities as $city)


                <div class="col-6 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                        href="{{route('city.restaurants', $city->city)}}">Best Restaurants in {{$city->city}}</a>
                </div>


            @endforeach

            <div class="col-6 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><button
                    class="show_more_button">Show More<span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67" />
                        </svg></span>
                </button></div>
        </div>
    </div>
    <div class="container cuisines-container">
        <div class="row ">
            <div class="cuisines_places">Best Cuisines Near Me</div>
        </div>
        <div class="row places">
            @foreach ($cuisines as $cuisine)

                <div class="col-6 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 ">
                    <a class="border" href="{{route('cuisine.restaurants', $cuisine->id)}}">{{$cuisine->name}} Restaurant
                        Near Me</a>
                </div>


            @endforeach
            <div class="col-6 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 ">
                <button class="show_more_button">Show More<span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67" />
                        </svg></span>
                </button>
            </div>
        </div>
    </div>
    <div class="container near_by_container">
        <div style="margin-left:0px" class="row near_by_places">Explore Every Restaurants Near Me</div>
        <div class="row places">
            <div class="d-flex justify-content-center mb-4 col-md-6 col-12"><a class="border" href="#">Explore
                    Restaurants Near Me</a></div>
            <div class="d-flex justify-content-center mb-4 col-md-6 col-12"><a class="border" href="#">Explore Top Rated
                    Restaurants Near Me</a></div>
        </div>
    </div>
    @include('swiggy_layouts.upper_footer')
    @include('swiggy_layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/home_layout.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.sorting-option').on('click', function () {
                var filter = $(this).data('filter');



                $.ajax({
                    url: "{{ route('restaurants.filter') }}",
                    method: "GET",
                    data: {
                        filter: filter,
                    },
                    success: function (response) {
                        $('#restaurantList').html(response);
                    },
                    error: function () {
                        alert('Something went wrong');
                    }
                });
            });
        });
    </script>
   
</body>

</html>