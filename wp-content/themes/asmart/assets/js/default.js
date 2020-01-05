// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------

jQuery(document).ready(function () {
    "use strict";

    sliderHomePage();
    certsCarousel();
    modal();
    mobileMenu();
    phoneMask();
    backToTop();
    // end redy function
});


jQuery(window).load(function () {
    map();
});



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
            //   autoplay: true,
        });


    }

}
