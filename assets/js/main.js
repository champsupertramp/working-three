 var $ = jQuery.noConflict();
 function toggle_visibility(id) {
        var e = document.getElementById(id);
        if(e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }
    $('a').click(function () {
        $('html, body').animate({
            scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
        }, 400);
        return false;
    });
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(document).scrollTop() > $(window).height() * 0.9) {
                $(".topNav").addClass("scrolled2", 300, "linear");
            } else {
                $(".topNav").removeClass("scrolled2", 300, "linear");
            }
            if ($(document).scrollTop() > $(window).height() * 1.9) {
                $(".topNav").addClass("scrolled3");
            } else {
                $(".topNav").removeClass("scrolled3");
            }
            if ($(document).scrollTop() > $(window).height() * 2.9) {
                $(".topNav").addClass("scrolled4");
            } else {
                $(".topNav").removeClass("scrolled4");
            }
            if ($(document).scrollTop() > $(window).height() * 3.9) {
                $(".topNav").addClass("scrolled5");
            } else {
                $(".topNav").removeClass("scrolled5");
            }
        });

    });

    $(document).ready(function () {
        var scroll_pos = 0;
        $(document).scroll(function () {
            scroll_pos = $(this).scrollTop();

            if (scroll_pos < $(window).height() * 0.09) {
                $(".tNav").css('background-color', '#00AFD4');
            }
            else if (scroll_pos > $(window).height() * 0.09 && scroll_pos < $(window).height() * 1.09) {
                $(".tNav").css('background-color', '#FFC627');
            }
            else if (scroll_pos > $(window).height() * 1.09 && scroll_pos < $(window).height() * 2.09) {
                $(".tNav").css('background-color', '#906FB4');

            }
            else if (scroll_pos > $(window).height() * 2.09 && scroll_pos < $(window).height() * 3.09) {
                $(".tNav").css('background-color', '#24B9AD');

            }
            else if (scroll_pos > $(window).height() * 3.09 && scroll_pos < $(window).height() * 4.09) {
                $(".tNav").css('background-color', '#E95944');

            }
            console.log(scroll_pos)

        });
    });

    $(document).ready(function () {
        var scroll_pos = 0;
        $(document).scroll(function () {
            scroll_pos = $(this).scrollTop();

            if (scroll_pos < $(window).height() * 0.09) {
                $(".mNav").css('background-color', '#00AFD4');
            }
            else if (scroll_pos > $(window).height() * 0.09 && scroll_pos < $(window).height() * 1.23) {
                $(".mNav").css('background-color', '#FFC627');
            }
            else if (scroll_pos > $(window).height() * 1.23 && scroll_pos < $(window).height() * 3.08) {
                $(".mNav").css('background-color', '#906FB4');

            }
            else if (scroll_pos > $(window).height() * 3.08 && scroll_pos < $(window).height() * 4.45) {
                $(".mNav").css('background-color', '#24B9AD');

            }
            else if (scroll_pos > $(window).height() * 4.45 && scroll_pos < $(window).height() * 6.50) {
                $(".mNav").css('background-color', '#E95944');

            }
            console.log(scroll_pos)

        });
    });
