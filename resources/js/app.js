require('./bootstrap');


// Get that hamburger menu cookin' //

$(document).ready(function() {

    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function() {
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    });
});

// // Smooth Anchor Scrolling


$(document).on("click", 'a[href^="#"]', function(event) {
    event.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top
      },
      500
    );
    $('a[href^="#"]').each(function(i) {
        $(this).parent().removeClass("is-active");
    });
    $('#home-link').removeClass("is-active");
    $(this).parent().addClass("is-active");
  });

  $(document).on("click", '#toTop', function (event) {
    event.preventDefault();
    $("html, body").animate(
        {
            scrollTop: $($.attr(this, "href")).offset().top,
        },
        500
    );
    $('#home-link').addClass("is-active");
});

// When the user scrolls down 20px from the top of the document, show the scroll up button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        document.getElementById("toTop").style.display = "block";
    } else {
        document.getElementById("toTop").style.display = "none";
    }
}

// Preloader
$(document).ready(function ($) {
    $(".preloader-wrapper").fadeOut();
    $("body").removeClass("preloader-site");
});

$(window).on("load", function () {
    var Body = $("body");
    Body.addClass("preloader-site");
});
