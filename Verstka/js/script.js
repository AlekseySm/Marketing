$(document).ready(function () {

    $('[id ^= menu-item]').find('[href ^= "#"]').not('[href = "#pll_switcher"]').addClass('nav-list__link js-menu-toggle nav-list__link-js');

    $('.js-menu-toggle').on('click', function () {
        $(this).toggleClass('toggler__icon--open');
        $('.js-nav').toggleClass('nav-list--open');
        $('.header__logo').toggleClass('header__logo--open');
    });

    $('.nav-list__link-js').on('click', function () {
        $('.js-menu-toggle').removeClass('toggler__icon--open');
        $('.js-nav').removeClass('nav-list--open');
        $('.header__logo').removeClass('header__logo--open');
    });

    $(".nav-list__link-js").on("click", function (event) {
        event.preventDefault();
        $("html, body").stop().animate({
            scrollTop: $($(this).attr("href")).offset().top - 70,
        }, 900);
    });

    $('a[href="#services"]').on("click", function (event) {
        event.preventDefault();
        $("html, body").stop().animate({
            scrollTop: $($(this).attr("href")).offset().top - 70,
        }, 900);
    });

    $('a[href="#portfolio"]').on("click", function (event) {
        event.preventDefault();
        $("html, body").stop().animate({
            scrollTop: $($(this).attr("href")).offset().top - 70,
        }, 900);
    });

    // $('a[href="#contact"]').on("click", function (event) {
    //     event.preventDefault();
    //     $("html, body").stop().animate({
    //         scrollTop: $($(this).attr("href")).offset().top - 70,
    //     }, 900);
    // });

    // $('a[href="#about-us"]').on("click", function (event) {
    //     event.preventDefault();
    //     $("html, body").stop().animate({
    //         scrollTop: $($(this).attr("href")).offset().top - 70,
    //     }, 900);
    // });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    $(".slider-info").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        // fade: true,
        arrows: true,
        dots: false,
        // autoplay: true,
        // autoplaySpeed: 5000,
        speed: 500,
        centerMode: true,
        // centerPadding: '40px',       
        responsive: [{
            breakpoint: 821,
            settings: {
                dots: true,
                centerMode: false,
            }
        }]
    });

    $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        directionNav: false,
        slideshow: false,
        itemWidth: 120,
        itemMargin: 5,
        asNavFor: '#slider',
        maxItems: 4
    });

    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        directionNav: true,
        animationLoop: true,
        slideshow: true,
        slideshowSpeed: 7000,
        animationSpeed: 600,
        itemWidth: 500,
        sync: "#carousel",
        maxItems: 1
    });

    $("input[type='tel']").mask("+999 99 999-99-99");

    $('.info-item__list-name').on('click', function () {
        let $oc = $(this).next();
        $(".info-item__list-inner").not($oc).slideUp();
        $oc.slideToggle();
    });

    $('.btn-more').on('click', function () {
        $(this).toggleClass('opened').toggleClass('closed').prev().slideToggle();

        if ($(this).hasClass('opened')) {
            $(this).html('свернуть');
        } else {
            $(this).html('Read more');
        }
        return false;
    });


    function mugniPop(element) {



        $(element).magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom',
            image: {
                titleSrc: function (item) {
                    // return item.el.find('img').attr('title');
                    let markup = '';
                    markup += '<h3 class="portfolio-item-title">' + item.el.find('img').attr('title') + '</h3><p class="portfolio-item-desc">' + item.el.find('img').attr('caption') + '</p>';

                    return markup
                },
                // markup: '<div class="mfp-figure">' +
                //     '<div class="mfp-close"></div>' +
                //     '<div class="mfp-img"></div>' +
                //     '<div class="mfp-bottom-bar">' +
                //     '<div class="mfp-title"></div>' +
                //     '<div class="mfp-counter"></div>' +
                //     '<div class="small"></div>' +
                //     '</div>' +
                //     '</div>',
            },
            // callbacks: {
            //     elementParse: function (item) {
            //         let imgAlt = item.el.find('img').attr('alt');
            //         return item.el.find('.small').html(imgAlt);
            //     },
            // },
            gallery: {
                enabled: true
            },
            // callbacks: {
            //     resize: function () {
            //         var img = this.content.find('img');
            //         img.css('max-height', parseFloat(img.css('max-height')) * 0.85);
            //     }                
            // },
            // callbacks: {
            //     resize: changeImgSize,
            //     // imageLoadComplete: changeImgSize,
            //     // change: changeImgSize
            // },

            zoom: {
                enabled: true,

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                opener: function (openerElement) {

                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    };

    mugniPop('.slides__link');
    mugniPop('.portfolio-page-grid__link');

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 70) {
            $('.header-js').addClass('header--fixed');
        } else {
            $('.header-js').removeClass('header--fixed');
        }
    });

    // $(window).on('popstate', function () {
    //     location.reload(true);
    // });

    if (window.pageYOffset >= 70) {
        $('.header-js').addClass('header--fixed');
    }

});

// function changeImgSize() {
//     var img = this.content.find('.mfp-img');
//     img.css('max-height', parseFloat(img.css('max-height')) * 0.85);
// };