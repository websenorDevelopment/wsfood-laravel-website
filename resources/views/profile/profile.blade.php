<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home_layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">



    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>

<body>
    @include('swiggy_layouts.navbar')


    <div class="container-fluid user_detail_container-fluid  ">
        <div class="container user_detail_container">
            <div class="row d-flex ">

                <div class="user_detail">
                    <div class="user_name ">Nikita</div>
                    <div class="mb-2">
                        8989898989 . <span>nikkiyadav@gmail.com</span>
                    </div>
                </div>
                <div class="user_edit">

                    <!-- Button trigger modal -->
                    <button type="button" class="edit_btn btn mb-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal4">
                        EDIT PROFILE
                    </button>

                    <!-- Modal -->
                    <div class="modal fade user_edit_modal" id="exampleModal4" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button><div>Edit Profile</div>
                                </div>
                                <div class="modal-body">
                                    <div class="form">
                                        <div class="phone">Phone Number:</div>
                                        <div class="d-flex">
                                            <div>6353408305</div>
                                            <button class="change_btn">
                                                CHANGE

                                            </button>
                                        </div>
                                        <hr>
                                        <div class="email">Email Address:</div>
                                        <div class="d-flex">
                                            <div>choudharyun8329@gmail.com</div>
                                            <button class="change_btn">CHANGE</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container second_container">
        <div class="list_container  d-flex">

            <div class="col-md-3 me-3">
                <nav class=" navbar-expand-md navbar-light bg-light">
                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" height="20px"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
                                </svg></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav d-flex mt-2">
                                <li class="list-btn  active_list_btn">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path
                                                d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64l0 48-128 0 0-48zm-48 48l-64 0c-26.5 0-48 21.5-48 48L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-208c0-26.5-21.5-48-48-48l-64 0 0-48C336 50.1 285.9 0 224 0S112 50.1 112 112l0 48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
                                        </svg>
                                    </span><a class="list_items" data-target="#list1">Orders</a>
                                </li>
                                <li class="list-btn"><span><svg xmlns="http://www.w3.org/2000/svg"
                                            class="rounded-circle " viewBox="0 0 384 512">
                                            <path
                                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                        </svg></span><a class="list_items " data-target="#list2" href="#list2">Swiggy
                                        One</a></li>
                                <li class="list-btn"><span><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                                        </svg></span><a class="list_items" data-target="#list3"
                                        href="#list3">Favourites</a></li>
                                <li class="list-btn"><span><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512">
                                            <path
                                                d="M512 80c8.8 0 16 7.2 16 16l0 32L48 128l0-32c0-8.8 7.2-16 16-16l448 0zm16 144l0 192c0 8.8-7.2 16-16 16L64 432c-8.8 0-16-7.2-16-16l0-192 480 0zM64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24l48 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-48 0zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l112 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-112 0z" />
                                        </svg></span><a class="list_items" data-target="#list4"
                                        href="#list4">Payments</a></li>
                                <li class="list-btn"><span><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 384 512">
                                            <path
                                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                        </svg></span><a class="list_items" data-target="#list5"
                                        href="#list5">Addresses</a></li>
                                <li class="list-btn mb-4"><span><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                                        </svg></span><a class="list_items" data-target="#list6"
                                        href="#list6">Settings</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <ul class="d-flex">

                </ul>
            </div>
            <div class="items col-md-9">
                <div class="list_item active" id="list1">
                    <div class="row past_order_heading ms-1 mt-3">Past Orders
                    </div>
                    <div class=" border order_padding mb-3" id="list1">

                        <div class="row">
                            <div class="d-flex orders_row">
                                <div class="d-flex orders_inner_row ">
                                    <img height="200px" width="300px" class="order_img me-2"
                                        src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_200,c_fill/jn6kkqizyqlciuoeq3sr"
                                        alt="">
                                    <span>
                                        <div class="resto_name">Royal Punjabi (Pure Veg)</div>
                                        <div class="resto_address">Hiran magri</div>
                                        <div class="order_number">ORDER #167903235837651 | Mon, Feb 26, 2024, 01:17
                                            PM
                                        </div>
                                        <div><button class="view_detail_btn">VIEW DETAILS</button></div>
                                    </span>
                                </div>
                                <div>Delivered on Mon, Feb 26, 2024, 01:40 PM <span><svg
                                            style="    height: 20px; margin-left: 4px;fill: green;"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                        </svg></span>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row d-flex order_detail">
                            <div class="order">Kadai Paneer x 1, Butter Tandoori Roti x 5</div>
                            <div class="order">Total Paid: 170
                            </div>
                        </div>
                        <div class="row order_btns mt-3 d-flex">
                            <div class="bttn">
                                <button class="reorder_btn btn ">REORDER</button>
                            </div>
                            <span class="bttn">
                                <button class="help_btn btn">HELP</button>
                            </span>
                        </div>
                    </div>
                    <div class="show_more_div border">
                        <button class="btn show_more_btn ">Show More Orders</button>
                    </div>
                </div>
                <div class="list_item" id="list2">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="past_order_heading ms-1 mt-3">Swiggy One</div>
                            <div class="mt-4">Get free delivery and extra discounts all across Swiggy.
                                Your Swiggy One benefits can be availed only on the Swiggy App.</div>
                            <div class="mt-4">
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

                        <div class="col-12 col-sm-12 col-md-6">
                            <img class=" mt-5 swiggy_one_img"
                                src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_720,h_660/swiggy_one/my_account_super"
                                alt="">
                        </div>
                    </div>

                </div>
                <div class="list_item" id="list5">
                    <div class="past_order_heading ms-1 mt-3 mb-5">Manage Addresses</div>
                    <div class="row d-flex">
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="border">
                                <div><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path
                                                d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                        </svg></span>
                                    Home
                                </div>
                                <div class="address">Girls Hostel, Ganapati Nagar, Udaipur, Rajasthan 313001, India
                                </div>
                                <div class="address_btns">
                                    <button class="edit_btn">EDIT</button>
                                    <button class="delete_btn">DELETE</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="border">
                                <div><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path
                                                d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                        </svg></span>
                                    Home
                                </div>
                                <div class="address">Girls Hostel, Ganapati Nagar, Udaipur, Rajasthan 313001, India
                                </div>
                                <div class="address_btns">
                                    <button class="edit_btn">EDIT</button>
                                    <button class="delete_btn">DELETE</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mb-5">
                            <div class="border">
                                <div><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path
                                                d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                        </svg></span>
                                    Home
                                </div>
                                <div class="address">Girls Hostel, Ganapati Nagar, Udaipur, Rajasthan 313001, India
                                </div>
                                <div class="address_btns">
                                    <button class="edit_btn">EDIT</button>
                                    <button class="delete_btn">DELETE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list_item" id="list6">
                    <div class=" past_order_heading ms-1 mt-3">SMS Preferences</div>
                    <div class="border mb-3 ">Order related SMS cannot be disabled as they are critical to provide
                        service</div>
                    <div class=" row d-flex border ">
                        <div class="col-12 col-md-6 border-end">Recommendations & Reminders<span><label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label></span></div>
                        <div class="col-12 col-md-6">
                            Keep this on to receive offer recommendations & timely reminders based on your interests
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#item1').show();

            $('.list_items').on('click', function () {
                var target = $(this).data('target');
                $('.list_items').parent().removeClass('active_list_btn');

                $('.list_item').hide().removeClass('active');


                $(target).fadeIn().addClass('active');
                $(this).parent().addClass('active_list_btn');
            });
        });
        $(document).ready(function () {
            $(window).on('scroll', function () {
                var windowScroll = $(this).scrollTop();
                var containerOffset = $('.second_container').offset().top;
                var containerHeight = $('.second_container').outerHeight();


                if (windowScroll >= containerOffset && windowScroll < containerOffset + containerHeight) {
                    $('body').css('background-color', 'white');
                } else {
                    $('body').css('background-color', '#37718e');
                }
            });
        });

    </script>
    <script src="{{asset('js/home_layout.js')}}"></script>
</body>

</html>