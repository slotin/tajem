(function ($) {

    // variables
    var headerDiv = $("header.page-header");
    // Cache selectors
    var lastId,
        topMenu = $(".main-nav"),
        topMenuHeight = topMenu.outerHeight() + 15,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    // sticky menu
    var yourNavigation = headerDiv;
    stickyDiv = "sticky bg-overlayed";
    yourHeader = headerDiv.height();

    $(window).scroll(function () {
        if ($(this).scrollTop() > yourHeader) {
            yourNavigation.addClass(stickyDiv);
        } else {
            yourNavigation.removeClass(stickyDiv);
        }
    });

    // slider in hero section
    $('.hero-section--slider').slick({
        dots: true,
        arrows: false,
        fade: true,
    });

    // smooth scroll to anchor links
    $('body').on('click', '.main-nav a', function () {
        var elementClick = $(this).attr("href");
        $('.main-nav a').removeClass('active');
        var self = $(this);
        var thisID = elementClick;

        // console.log(elementClick);
        var destination = $(elementClick).offset().top - headerDiv.height();
        if ($.browser.safari) {
            $('html, body').animate({scrollTop: destination}, 500);
        } else {
            $('html, body').animate({scrollTop: destination}, 500);
        }
        // prevents the default action of clicking on a link.
        return false;
    });

    // Bind to scroll
    $(window).scroll(function () {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + yourHeader;

        var $offTop;
        if (window.innerWidth > 991) {
            $offTop = 70;
        } else {
            $offTop = 10;
        }
        // Get id of current scroll item
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop + $offTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href='#" + id + "']").parent().addClass("active");
        }
    });


})(jQuery);
