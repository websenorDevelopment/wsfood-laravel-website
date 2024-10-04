@extends('swiggy_layouts.about_us_layouts')
@section('content')

<main class="about_us_page">


    <div class="container-fluid first_container">
        <div class="row">
            <div class="col-md-3">
                <div class="nav_img">
                    <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/DE-on-bike-2-2.png"
                        class="attachment-full size-full wp-image-1129" alt="">
                </div>
            </div>
            <div class="col-md-6 middle_col">
                <div class="about_swiggy">About Swiggy</div>
                <div class="inner-text">Swiggy is a new-age consumer-first organization offering an easy-to-use
                    convenience
                    platform,
                    accessible through a unified app.</div>
                <div class="side_nav_img">
                    <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/DE-on-bike-2-2.png"
                        class="attachment-full size-full wp-image-1129 side_img" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="bucket_img">
                    <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/03-Instamart_3_front_view_2_skycolour.png"
                        alt="">
                </div>

            </div>



        </div>
    </div>

    <div class="container second_container">
        <div class="row tab_row d-flex">
            <div class="mb-3"><button class="tab_button active_button" data-target="#section1">Mission</button></div>
            <div class="mb-3"><button class="tab_button" data-target="#section2">Vision</button></div>
            <div class="mb-3"><button class="tab_button" data-target="#section3">Values</button></div>
            <div class="mb-3"><button class="tab_button" data-target="#section4">Walkthrough</button></div>
        </div>
        <section class="section active" id="section1">
            <div class="row tab_content_row ">
                <div class="col-12 col-sm-6 swiggy_boy">
                    <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/Group-1000006479.png" alt="">
                </div>
                <div class="col-12 col-sm-6">
                    <div class="headings">
                        Mission</div>
                    <div class="headings_inner_text">Our mission is to elevate the quality of life of the urban consumer
                        by
                        offering unparalleled
                        convenience. Convenience is what makes us tick. It’s what makes us get out of bed and say,
                        “Let’s do
                        this.”</div>
                </div>
            </div>
        </section>
        <section class="section" id="section2">
            <div class="row tab_content_row vidio_div mt-3">
                <div class="col">
                    <iframe class="swiggy_vidio" src="https://www.youtube.com/embed/fLz2fgU_x1Q"
                        frameborder="0"></iframe>
                </div>
            </div>
        </section>
        <section class="section" id="section3">
            <div class="row tab_content_row mt-3 ">
                <div class="col-12 col-sm-6 mb-4">
                    <div class="headings">
                        Values</div>
                    <div class="headings_inner_text">Our actions are strongly defined by the Swiggy values. Through ups,
                        downs, and everything in between; Swiggsters put these values into practice in their everyday
                        ways of working. Read on to get a taste of how Swiggsters live and breathe these values and how
                        it forms the backbone of our culture.</div>
                </div>
                <div class="col-12 col-sm-6">
                    <iframe class="swiggy_vidio" src="https://www.youtube.com/embed/fLz2fgU_x1Q"
                        frameborder="0"></iframe>
                </div>
            </div>
        </section>
        <section class="section" id="section4">
            <div class="row tab_content_row mt-3 ">
                <div class="col-12 col-sm-6 mb-4">
                    <div class="headings">
                        Walkthrough</div>
                    <div class="headings_inner_text">Old love with young love feels. Watch the story of two empty
                        nesters, Shailja and Pradeep, as they navigate through love, life, food, and a badminton court
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <iframe class="swiggy_vidio" src="https://www.youtube.com/embed/fLz2fgU_x1Q"
                        frameborder="0"></iframe>
                </div>
            </div>
        </section>

    </div>
    <div class="container">
        <div class="row tab_content_row ">
            <div class="col">
                <div class="headings">
                    Industry pioneer</div>
                <div class="headings_inner_text">Being among the first few entrants, Swiggy has successfully pioneered
                    the
                    hyperlocal commerce industry in India, launching Food Delivery in 2014 and Quick Commerce in 2020.
                    Due
                    to the pioneering status of Swiggy, it is well-recognised as a leader in innovation in hyperlocal
                    commerce and as a brand synonymous with the categories it is present in.</div>
            </div>
            <div class="col">
                <img height="428px" src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/about-img1-new.png">
            </div>
        </div>
    </div>

    <div class="container counter_container">

        <div class="row">

            <div class="four col-md-3 col-6">
                <div class="counter-box border-end colored">

                    <span class="counter">3
                    </span>
                    <p>orders</p>
                </div>
            </div>
            <div class="four col-md-3 col-6 ">
                <div class="counter-box border-end hiding_border">

                    <span class="counter">200</span>
                    <p>restaurant partners</p>
                </div>
            </div>
            <div class="four col-md-3 col-6">
                <div class="counter-box border-end">

                    <span class="counter">
                        380</span>
                    <p>delivery partners</p>
                </div>
            </div>
            <div class="four col-md-3 col-6 ">
                <div class="counter-box ">

                    <span class="counter">
                        650</span>
                    <p>cities in India</p>
                </div>
            </div>
        </div>
    </div>
    <section id="section_career">
        <div class="container">
            <div class="img-bg">
                <div class="careers">Careers</div>
                <div class="swiggster">Discover The Swiggster In You</div>
                <div><button class="btn read_more">
                        Read More
                    </button></div>
            </div>
        </div>

    </section>

    <section id="section_member">
        <div class="members_container container">

            <div class="row tab_row d-flex mb-4">
                <div class="mb-3"><button class="member_btn active_member_btn" data-target="#member_section1">Board
                        Members</button></div>
                <div class="mb-3"><button class="member_btn" data-target="#member_section2">Management Team</button>
                </div>

            </div>
            <section class="member_section active" id="member_section1">
                <div class="row members_row">
                    <div class="row d-flex members_inner_row">


                        <div class="member">
                            <div class="card" style="width: 18rem;">
                                <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/Suparna-Mitra.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body d-flex">
                                    <div>
                                        <h5 class="card-title">Suparna Mitra</h5>
                                        <p class="card-text">Independent Director</p>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <span><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            ->
                                        </button></span>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close border"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row d-flex">
                                                        <div class="col ">
                                                            <div>
                                                                <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/Suparna-Mitra.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="member_name">
                                                                <h4>Suparna Mitra</h4>
                                                            </div>
                                                            <div class="member_post">
                                                                <h5>Independent Director</h5>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="member_bio">
                                                                        <div>
                                                                            Suparna Mitra is an Independent Director on
                                                                            our
                                                                            Board.
                                                                            She
                                                                            holds
                                                                            a
                                                                            Bachelor’s degree in electrical engineering
                                                                            from
                                                                            Jadavpur
                                                                            University
                                                                            and
                                                                            a Master’s degree in Business Administration
                                                                            from
                                                                            the
                                                                            Indian
                                                                            Institute
                                                                            of Management, Calcutta. She is the chief
                                                                            executive
                                                                            officer
                                                                            of
                                                                            the
                                                                            watches and wearables division of Titan
                                                                            Company
                                                                            Limited.
                                                                            She
                                                                            currently
                                                                            also serves on the Board of Governors for
                                                                            the
                                                                            Indian
                                                                            Institute
                                                                            of
                                                                            Management, Kozhikode and has previously
                                                                            served
                                                                            on
                                                                            the
                                                                            board
                                                                            of
                                                                            Tata
                                                                            Power Solar. She has been recognized on many
                                                                            platforms
                                                                            including
                                                                            Fortune
                                                                            Most Powerful Women in Business, Business
                                                                            Today
                                                                            Most
                                                                            Powerful
                                                                            Women,
                                                                            BW
                                                                            Businessworld Most Influential Women 2022
                                                                            and ET
                                                                            Femina
                                                                            Most
                                                                            Promising
                                                                            Women Leaders Award in 2022. Most Impactful
                                                                            CEO
                                                                            2023
                                                                            by
                                                                            ET
                                                                            Edge
                                                                            And
                                                                            Most
                                                                            Powerful Women by Business Today 2023.
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

                                </div>
                            </div>
                        </div>
                        <div class="member">
                            <div class="card" style="width: 18rem;">
                                <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/Suparna-Mitra.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body d-flex">
                                    <div>
                                        <h5 class="card-title">Suparna Mitra</h5>
                                        <p class="card-text">Independent Director</p>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <span><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            ->
                                        </button></span>

                                    <!-- Modal -->

                                </div>
                            </div>
                        </div>
                        <div class="member">
                            <div class="card" style="width: 18rem;">
                                <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/Suparna-Mitra.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body d-flex">
                                    <div>
                                        <h5 class="card-title">Suparna Mitra</h5>
                                        <p class="card-text">Independent Director</p>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <span><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            ->
                                        </button></span>

                                    <!-- Modal -->

                                </div>
                            </div>
                        </div>
                        <div class="member">
                            <div class="card" style="width: 18rem;">
                                <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/Suparna-Mitra.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body d-flex">
                                    <div>
                                        <h5 class="card-title">Suparna Mitra</h5>
                                        <p class="card-text">Independent Director</p>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <span><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            ->
                                        </button></span>

                                    <!-- Modal -->

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </section>
            <section class="member_section" id="member_section2">
                <div class="row members_row">
                    <div class="row d-flex members_inner_row">


                        <div class="member">
                            <div class="card" style="width: 18rem;">
                                <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/Suparna-Mitra.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body d-flex">
                                    <div>
                                        <h5 class="card-title">Suparna Mitra</h5>
                                        <p class="card-text">Independent Director</p>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <span><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            ->
                                        </button></span>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close border"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row d-flex">
                                                        <div class="col ">
                                                            <div>
                                                                <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/Suparna-Mitra.png"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="member_name">
                                                                <h4>Suparna Mitra</h4>
                                                            </div>
                                                            <div class="member_post">
                                                                <h5>Independent Director</h5>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="member_bio">
                                                                        <div>
                                                                            Suparna Mitra is an Independent Director on
                                                                            our
                                                                            Board.
                                                                            She
                                                                            holds
                                                                            a
                                                                            Bachelor’s degree in electrical engineering
                                                                            from
                                                                            Jadavpur
                                                                            University
                                                                            and
                                                                            a Master’s degree in Business Administration
                                                                            from
                                                                            the
                                                                            Indian
                                                                            Institute
                                                                            of Management, Calcutta. She is the chief
                                                                            executive
                                                                            officer
                                                                            of
                                                                            the
                                                                            watches and wearables division of Titan
                                                                            Company
                                                                            Limited.
                                                                            She
                                                                            currently
                                                                            also serves on the Board of Governors for
                                                                            the
                                                                            Indian
                                                                            Institute
                                                                            of
                                                                            Management, Kozhikode and has previously
                                                                            served
                                                                            on
                                                                            the
                                                                            board
                                                                            of
                                                                            Tata
                                                                            Power Solar. She has been recognized on many
                                                                            platforms
                                                                            including
                                                                            Fortune
                                                                            Most Powerful Women in Business, Business
                                                                            Today
                                                                            Most
                                                                            Powerful
                                                                            Women,
                                                                            BW
                                                                            Businessworld Most Influential Women 2022
                                                                            and ET
                                                                            Femina
                                                                            Most
                                                                            Promising
                                                                            Women Leaders Award in 2022. Most Impactful
                                                                            CEO
                                                                            2023
                                                                            by
                                                                            ET
                                                                            Edge
                                                                            And
                                                                            Most
                                                                            Powerful Women by Business Today 2023.
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

                                </div>
                            </div>
                        </div>
                        <div class="member">
                            <div class="card" style="width: 18rem;">
                                <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/Suparna-Mitra.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body d-flex">
                                    <div>
                                        <h5 class="card-title">Suparna Mitra</h5>
                                        <p class="card-text">Independent Director</p>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <span><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            ->
                                        </button></span>

                                    <!-- Modal -->

                                </div>
                            </div>
                        </div>
                        <div class="member">
                            <div class="card" style="width: 18rem;">
                                <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/Suparna-Mitra.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body d-flex">
                                    <div>
                                        <h5 class="card-title">Suparna Mitra</h5>
                                        <p class="card-text">Independent Director</p>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <span><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            ->
                                        </button></span>

                                    <!-- Modal -->

                                </div>
                            </div>
                        </div>
                        <div class="member">
                            <div class="card" style="width: 18rem;">
                                <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/Suparna-Mitra.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body d-flex">
                                    <div>
                                        <h5 class="card-title">Suparna Mitra</h5>
                                        <p class="card-text">Independent Director</p>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <span><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            ->
                                        </button>
                                    </span>

                                    <!-- Modal -->

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </section>
        </div>
    </section>


    <section id="section_blogs">
        <div class="container cards_container">
            <div class="headings mb-1">Blogs</div>
            <div class="row tab_row d-flex mb-4">
                <div class="mb-3"><button class="card_btn active_btn" data-target="#s1">Life at Swiggy

                    </button></div>
                <div class="mb-3"><button class="card_btn" data-target="#s2">Updates</button></div>
                <div class="mb-3"><button class="card_btn" data-target="#s3">Snackables</button></div>

            </div>
            <section class="card_section active" id="s1">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/EmpEx-Sushmita-1-scaled-1-768x256.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-date">April 1, 2024</h5>
                                <p class="about-card-text">Passion matched with purpose: A Senior Manager’s Fulfilling
                                    Joyride
                                    at
                                    Swiggy
                                </p>
                                <a href="#" class="btn read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/EmpEx-Sushmita-1-scaled-1-768x256.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-date">April 1, 2024</h5>
                                <p class="about-card-text">Passion matched with purpose: A Senior Manager’s Fulfilling
                                    Joyride
                                    at
                                    Swiggy
                                </p>
                                <a href="#" class="btn read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/EmpEx-Sushmita-1-scaled-1-768x256.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-date">April 1, 2024</h5>
                                <p class="about-card-text">Passion matched with purpose: A Senior Manager’s Fulfilling
                                    Joyride
                                    at
                                    Swiggy
                                </p>
                                <a href="#" class="btn read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="card_section " id="s2">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/EmpEx-Sushmita-1-scaled-1-768x256.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-date">April 1, 2024</h5>
                                <p class="about-card-text">Passion matched with purpose: A Senior Manager’s Fulfilling
                                    Joyride
                                    at
                                    Swiggy
                                </p>
                                <a href="#" class="btn read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/EmpEx-Sushmita-1-scaled-1-768x256.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-date">April 1, 2024</h5>
                                <p class="about-card-text">Passion matched with purpose: A Senior Manager’s Fulfilling
                                    Joyride
                                    at
                                    Swiggy
                                </p>
                                <a href="#" class="btn read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/EmpEx-Sushmita-1-scaled-1-768x256.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-date">April 1, 2024</h5>
                                <p class="about-card-text">Passion matched with purpose: A Senior Manager’s Fulfilling
                                    Joyride
                                    at
                                    Swiggy
                                </p>
                                <a href="#" class="btn read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="card_section " id="s3">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/EmpEx-Sushmita-1-scaled-1-768x256.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-date">April 1, 2024</h5>
                                <p class="about-card-text">Passion matched with purpose: A Senior Manager’s Fulfilling
                                    Joyride
                                    at
                                    Swiggy
                                </p>
                                <a href="#" class="btn read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/EmpEx-Sushmita-1-scaled-1-768x256.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-date">April 1, 2024</h5>
                                <p class="about-card-text">Passion matched with purpose: A Senior Manager’s Fulfilling
                                    Joyride
                                    at
                                    Swiggy
                                </p>
                                <a href="#" class="btn read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="https://www.swiggy.com/about-us/wp-content/uploads/2024/04/EmpEx-Sushmita-1-scaled-1-768x256.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-date">April 1, 2024</h5>
                                <p class="about-card-text">Passion matched with purpose: A Senior Manager’s Fulfilling
                                    Joyride
                                    at
                                    Swiggy
                                </p>
                                <a href="#" class="btn read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="read_btn_div">
                <button class="btn read_more">
                    See More
                </button>
            </div>
        </div>
    </section>

    <script>

        $(document).ready(function () {

            $('.counter').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });

        $(document).ready(function () {
            $('#section1').show();

            $('.tab_button').on('click', function () {
                var target = $(this).data('target');
                $('.tab_button').removeClass('active_button');

                $('.section').hide().removeClass('active');


                $(target).fadeIn().addClass('active');
                $(this).addClass('active_button');
            });
        });
        $(document).ready(function () {
            $('#s1').show();

            $('.card_btn').on('click', function () {
                var target = $(this).data('target');
                $('.card_btn').removeClass('active_btn');

                $('.card_section').hide().removeClass('active');


                $(target).fadeIn().addClass('active');
                $(this).addClass('active_btn');
            });
        });
        $(document).ready(function () {
            $('#member_section1').show();

            $('.member_btn').on('click', function () {
                var target = $(this).data('target');
                $('.member_btn').removeClass('active_member_btn');

                $('.member_section').hide().removeClass('active');


                $(target).fadeIn().addClass('active');
                $(this).addClass('active_member_btn');
            });
        });




    </script>
</main>
@endsection