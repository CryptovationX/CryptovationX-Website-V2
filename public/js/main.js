var scroll, heightTop = 5;

$(window).scroll(function () {

    scroll = $(window).scrollTop();

    if (scroll < heightTop) {
        $(".navbar-brand-mat>img").attr("src", "https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/logos/Token3.png");
        $(".navbar-default ").removeClass('navbar-light').addClass('navbar-dark');;

        if (checkMenuOpen()) {
            $(".navbar-default").removeClass('bg-white');

        } else {
            $(".navbar-default ").addClass('navbar-light').removeClass('navbar-dark');
        }

    } else {

        $(".navbar-default").addClass('bg-white').addClass('navbar-light').removeClass('navbar-dark');
        $(".navbar-brand-mat>img").attr("src", "https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/logos/Token.png");
        if (!checkMenuOpen()) {
            $(".navbar-default").addClass('bg-white');
        }
    }



});

$(function () {
    $('button[data-target="#navbar-top-toggle"]').on('click', function () {
        if (scroll < heightTop) {
            if (checkMenuOpen()) {
                $(".navbar-default").addClass('bg-white').addClass('navbar-light').removeClass('navbar-dark');
            } else {
                $(".navbar-default").removeClass('bg-white').removeClass('navbar-light').addClass('navbar-dark');
            }
        }

    });

    $('.scroll-top').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    });

});

function checkMenuOpen() {
    if (!$('.navbar-collapse').hasClass('show')) {
        return true;
    }
    return false;
}