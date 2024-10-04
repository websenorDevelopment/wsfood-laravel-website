
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">



    $(document).ready(function () {

        $('#openSignInSection').on('click', function () {
            $('.signUp_section').hide();
            $('.signIn_section').show();
        });


        $('#openSignUpSection').on('click', function () {
            $('.signIn_section').hide();
            $('.signUp_section').show();
        });
    });

    $(document).ready(function () {
        var navbarToggler = $(".navbar-collapse");



        $(window).on("scroll", function () {
            navbarToggler.removeClass("show");
            navbarToggler.removeClass(".navbar-collapse");
        });


    });
    $(document).ready(function () {
        var navbarToggler = $(".navbar-collapse");
        $('.nav-home').on('click', function () {
            navbarToggler.removeClass("show");

        })
    })
    

