<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css"
        integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/about_us_home.css')}}">
    <link rel="stylesheet" href="{{asset('css/about_us_layout.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>


<body>

    <nav class="navbar about_us_nav navbar-expand-xl navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="{{route('home_page')}}">
                <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/03/swiggy-logo.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About Swiggy
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Swiggy Journey</a></li>
                                <li><a class="dropdown-item" href="#section_member">Our Team</a></li>
                                <li><a class="dropdown-item" href="#section_career">Careers</a></li>
                                <li><a class="dropdown-item" href="#section_blogs">Blogs</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Businesses</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Delivering For Everyone
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Ride with Swiggy</a></li>
                                <li><a class="dropdown-item" href="#">Swiggy Restaurant Partner Programme</a></li>
                                <li><a class="dropdown-item" href="#">Swiggy Restaurant Awards</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Newsroom</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sustainability
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Environment</a></li>
                                <li><a class="dropdown-item" href="#">Social</a></li>
                                <li><a class="dropdown-item" href="#">Governance</a></li>
                                <li><a class="dropdown-item" href="#">Our Initiatives</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Investor Relations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>

        @yield('content')
    </main>
    <div class="container-fluid upper_footer">
        <div class="container">
            <div class="row about_upper_footer_row">
                <div class="col-12 col-sm-6 mb-2">
                    <div>
                        <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/03/swiggy-transparent-logo.png"
                            height="25px" class="attachment-large size-large wp-image-7320" alt="">
                    </div>
                    <div class="upper_footer_text">Get the Swiggy App now!</div>
                    <div class="upper_footer_inner_text">For best offers and discounts curated specially for you </div>
                </div>
                <div class="col-12 col-sm-6">
                    <img class="scanner_img"
                        src="https://www.oflox.com/blog/wp-content/uploads/2020/12/QR-Code-Scanner-Online-Without-App.png"
                        height="185px" alt="">
                </div>
            </div>
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


</body>

</html>