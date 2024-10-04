<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home_layout.css')}}">




    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<style>
    body {
        background-color: white;
    }

    .search_items {
        flex-direction: row;
        gap: 10px;
        overflow-x: auto;
        max-width: max-content;
        width: auto;
    }

    .search_items div {
        width: auto;
        margin-top: 15px;
    }

    .search_items div img {
        height: 73px;
        width: 77px;
        border-radius: 34px;

    }

    .search_container {
        flex-direction: column;


    }

    .search_div {
        height: 50px;
        background-color: white;
        border-radius: 6px;
        border-color: gray !important;
        width: -webkit-fill-available;
        justify-content: space-between;
        display: flex;
        align-items: center;
    }

    .search_container .sticky {
        padding-top: 58px;
        padding-bottom: 8px;
    }

    .search_container .sticky form {
        width: -webkit-fill-available;
    }

    .search_container i {
        padding-right: 15px;
    }

    .search_container .search_btn {
        border: none;
        width: -webkit-fill-available;
        padding-left: 13px;
    }

    .popular_cuisines {
        font-size: 21px;
        font-weight: 700;
        color: #3d4152;
    }

    .items_row {
        overflow-x: scroll;
        scrollbar-width: none;
    }

    .outer_container {
        max-width: 852px;
    }

    #search-results li:hover {
        background: #f5f6f8;
    }

    #search-results li img {
        margin-right: 5px;
        border-radius: 5px;

    }

    #search-results li {
        height: 72px;
        align-items: center;
        display: flex;
        font-size: 15px;
    }
</style>

<body>
    @include('swiggy_layouts.navbar')

    <div class="outer_container container">


        <div class="container search_container d-flex">
            <div class="d-flex sticky">
                <form action="">
                    <div class="d-flex border search_div">
                        <input id="search" class="search_btn" placeholder="Search for restaurant and food">
                        </input>
                        <i id="search_icon" class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </form>




            </div>
            <div>
                <ul id="search-results"></ul>
            </div>
            <div class="cuisine_div">
                <div class="popular_cuisines">Popular Cuisines</div>

                <div class="row  items_row">
                    <div class="row search_items d-flex">
                        @foreach ($categories as $category)
                            <div class="food-items">
                                <a href="{{route('category.restaurants', $category->id)}}"><img
                                        src="{{asset($category->image)}}" class="food-items-img border-rounded" alt="">

                                </a>
                            </div>
                        @endforeach




                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/home_layout.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        $('.search_btn').on('click', function () {
            $('.search_btn').css('outline', 'none');
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#search').on('keyup', function () {
                var query = $(this).val();

                $.ajax({
                    url: "{{ route('searchResto') }}",
                    type: "GET",
                    data: { 'query': query },
                    success: function (data) {
                        $('#search-results').empty();
                        $('.cuisine_div').hide();
                        $('#search_icon').removeClass('fa-magnifying-glass');
                        $('#search_icon').addClass('fa-xmark');
                        if (data.length > 0) {
                            $.each(data, function (key, value) {
                                $('#search-results').append(
                                    '<li><img src="' + value.image + '" alt="' + value.name + '" width="60px" height="60px"> ' + value.name + '</li>'
                                );
                            });

                        } else {
                            $('#search-results').append('<li>No results found</li>');
                        }
                    },
                    error: function () {
                        alert('Something went wrong');
                    }
                });
            });
        });
        $(document).ready(function () {
            $('#search_icon').on('click', function () {
               if ($(this).hasClass('fa-xmark')) {
                    $('#search-results').empty();
                    $(this).removeClass('fa-xmark').addClass('fa-magnifying-glass');
                    $('.cuisine_div').show();
                    $('.search_btn').val('');

                }
            });
        });

    </script>

</body>

</html>