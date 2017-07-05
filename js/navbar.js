/**
 * Created by Anastasia on 20.02.17.
 */
//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    var navbar = $("nav");
    var content = $(".content");
    var info = $(".header-info");
    var info_h = info.outerHeight();
    var mobile_header_h = $(".mobile-header").outerHeight();

    if ($(window).scrollTop() >= info_h && info_h != 0) {
        navbar.addClass("navbar-fixed-top");
        content.css("margin-top", navbar.height());
    } else if (info_h == 0) {
        $("h1").each(function () {
            $(this).css("padding-top", mobile_header_h+40);
        });
        // content.css("margin-top", mobile_header_h);
    } else {
        navbar.removeClass("navbar-fixed-top");
        content.removeAttr("style");
    }
});