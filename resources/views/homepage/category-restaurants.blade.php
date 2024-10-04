<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">



    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/home_layout.css')}}">

</head>
<style>
    .cat-container .cat-des {
        font-size: 18px;
        color: #686b78
    }

    .cat-container .cat-name {
        font-size: 40px;
        font-weight: 600;
        padding-top: 57px;
    }

    .resto-count {
        font-weight: 800;
        font-size: 24px;
        padding-left: 15px;
        padding-bottom: 26px;
    }
</style>

<body>
    @include('swiggy_layouts.navbar') 
    <div class="container cat-container">
        <div class="cat-name">{{$item->name}}</div>
        <div class="cat-des">Transport your taste buds to the heart of Chinese cuisine with these scrumptious dishes.
        </div>
    </div>
    <div class="container-fluid sticky_container ">
        <div class="container  list-options">
            <div class="row sorting-options  justify-content-start">
                <div class=" list-modal sorting-option border">

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

                                            <div id="item1" class="hidden-list-items" style="display:none">
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
                <div class=" list-dropdown sorting-option border">
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
                <div class="  list-items sorting-option border">Fast delivery
                </div>
                <div class=" list-items sorting-option border">New on Swiggy
                </div>
                <div class=" list-items sorting-option border">Ratings 4.0+
                </div>
                <div class=" list-items sorting-option border">Pure Veg</div>
                <div class=" list-items sorting-option border">Offers</div>
                <div class=" list-items sorting-option border">Rs. 300-Rs. 600
                </div>
                <div class=" list-items sorting-option border">Less than Rs. 300 </div>
                <div class=" search_for border"><a href="{{route('search')}}">Search for restaurant and food </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="row card-row2 ">
                <div class="resto-count">{{$no_restaurant}} restaurants to explore</div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/home.js')}}"></script>
    <script src="{{asset('js/home_layout.js')}}"></script>
</body>

</html>