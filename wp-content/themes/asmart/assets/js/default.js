// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------

jQuery(document).ready(function () {
    "use strict";

    sliderHomePage();
    homePagePortfolioCarousel();
    partnersCarousel();

    certsCarousel();
    modal();
    mobileMenu();
    phoneMask();
    backToTop();
    map();
    teamCarousel();
    awardsCarousel();
    // end redy function
});


// jQuery(window).load(function () {
//
// });


// ---------------------------------------------------------
// Back To Top
// ---------------------------------------------------------
function backToTop() {
    "use strict";
    jQuery(window).scroll(function () {

        var backToTop = jQuery('#back_to_top');
        var activeClass = 'backactive';

        if (jQuery(this).scrollTop() > 100) {
            backToTop.addClass(activeClass);
        } else {
            backToTop.removeClass(activeClass);
        }

    });

    jQuery(document).on('click', '#back_to_top', function (e) {
        e.preventDefault();

        jQuery('body,html').animate({scrollTop: 0}, jQuery(window).scrollTop() / 3, 'linear');
    });

}

//
//  Modal
//
function modal() {
    "use strict";
    var classShow = 'show';
    jQuery('.overlay-layer, .custom-modal .close, .success-modal .link-ok').click(function () {

        jQuery('.custom-modal ,  .success-modal, .overlay-layer').removeClass(classShow);

        return false;
    });


    jQuery('.link-call, .link-feedback-service, #price-section .price-block .bottom a.first-link').click(function () {

        jQuery('.custom-modal, .overlay-layer').addClass(classShow);

        return false;

    });

}


//----------------------------------
//   Carousel Certs
//---------------------------------------

function certsCarousel() {
    "use strict";
    var carouselClass = jQuery('.list-cert');
    var arrowClass = jQuery('#cert-section .arrow-bottom');

    if (carouselClass.length) {
        carouselClass.slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]

            //   autoplay: true,
        });

        // add space for arrows

        var widthPagination = carouselClass.find('.slick-dots').width();

        arrowClass.css('width', widthPagination + 140);


        // custom arrow actions

        jQuery('#cert-section .arrow-bottom  .prev').click(function (e) {
            e.preventDefault();
            jQuery(this).parent().parent().parent().find('.list-cert').slick('slickPrev');
        });


        jQuery('#cert-section .arrow-bottom  .next').click(function (e) {
            e.preventDefault();
            jQuery(this).parent().parent().parent().find('.list-cert').slick('slickNext');
        });


    }

}


function map() {
    "use strict";

    var $map = jQuery('#map');


    if ($map.length) {
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 15,
                controls: [],
                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(54.986611, 73.378946), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: []
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');
            var image = {
                url: 'http://localhost:6080/wp-content/themes/asmart/assets/images/marker.svg',
                size: new google.maps.Size(40, 40),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 40)
            };
            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(54.986611, 73.378946),
                map: map,
                icon: image,
                title: 'Офис'
            });
        }


    }
}


//----------------------------------
//  Mobile Menu
//------------------------------------
function mobileMenu() {
    "use strict";
    var linkClass = '#mobile-toggle';
    var mobileClass = '.mobile-bar';

    jQuery('body').on('click', linkClass, function () {
        jQuery(this).toggleClass('is-active');
        jQuery(mobileClass).toggleClass('is-active');
        return false;
    });
}

//----------------------------------
//  Input phone field Mask
//------------------------------------
function phoneMask() {
    "use strict";
    let phone_class = jQuery('.phone-input');
    if (phone_class.length) {
        phone_class.inputmask({"mask": "+7 (999) 999-9999"});

    }
}


//----------------------------------
//   Home Slider
//---------------------------------------

function sliderHomePage() {
    "use strict";
    var sliderWrap = jQuery('.home-slider_slider');

    if (sliderWrap.length) {
        sliderWrap.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            autoplay: true,
        });

        jQuery('.home-slider_slider .slick-dots').wrap("<div class='container  wrap-dots'></div>");


    }
}

//----------------------------------
//   Home Portfolio carousel
//---------------------------------------

function homePagePortfolioCarousel() {
    "use strict";
    var carouselWrap = jQuery('.home-portfolio_carousel');

    if (carouselWrap.length) {
        carouselWrap.slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            dots: true,
            autoplay: true,
        });
    }
}

//----------------------------------
//   Partners carousel
//---------------------------------------

function partnersCarousel() {
    "use strict";
    var carouselWrap = jQuery('.partners-section_carousel');

    if (carouselWrap.length) {
        carouselWrap.slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: true,
            dots: true,
            //   autoplay: true,
        });
    }
}

//----------------------------------
//   Team carousel
//---------------------------------------

function teamCarousel() {
    "use strict";
    var carouselWrap = jQuery('.page-about_list-team');

    if (carouselWrap.length) {
        carouselWrap.slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            dots: true,
            //   autoplay: true,
        });
    }
}

//----------------------------------
//   Awards carousel
//---------------------------------------

function awardsCarousel() {
    "use strict";
    var carouselWrap = jQuery('.page-about_awards_list-items');

    if (carouselWrap.length) {
        carouselWrap.slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: true,
            dots: true,
            //   autoplay: true,
        });
    }
}



