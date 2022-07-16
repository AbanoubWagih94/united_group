<!-- ARCHIVES JS -->
<script src="{{ asset('front/website/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('front/website/js/jquery-ui.js') }}"></script>
<script src="{{ asset('front/website/js/tether.min.js') }}"></script>
<script src="{{ asset('front/website/js/moment.js') }}"></script>
<script src="{{ asset('front/website/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/website/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('front/website/js/mmenu.min.js') }}"></script>
<script src="{{ asset('front/website/js/mmenu.js') }}"></script>
<script src="{{ asset('front/website/js/aos.js') }}"></script>
<script src="{{ asset('front/website/js/aos2.js') }}"></script>
<script src="{{ asset('front/website/js/swiper.min.js') }}"></script>
<script src="{{ asset('front/website/js/swiper.js') }}"></script>
<script src="{{ asset('front/website/js/slick.min.js') }}"></script>
<script src="{{ asset('front/website/js/slick.js') }}"></script>
<script src="{{ asset('front/website/js/fitvids.js') }}"></script>
<script src="{{ asset('front/website/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('front/website/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('front/website/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('front/website/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('front/website/js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('front/website/js/lightcase.js') }}"></script>
<script src="{{ asset('front/website/js/search.js') }}"></script>
<script src="{{ asset('front/website/js/owl.carousel.js') }}"></script>
<script src="{{ asset('front/website/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/website/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('front/website/js/newsletter.js') }}"></script>
<script src="{{ asset('front/website/js/jquery.form.js') }}"></script>
<script src="{{ asset('front/website/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('front/website/js/searched.js') }}"></script>
<script src="{{ asset('front/website/js/forms-2.js') }}"></script>
<script src="{{ asset('front/website/js/color-switcher.js') }}"></script>
<script>
    $(window).on('scroll load', function() {
        $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
    });

</script>

<!-- Slider Revolution scripts -->
<script src="{{ asset('front/website/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/website/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('front/website/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('front/website/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('front/website/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('front/website/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('front/website/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('front/website/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('front/website/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('front/website/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('front/website/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

<script>
    var tpj = jQuery;
    var revapi26;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_26_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_26_1");
        } else {
            revapi26 = tpj("#rev_slider_26_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        touchOnDesktop: "off",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },

                    arrows: {
                        style: "metis",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 80,
                            v_offset: 10
                        },
                        right: {
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 10,
                            v_offset: 10
                        }
                    },
                    bullets: {
                        enable: false,
                        hide_onmobile: false,
                        style: "bullet-bar",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "right",
                        v_align: "bottom",
                        h_offset: 30,
                        v_offset: 30,
                        space: 5,
                        tmp: ''
                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1270, 1024, 778, 480],
                gridheight: [729, 600, 600, 480],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: ".site-header",
                fullScreenOffset: "0px",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/

</script>

<script>
    $('.home5-right-slider').owlCarousel({
        loop: true,
        margin: 30,
        dots: false,
        nav: true,
        rtl: false,
        autoplayHoverPause: false,
        autoplay: false,
        singleItem: true,
        smartSpeed: 1200,
        navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
        responsive: {
            0: {
                items: 1,
                center: false
            },
            480: {
                items: 1,
                center: false
            },
            520: {
                items: 2,
                center: false
            },
            600: {
                items: 2,
                center: false
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 5
            },
            1366: {
                items: 5
            },
            1400: {
                items: 5
            }
        }
    });

</script>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 50,
            },
        }
    });

</script>


<!-- MAIN JS -->
<script src="{{ asset('front/website/js/script.js' ) }}"></script>