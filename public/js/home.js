
$(document).ready(function () {
    const listItems = $("#itemList li");
    const hiddenDivs = $(".hidden-list-items");

    listItems.on("click", function () {
        hiddenDivs.hide();

        let targetId;
        switch ($(this).attr("id")) {
            case "list-item1":
                targetId = "#item1";
                break;
            case "list-item2":
                targetId = "#item2";
                break;
            case "list-item3":
                targetId = "#item3";
                break;
            case "list-item4":
                targetId = "#item4";
                break;
            case "list-item5":
                targetId = "#item5";
                break;
            case "list-item6":
                targetId = "#item6";
                break;
            case "list-item7":
                targetId = "#item7";
                break;
            default:
                targetId = "#item1";
        }

        if (targetId) {
            $(targetId).show();
        }
    });
});

$(document).ready(function () {
    $('input[type="radio"]').click(function () {
        $(".modal-footer").show();
    });
});
$(document).ready(function () {
    var stickyDiv = $(".list-options");
    var stickyTop = stickyDiv.offset().top;

    $(window).on("scroll", function () {
        if ($(window).scrollTop() >= stickyTop) {
            $(".search_for").css("display", "block");
        } else {
            $(".search_for").css("display", "none");
        }
    });
});

$(document).ready(function () {
    $(".scroll-btnB").on("click", function () {
        const target = $(this).data("target");
        $(target).animate(
            {
                scrollLeft: $(target).scrollLeft() - 400,
            },
            400
        ); 
    });

    $(".scroll-btnF").on("click", function () {
        const target = $(this).data("target");
        $(target).animate(
            {
                scrollLeft: $(target).scrollLeft() + 400,
            },
            400
        );
    });
});


 

 