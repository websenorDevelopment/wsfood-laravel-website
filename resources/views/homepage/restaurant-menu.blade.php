<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home_layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiggy-resto.css')}}">




    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @include('swiggy_layouts.navbar')   

    <div class="main_container container">
        <div class="container home_container">
            <div class="home">
                Home <span>/ Udaipur</span>
                <span>
                    /{{$restaurant->name}}</span>
            </div>
        </div>
        <div class="container order-details-container">
            <div class="resto-name">{{$restaurant->name}}</div>
            <div class="gradient_bg">
                <div class="border ">
                    <div class="rating"><span><svg xmlns="http://www.w3.org/2000/svg" class="star-icon"
                                viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg></span>
                        {{$restaurant->rating}} (5.7K+ ratings)
                        •
                        ₹200 for twos
                    </div>
                    <div>
                        <a href="#"> North Indian, Biryani</a>

                    </div>
                    <div class="outlet">
                        Outlet <span class="add_span">Hiran Magri</span>
                    </div>
                    <div class="outlet">15-20 mins</div>

                    <hr>
                    <div class="free-delivery">
                        <span><img
                                src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_86,h_30/Swiggy%20One%20Lite/One_lite_Horizontal.png"
                                alt="" style="vertical-align: middle; height: 15px; width: 43px;"></span>
                        Free delivery on orders above ₹199
                    </div>
                </div>
            </div>
        </div>
        <div class="container offers_container">
            <div class="d-flex deals_div">
                <div class="deals">Deals for you</div>
                <div>
                    <div class="scroll-btn-row">
                        <button class="scroll-btn scroll-btnB" data-target="#offers_div"><svg
                                xmlns="http://www.w3.org/2000/svg" class="scroll_arrows" viewBox="0 0 448 512">
                                <path
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                            </svg></button>
                        <button class="scroll-btn scroll-btnF " data-target="#offers_div"><svg
                                xmlns="http://www.w3.org/2000/svg" class="scroll_arrows" viewBox="0 0 448 512">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg></button>
                    </div>
                </div>
            </div>
            <div id="offers_div" class="offers_div d-flex">
                <div class="d-flex border">

                    <span>
                        <img class="sc-bmzYkS hJYmYK"
                            src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_96,h_96/offers/welcome"
                            width="48" height="48" alt="Flat ₹125 Off">
                    </span>
                    <div>
                        <div class="flatOff">
                            Flat ₹125 Off
                        </div>
                        <div class="offers">USE WELCOMEBACK125</div>

                    </div>
                </div>
                <div class="d-flex border">

                    <span>
                        <img class="sc-bmzYkS hJYmYK"
                            src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_96,h_96/offers/welcome"
                            width="48" height="48" alt="Flat ₹125 Off">
                    </span>
                    <div>
                        <div class="flatOff">
                            Flat ₹125 Off
                        </div>
                        <div class="offers">USE WELCOMEBACK125</div>

                    </div>
                </div>
                <div class="d-flex border">

                    <span>
                        <img class="sc-bmzYkS hJYmYK"
                            src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_96,h_96/offers/welcome"
                            width="48" height="48" alt="Flat ₹125 Off">
                    </span>
                    <div>
                        <div class="flatOff">
                            Flat ₹125 Off
                        </div>
                        <div class="offers">USE WELCOMEBACK125</div>

                    </div>
                </div>
            </div>
        </div>
        <div class="menu_container container">
            <div>

                <span>
                    <div class="menu">Menu</div>
                </span>


            </div>
            <div>
                <button class="menu_srch_btn">
                    <div>Search for dishes <span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                fill="currentColor" class="nav-icons bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0">
                                </path>
                            </svg></span></div>
                </button>
            </div>
            <div class="togglers border-bottom d-flex">
                <span class="border veg_border"><label class="switch">
                        <input type="checkbox">
                        <span class="slider1 slider round"></span>
                    </label></span>
                <span class="border veg_border">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider2 slider round">

                        </span>
                    </label>
                </span>
                <span class=" border best_btn">
                    <button> Bestseller</button>
                </span>
            </div>
        </div>
        <div class="menu_repeat_container container">
            <div class="repeat">
                Want to repeat?
            </div>
            <div class="border">
                <div class="repeat_item row">
                    <div class="col">

                        Burgery Pizza- Classic Veg
                    </div>
                    <div class="col">
                        <button class="btn repeat_add">Add</button>
                    </div>
                </div>
                <div>₹100</div>
            </div>
        </div>
   

        <div class="top_picks_container container">
            <div class="d-flex justify-content-between">
                <div class="repeat">Top Picks</div>
                <div>
                    <button class="scroll-btn scroll-btnB" data-target="#offers_div"><svg
                            xmlns="http://www.w3.org/2000/svg" class="scroll_arrows" viewBox="0 0 448 512">
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                        </svg></button>
                    <button class="scroll-btn scroll-btnF " data-target="#offers_div"><svg
                            xmlns="http://www.w3.org/2000/svg" class="scroll_arrows" viewBox="0 0 448 512">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg></button>

                </div>
            </div>
            <div class="d-flex top_pick_row">
                <div class="top_pick_item"
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),
                       rgba(0, 0, 0, 0.5)), url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLPkfExPzKhNzG8-qXB3S1AsHGHerJeqbpOXhew5mrFgq0iA-e-rk0GruwhQ&s')">
                    <div class="item">Garlic Bread Sticks</div>
                    <div class="des">Perfectly Baked</div>

                    <div class="d-flex justify-content-between">
                        <div> ₹199</div>
                        <div><button class="btn repeat_add">ADD</button></div>
                    </div>
                </div>
                <div class="top_pick_item"
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),
                       rgba(0, 0, 0, 0.5)), url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLPkfExPzKhNzG8-qXB3S1AsHGHerJeqbpOXhew5mrFgq0iA-e-rk0GruwhQ&s')">
                    <div class="item">Garlic Bread Sticks</div>
                    <div class="des">Perfectly Baked</div>

                    <div class="d-flex justify-content-between">
                        <div> ₹199</div>
                        <div><button class="btn repeat_add">ADD</button></div>
                    </div>
                </div>
                <div class="top_pick_item"
                    style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),
                       rgba(0, 0, 0, 0.5)), url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLPkfExPzKhNzG8-qXB3S1AsHGHerJeqbpOXhew5mrFgq0iA-e-rk0GruwhQ&s')">
                    <div class="item">Garlic Bread Sticks</div>
                    <div class="des">Perfectly Baked</div>

                    <div class="d-flex justify-content-between">
                        <div> ₹199</div>
                        <div><button class="btn repeat_add">ADD</button></div>
                    </div>
                </div>

            </div>
        </div>
        
        @foreach ($restaurant->categories as $category)
        <div class="container menu_item_container">
            <div class="d-flex">
                
                <div class="item_name"> {{$category->name}} ({{$category->menus_count}})</div>
                <div>

                </div>
            </div>
            @foreach ($category->menus as $menu )
            
            <div class="d-flex justify-content-between border-top item_detail">
                <div>
                    <div class="item_type">{{$menu->name}}</div>
                    <div class="item-price"> ₹{{$menu->price}}</div>
                    <div class="item-rating"><span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="star-icon">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </span>{{$menu->rating}} <span class="item-count">(245)</span></div>
                    <div class="item-des">{{$menu->description}}</div>
                </div>
                <div>
                    <img class="item-img" src="{{asset($menu->image)}}"
                        alt="">
                       <div class="item-btn">
                       <button class="btn repeat_add ">Add</button>
                       <div class="custm">Customisable</div>
                       </div>
                </div>
            </div>
            @endforeach


        </div>
        @endforeach
      

    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/home_layout.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>

</body>

</html>