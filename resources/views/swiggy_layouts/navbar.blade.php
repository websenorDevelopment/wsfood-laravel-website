<div class="about_us_navbar  ">
    <nav class="navbar  navbar-expand-xl  ">
        <div class=" container navbar-container ">

            <span>
                <a href="{{route('home_page')}}">
                    <img height="45px" class="swiggy-logo"
                        src="https://logolook.net/wp-content/uploads/2023/04/Swiggy-Emblem.png" alt="">
                </a>
            </span>
            <button type="button" class="nav-home d-flex" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <span class="home">Home
                </span> <span class="dropdown">Ganpati Nagar, Udaipur,
                    Rajasthan</span>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="dropdown-icon bi bi-caret-down" viewBox="0 0 16 16">
                        <path
                            d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659" />
                    </svg>
                </span>


            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content  modal1-content">
                        <div class="modal-header sticky-top row modal1-header">
                            <div class="col ">

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button><br>
                                <div class="border">
                                    <input placeholder="Search for area, street name.." class="" style="border:none"
                                        type="text">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body row">

                            <div class="col">
                                <div class="row" style="margin-bottom: 25px;">
                                    <div class="border address-type">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-crosshair" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.5.5a.5.5 0 0 0-1 0v.518A7 7 0 0 0 1.018 7.5H.5a.5.5 0 0 0 0 1h.518A7 7 0 0 0 7.5 14.982v.518a.5.5 0 0 0 1 0v-.518A7 7 0 0 0 14.982 8.5h.518a.5.5 0 0 0 0-1h-.518A7 7 0 0 0 8.5 1.018zm-6.48 7A6 6 0 0 1 7.5 2.02v.48a.5.5 0 0 0 1 0v-.48a6 6 0 0 1 5.48 5.48h-.48a.5.5 0 0 0 0 1h.48a6 6 0 0 1-5.48 5.48v-.48a.5.5 0 0 0-1 0v.48A6 6 0 0 1 2.02 8.5h.48a.5.5 0 0 0 0-1zM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                            </svg>
                                        </span>
                                        Get current location
                                        <div class="saved-address">
                                            Using GPS
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class=" border">

                                        <div class="saved-address" style=" padding-bottom: 20px;">SAVED ADDRESSES
                                        </div>
                                        <div>
                                            <div class="address-type">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-house-door"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                                                    </svg>
                                                </span>
                                                Home
                                            </div>
                                            <div class="saved-address">
                                                Girls Hostel, Ganapati Nagar, Udaipur, Rajasthan 313001, India
                                            </div>


                                        </div>
                                        <hr class="border-top: dotted;">
                                        <div>
                                            <div class="address-type">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                                                        <path
                                                            d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5" />
                                                    </svg>
                                                </span>
                                                Work
                                            </div>
                                            <div class="saved-address">
                                                Girls Hostel, Ganapati Nagar, Udaipur, Rajasthan 313001, India
                                            </div>

                                        </div>
                                        <div>
                                            <button>View More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- </div> -->

            <button class="navbar-toggler" style="margin-left:auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" navbar-collapse collapse navbar-options" id="navbarNavDropdown">
                <ul class="navbar-nav  ">

                    <li class="nav-item ">

                        <a class="nav-link" href="{{url('/about_us')}}">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class=" nav-icons bi bi-archive" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                </svg>

                            </span>Swiggy Corporate

                        </a>

                    </li>

                    <li class="nav-item d-flex">


                        <a class="nav-link" href="{{route('search')}}"> <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="nav-icons bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                            </span>Search</a>



                    </li>

                    <li class="nav-item d-flex">


                        <a class="nav-link" href="{{route('offers-near-me')}}"><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="nav-icons bi bi-cookie" viewBox="0 0 16 16">
                                    <path
                                        d="M6 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m4.5.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                    <path
                                        d="M8 0a7.96 7.96 0 0 0-4.075 1.114q-.245.102-.437.28A8 8 0 1 0 8 0m3.25 14.201a1.5 1.5 0 0 0-2.13.71A7 7 0 0 1 8 15a6.97 6.97 0 0 1-3.845-1.15 1.5 1.5 0 1 0-2.005-2.005A6.97 6.97 0 0 1 1 8c0-1.953.8-3.719 2.09-4.989a1.5 1.5 0 1 0 2.469-1.574A7 7 0 0 1 8 1c1.42 0 2.742.423 3.845 1.15a1.5 1.5 0 1 0 2.005 2.005A6.97 6.97 0 0 1 15 8c0 .596-.074 1.174-.214 1.727a1.5 1.5 0 1 0-1.025 2.25 7 7 0 0 1-2.51 2.224Z" />
                                </svg></span>Offers<span class="badge">New</span></a>




                    </li>

                    <li class="nav-item d-flex">

                        <a class="nav-link" href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="nav-icons bi bi-info-circle"
                                    viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path
                                        d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg></span>Help</a>



                    </li>

                    <li class="nav-item signUp-item d-flex">

                        <a class="nav-link" href="#">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="nav-icons i bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                </svg>
                            </span>


                            <button type="button" class="sign_in_btn" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">
                                Sign In
                            </button>


                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content signIn_modal">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>


                                        <section class="signUp_section">
                                            <div class="modal-body">
                                                <div class="row d-flex justify-content-between">
                                                    <div class="signUp_div">
                                                        <div class="modal_signUp">Sign Up</div>
                                                        <div>or<span>
                                                                <button type="button" class="loginbtn"
                                                                    id="openSignInSection">
                                                                    Login to your account
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="signUp_div">
                                                        <img height="100px" width="100px"
                                                            src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/Image-login_btpq7r"
                                                            alt="">
                                                    </div>
                                                </div>

                                                <form method="POST">
                                                    @csrf
                                                    <div class="">
                                                        <input type="tel" class="form-control border-bottom-0"
                                                            id="phone" name="phone"
                                                            placeholder="Enter your phone number" required>
                                                    </div>
                                                    <div class="">
                                                        <input type="text" class="form-control border-bottom-0"
                                                            id="name" name="name" placeholder="Enter your name"
                                                            required>
                                                    </div>
                                                    <div class="">
                                                        <input type="email" class="form-control" id="email" name="email"
                                                            placeholder="Enter your email" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a href="#">Have a referral code?</a>
                                                    </div>

                                                    <div class="d-grid">
                                                        <button type="submit"
                                                            class="btn btn-primary continue_btn">Continue</button>
                                                        <p>By creating an account, I accept the <span>Terms & Conditions
                                                                & Privacy Policy</span></p>
                                                    </div>
                                                </form>
                                            </div>
                                        </section>


                                        <section class="signIn_section" style="display: none;">
                                            <div class="modal-body">
                                                <div class="row d-flex justify-content-between">
                                                    <div class="signUp_div">
                                                        <div class="modal_login">Login</div>
                                                        <div>or

                                                            <button type="button" class="signIn_btn"
                                                                id="openSignUpSection">
                                                                Create an account
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="signUp_div">
                                                        <img height="100px" width="100px"
                                                            src="https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/Image-login_btpq7r"
                                                            alt="">
                                                    </div>
                                                </div>

                                                <form method="POST">
                                                    <div class="mb-5">
                                                        <input type="tel" class="form-control" id="phone_number"
                                                            name="phone" placeholder="Enter your phone number" required>
                                                    </div>

                                                    <div class="d-grid">
                                                        <button type="submit" class="btn login_btn">Login</button>
                                                        <p>By clicking on Login, I accept the<span>Terms & Conditions &
                                                                Privacy Policy</span></p>
                                                    </div>
                                                </form>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>


                    <li class="nav-item d-flex">




                        <a class="nav-link" href="#"><span> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="nav-icons bi bi-basket" viewBox="0 0 16 16">
                                    <path
                                        d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5" />
                                </svg></span>Cart</a>
                        <div class="cart_hidden_div ">
                            <div class="cart_empty mb-3">
                                Cart Empty
                            </div>
                            <div class="cart_inner">

                                Good food is always cooking! Go ahead, order some yummy items from the menu.
                            </div>
                        </div>


                    </li>



                </ul>
            </div>

        </div>
    </nav>
</div>