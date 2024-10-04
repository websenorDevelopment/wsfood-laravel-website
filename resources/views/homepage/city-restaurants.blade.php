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
    <link rel="stylesheet" href="{{asset('css/offers_near.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/home_layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/about_us_layout.css')}}">

</head>

<body>
@include('swiggy_layouts.secondNavbar')



    <div class="container food_cards_container">
        <div class="row home_row  ">
            <h6>Home <span>/Offers</span>
                <div class="heading">Best Restaurants in {{$cityname}}</div>
            </h6>
        </div>
        <div class="container-fluid sticky_container sticky-top">
            <div class="container  list-options">
                <div class="row sorting-options flex-wrap  justify-content-start">
                    <div class=" list-modal sorting-option border">

                        <button type="button" class="filter-button " data-bs-toggle="modal"
                            data-bs-target="#exampleModal4">
                            Filter <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
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
        <div class="row card-row ">
            @foreach ($restaurant as $resto)
                <div class=" d-flex justify-content-center mb-4  ">


                    <a href="{{ route('restaurant.showMenu', $resto->id) }}">
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


        </div>


    </div>
    <div class="container text-container border">
        <h2 class="heading">Get the best offers on the food from top restaurants near you</h2>
        <div class="inner_text">Get ready for a scrumptious adventure filled with unbeatable offers on your favourite
            foods and
            restaurants. Whether you're in the mood for a cheesy pizza, a sizzling burger, or a delightful bowl of
            pasta, now is the perfect time to satisfy your cravings while saving big.

            <div class="ellipsis inner_text">
                All the top-rated restaurants and popular eateries are rolling out enticing deals and discounts that are
                too
                good to resist. From mouthwatering buy-one-get-one-free offers to irresistible combo meals, there's
                something for everyone on Swiggy to relish without breaking the bank.

                Imagine biting onto a juicy burger paired with a side of crispy fries, all at a fraction of the regular
                price. Or how about treating yourself to a cheesy, oven-fresh pizza with your favourite toppings without
                worrying about the bill? With these incredible offers, indulging in your beloved dishes has never been
                more
                budget-friendly.

                So, whether you're planning a cosy night in, a family feast, or a fun dinner with friends, take
                advantage of
                these fantastic deals. It's time to savour the flavours you adore without emptying your wallet. Order
                now,
                support your local restaurants, and make every meal a delightful and cost-effective experience. Don't
                miss
                out – let your taste buds rejoice, and your savings grow with these irresistible food offers on Swiggy!
            </div>
        </div>
        <div class="see_more">
            See more
        </div>
    </div>
    <div class="container places-container">
        <div class="row ">
            <div class="best_places">Best Places to Eat Across Cities</div>
        </div>
        <div class="row places">
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>

            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>

            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><button
                    class="show_more_button">Show More<span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67" />
                        </svg></span>
                </button></div>
        </div>
    </div>
    <div class="container places-container">
        <div class="row ">
            <div class="best_places">Best Places to Eat Across Cities</div>
        </div>
        <div class="row places">
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>

            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>

            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><button
                    class="show_more_button">Show More<span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67" />
                        </svg></span>
                </button></div>
        </div>
    </div>
    <div class="container places-container">
        <div class="row ">
            <div class="best_places">Best Places to Eat Across Cities</div>
        </div>
        <div class="row places">
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>

            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>

            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><a class="border"
                    href="#">Best Restaurants in Pune</a></div>
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-center mb-4 "><button
                    class="show_more_button">Show More<span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67" />
                        </svg></span>
                </button></div>
        </div>
    </div>
    <footer class="text-center  ">
        <section class="container footer-container">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                        <!-- Content -->
                        <div><img
                                src="https://www.swiggy.com/about-us/wp-content/uploads/2024/03/swiggy-transparent-logo.png"
                                class="attachment-large size-large wp-image-7320" alt="">
                        </div>
                        <p>
                            © 2024 Swiggy Limited
                            <br>
                            <br>
                            No. 55 Sy No 8 to 14 I & J Block – Ground
                            Floor Embassy Tech Village | Outer Ring
                            Road Devarbisanahalli Varthur
                            Bengaluru – 560130
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="fw-bold mb-4">
                            Company
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">About

                            </a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Careers</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Team</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Swiggy One</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Swiggy Instamart</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Swiggy Genie</a>
                        </p>
                    </div>


                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <div class="row">
                            <h6 class=" fw-bold mb-4">
                                Contact Us
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Help & Support

                                </a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Partner with us</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Ride with us</a>
                            </p>
                        </div>
                        <div class="row">
                            <h6 class=" fw-bold mb-4">
                                Legal
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Cookie Policy



                                </a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Privacy Policy</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Investor Relations</a>
                            </p>
                        </div>

                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="fw-bold mb-4">We Deliver To:</h6>
                        <p>
                            <a href="#!" class="text-reset">Bangalore</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Gurgaon
                            </a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Hyderabad</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Delhi</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Mumbai</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pune</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">589 cities</a>
                        </p>


                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <div class="row">
                            <h6 class="fw-bold mb-4">Life At Swiggy</h6>
                            <p>
                                <a href="#!" class="text-reset">Explore with Swiggy

                                </a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Swiggy News
                                </a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Snackables</a>
                            </p>

                            <div>

                            </div>
                        </div>
                        <div class="row">
                            <h6 class="fw-bold mb-4">Social Links</h6>
                            <div>
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                        <path
                                            d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3 .8-3.4 5-20.3 6.9-28.1 .6-2.5 .3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z" />
                                    </svg></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                                    </svg></span>
                            </div>
                        </div>

                    </div>

                </div>
                <hr>
                <br>

                <div class=" upper-footer ">
                    <div class="container justify-content-center">
                        <div class="row upper-footer-row">
                            <div class="col-lg-6 col-sm-12 col-md-6 footer-text">For better experience,download the
                                Swiggy app now
                            </div>
                            <div class="col-lg-6 col-sm-12 col-md-6 mb-3">
                                <a href=""><img
                                        src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/portal/m/play_store.png"
                                        height="64px" width="208px" alt=""></a>
                                <span>
                                    <a href=""><img
                                            src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/portal/m/app_store.png"
                                            height="64px" width="208px" alt=""></a>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/home.js')}}"></script>
    <script src="{{asset('js/home_layout.js')}}"></script>
</body>

</html>