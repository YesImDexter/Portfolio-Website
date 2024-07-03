
/*=========================================================================
TEST AJAX
=========================================================================*/

document.getElementById('submit-contact').addEventListener('click', function (e) {
    e.preventDefault();
    // var data = $('#form-data').serialize();
    $.ajax({
        type: 'post',
        url: '/store',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            name: $('#name').val(),
            email: $('#email').val(),
            message: $('#message').val()
        },
        success: function (response) {
            if (response.status === true) {
                Swal.fire({
                    color: '#999',
                    title: 'Sucessfully Submitted',
                    background: '#292929',
                })
            } else if (response.status === false) {
                Swal.fire({
                    color: '#999',
                    title: 'Failed To Be Submitted',
                    background: '#292929',
                })
            }
            console.log(response)
        },
        error: function (response) {
            Swal.fire({
                color: '#999',
                title: 'Unknown Error',
                background: '#292929',
            })
        },
    });
});

/*=========================================================================
Event Listeners
=========================================================================*/

//EMAIL
document.getElementById("copy-email").addEventListener("click", CopyEmail);

const toGithub = document.getElementsByClassName("to-github");
const toLinkedIn = document.getElementsByClassName("to-linkedin");
const toStack = document.getElementsByClassName("to-stack");
const toIG = document.getElementsByClassName("to-instagram");

/*=========================================================================
Social Links New Tab
=========================================================================*/

toGithub[0].addEventListener('click', function onClick() {
    var link = "https://github.com/YesImDexter";
    ToSocial(link);
});

for (const others of toGithub) {
    others.addEventListener('click', function onClick() {
        var link = "https://github.com/YesImDexter";
        ToSocial(link);
    });
}

// ====================================================================

toLinkedIn[0].addEventListener('click', function onClick() {
    var link = "https://www.linkedin.com/in/dexter-skudd-607b58253/";
    ToSocial(link);
});

for (const others of toLinkedIn) {
    others.addEventListener('click', function onClick() {
        var link = "https://www.linkedin.com/in/dexter-skudd-607b58253/";
        ToSocial(link);
    });
}

// ====================================================================

toStack[0].addEventListener('click', function onClick() {
    var link = "https://stackoverflow.com/users/20278424/dexter-skudd";
    ToSocial(link);
});

for (const others of toStack) {
    others.addEventListener('click', function onClick() {
        var link = "https://stackoverflow.com/users/20278424/dexter-skudd";
        ToSocial(link);
    });
}

// ====================================================================

toIG[0].addEventListener('click', function onClick() {
    var link = "https://www.instagram.com/dex.skd?igsh=MmZoOGJtZmxja2E2&utm_source=qr";
    ToSocial(link);
});

for (const others of toIG) {
    others.addEventListener('click', function onClick() {
        var link = "https://www.instagram.com/dex.skd?igsh=MmZoOGJtZmxja2E2&utm_source=qr";
        ToSocial(link);
    });
}

// ====================================================================

function ToSocial(link) {
    window.open(link, "_blank");
}


/*=========================================================================
Copy Email
=========================================================================*/

function CopyEmail() {

    // Copy the text inside the text field
    let email = "DexterS0202@gmail.com";
    const clipBoard = navigator.clipboard;
    if (clipBoard.writeText(email)) {
        Swal.fire({
            color: '#999',
            title: 'Copied to Clipboard',
            background: '#292929',
        })
    } else {
        Swal.fire('Failed to Copy');
    }
}

$(function () {
    "use strict";

    $(window).on("load", function () {
        $("body").addClass("loaded");
    });

    /*=========================================================================
        Arcoordian List
    =========================================================================*/

    // $('.collapse').collapse()

    /*=========================================================================
        Burger Menu
    =========================================================================*/
    var burgerMenu = function () {
        $(".js-addo-nav-toggle").on("click", function (event) {
            event.preventDefault();
            var $this = $(this);
            if ($("body").hasClass("offcanvas")) {
                $this.removeClass("active");
                $("body").removeClass("offcanvas");
            } else {
                $this.addClass("active");
                $("body").addClass("offcanvas");
            }
        });
    };

    // Click outside of offcanvass
    var mobileMenuOutsideClick = function () {
        $(document).click(function (e) {
            var container = $("#addo-aside, .js-addo-nav-toggle");
            if (
                !container.is(e.target) &&
                container.has(e.target).length === 0
            ) {
                if ($("body").hasClass("offcanvas")) {
                    $("body").removeClass("offcanvas");
                    $(".js-addo-nav-toggle").removeClass("active");
                }
            }
        });
        $(window).scroll(function () {
            if ($("body").hasClass("offcanvas")) {
                $("body").removeClass("offcanvas");
                $(".js-addo-nav-toggle").removeClass("active");
            }
        });
    };
    var wind = $(window);

    /*=========================================================================
        Typed js Active
    =========================================================================*/
    $(".typed").typed({
        strings: ["Programmer.", "Designer.", "Developer."],
        loop: true,
        typeSpeed: 150,
    });

    /*=========================================================================
        Portfolios
    =========================================================================*/
    $(".portfolio-items").imagesLoaded(function () {
        // Add isotope click function
        $(".portfolio-filter li").on("click", function () {
            $(".portfolio-filter li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr("data-filter");
            $(".portfolio-items").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: "linear",
                    queue: false,
                },
            });
            return false;
        });

        $(".portfolio-items").isotope({
            itemSelector: ".single-item",
            layoutMode: "masonry",
        });
    });

    /*=========================================================================
            Active venobox ( Porjects List )
    =========================================================================*/

    $(".pop-up").venobox({
        numeration: true,
        infinigall: true,
        spinner: "wave",
        shareStyle: "pill",
    });

    /*=========================================================================
        Testimonial Carousel
    =========================================================================*/
    $("#testimonial-carousel").owlCarousel({
        loop: true,
        margin: 10,
        center: false,
        autoplay: true,
        smartSpeed: 500,
        nav: false,
        navText: [
            '<i class="fa fa-caret-left"></i>',
            '<i class="fa fa-caret-right"></i>',
        ],
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2,
            },
        },
    });

    /*=========================================================================
        wow Settings
    =========================================================================*/
    var wow = new WOW({
        mobile: false,
        offset: 0,
    });
    wow.init();
    // scroll
    $.scrollIt({
        upKey: 38, // key code to navigate to the next section
        downKey: 40, // key code to navigate to the previous section
        easing: "swing", // the easing function for animation
        scrollTime: 600, // how long (in ms) the animation takes
        activeClass: "active", // class given to the active nav element
        onPageChange: null, // function(pageIndex) that is called when page is changed
        topOffset: 0, // offste (in px) for fixed top navigation
    });

    /*=========================================================================
    Hover Effect On Mobile
    =========================================================================*/

    $(".gridItem").bind("touchstart touchend", function (e) {
        e.preventDefault();
        $(this).toggleClass("hover_effect");
    });
});
