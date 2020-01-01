// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------

jQuery(document).ready(function () {
    "use strict";


    certsCarousel();
    lasyLoad();
    modal();
    mobileMenu();
    phoneMask();
    backToTop();
    scrollToDiv();
    // end redy function
});


jQuery(window).load(function () {
    map();
});

// ---------------------------------------------------------
// Scroll to section
// ---------------------------------------------------------
function scrollToDiv() {
    "use strict";

    if (jQuery('body').hasClass('home')) {
        jQuery(document).on('click', ".nav-bar-custom a, .nav-bar-footer a", function (e) {

            e.preventDefault();

            var position = jQuery(jQuery(this).attr("href")).offset().top;

            jQuery("body, html").animate({
                scrollTop: position
            } /* speed */);

            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + jQuery(this).attr('href');
            window.history.pushState({path: newurl}, '', newurl);

        });



    }

}

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
//   Lasyload
//---------------------------------------

function lasyLoad() {
    "use strict";

    var lasyClass = jQuery('.lazy');

    if (lasyClass.length) {
        lasyClass.lazy({
            effect: "fadeIn",
            effectTime: 700,
        });
    }

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


//----------------------------------
// Map
//------------------------------------
// set width  for map in home page
function dinamicWidthMap() {
    "use strict";
    var $mapHome = jQuery('#map');

    $mapHome.css('width', (jQuery(window).width() - jQuery('.container').width()) / 2 + jQuery('#map-section .map-container').width());


}

function map() {
    "use strict";

    let $map = jQuery('#map');


    if ($map.length) {
        dinamicWidthMap();
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                center: [54.959971, 73.353655],
                zoom: 12,
                controls: ['zoomControl']
            }, {
                // searchControlProvider: 'yandex#search'
            });


            myMap.geoObjects
            // .add(myPlacemark)
                .add(new ymaps.Placemark([54.981417, 73.388532], {
                    balloonContent: 'ул. Почтовая, д. 33, каб. 9',
                    iconCaption: 'Наш офис'
                }, {
                    preset: 'islands#greenDotIconWithCaption'
                }))
                .add(new ymaps.Placemark([54.922778, 73.239672], {
                    balloonContent: 'пос. Магистральный, ул.Строителей, 14Б',
                    iconCaption: 'Наша база'
                }, {
                    preset: 'islands#greenDotIconWithCaption'
                }));
            myMap.behaviors.disable('scrollZoom');
            myMap.behaviors.disable('multiTouch');
        });
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

//
// Show modal after success send mail
//
document.addEventListener('wpcf7mailsent', function (event) {
    var classShow = 'show';

    jQuery('.custom-modal').removeClass(classShow);

    jQuery('.success-modal, .overlay-layer').addClass(classShow);

    setTimeout(function () {

        jQuery('.success-modal, .overlay-layer').removeClass(classShow);


    }, 3000);


}, false);

//
//  Metrics goals
//
document.addEventListener('wpcf7mailsent', function (event) {
    if (event.detail.contactFormId == "12") {
        yaCounter54090724.reachGoal('voznikvopros');
    } else if (event.detail.contactFormId == "13") {
        yaCounter54090724.reachGoal('zakaztopliva1');
    } else {
        yaCounter54090724.reachGoal('obraztzy');
    }

}, false);