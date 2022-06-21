$(window).on('load', function() {
    $("#loader-wrapper").delay(500).fadeOut(500);
});
jQuery(document).ready(function() {

    //   Courese section
    function setDots() {
        $(".owl-dots").removeClass('disabled');
    }
    // $('.activiteis-wrap').owlCarousel({
    //         loop: true,
    //         margin: 40,
    //         responsiveClass: true,
    //         dots: false,
    //         nav: true,
    //         navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>', ],
    //         lazyLoad: true,
    //         responsive: {
    //             0: {
    //                 items: 1,
    //                 nav: false
    //             },
    //             768: {
    //                 items: 2,
    //                 nav: false
    //             },
    //             1024: {
    //                 items: 3,
    //                 loop: true
    //             }
    //         },
    //         onInitialized: setDots,
    //         onChanged: setDots
    //     })
    // RECENT ACTIVITY
    $('.recent-activity').owlCarousel({
            loop: true,
            margin: 40,
           
            dots: false,
            nav: false,
            //autoplay: true,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>', ],
           
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                768: {
                    items: 2,
                    nav: false
                },
                1024: {
                    items: 3,
                    loop: true
                }
            },
            onInitialized: setDots,
            onChanged: setDots
        })
        // RECENT ACTIVITY
    $('.upcomming-activity').owlCarousel({
        loop: true,
        margin: 40,
        responsiveClass: true,
        dots: false,
        nav: true,
        //autoplay: true,
        navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>', ],
        lazyLoad: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 2,
                nav: true
            },
            1024: {
                items: 3,
                loop: true
            }
        },
        onInitialized: setDots,
        onChanged: setDots
    })


    //   MARKETPLACE section
    // function setDots() {
    //     $(".owl-dots").removeClass('disabled');
    // }
    $('.marketplace-item-wrap').owlCarousel({
        loop: true,
        margin: 60,
        responsiveClass: true,
        dots: false,
        nav: true,
        center: true,
        autoplay: true,
        slideBy: 1,
        autoplayHoverPause: true,
        navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>', ],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 2,
                nav: false
            },
            1024: {
                items: 3,
                loop: true
            }
        },
        onInitialized: setDots,
        onChanged: setDots
    })

    // Studen project
    $('.project-items-wrap').owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass: true,
        dots: false,
        nav: true,
        // center: true,
        autoplayHoverPause: true,
        navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>', ],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 2,
                nav: false
            },
            1024: {
                items: 3,
                loop: true
            },
            1440: {
                items: 4,
                loop: true
            }
        },
        onInitialized: setDots,
        onChanged: setDots
    })

    $('.teacher-sec-wrap ').owlCarousel({
        loop: true,
        margin: 40,
        responsiveClass: true,
        dots: false,
        nav: false,
        center: true,
        slideBy: 1,
        autoplay: true,
        navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>', ],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 2,
                nav: false
            },
            1024: {
                items: 3,
                loop: true
            }
        },
        onInitialized: setDots,
        onChanged: setDots
    })

    // Clients
    $('.slider__image').owlCarousel({
        loop: true,
        // spaceBetween: 10,
        center: true,
        responsiveClass: true,
        dots: false,
        navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>', ],
        nav: true,
        responsive: {
            0: {
                items: 3,
                nav: false
            },
            576: {
                items: 4,
                nav: false
            },
            992: {
                items: 5,
                loop: true
            }
        },
    })





    // scroll up start here
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.scrollTop').css({ 'bottom': '2%', 'opacity': '1', 'transition': 'all .9s ease' });
            } else {
                $('.scrollTop').css({ 'bottom': '-30%', 'opacity': '0', 'transition': 'all .9s ease' })
            }
        });
        //Click event to scroll to top
        $('.scrollTop').on('click', function() {
            $('html, body').animate({ scrollTop: 0 }, 300);
            return false;
        });
    });




    // Header
    /*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
    const sections = document.querySelectorAll('section[id]')

    function scrollActive() {
        const scrollY = window.pageYOffset

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight,
                sectionTop = current.offsetTop - 50,
                sectionId = current.getAttribute('id')

            // if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            //     document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
            // } else {
            //     document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
            // }
        })
    }
    window.addEventListener('scroll', scrollActive)


    /*=============== CHANGE BACKGROUND HEADER ===============*/
    function scrollHeader() {
        const header = document.getElementById('header')
            // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
        if (this.scrollY >= 80) header.classList.add('scroll-header');

        else header.classList.remove('scroll-header');


        if (this.scrollY >= 80) {
            header.classList.add('header-top-0')
        } else {
            header.classList.remove('header-top-0')
        };
        if (window.matchMedia("(min-width: 768px)").matches) {
            if (this.scrollY >= 220) header.classList.add('scroll-header');
            else header.classList.remove('scroll-header')
            if (this.scrollY >= 220) header.classList.add('header-show');
            else header.classList.remove('header-show')
        }
    }
    window.addEventListener('scroll', scrollHeader)


    // Circle Animation
    $('.test-img-item').on('click', function(e) {
        console.log(document.getElementById('test-main').src)
        document.getElementById('test-main').src = e.target.src
    })



    gsap.to(".c-1", {
        motionPath: {
            path: "#crcl-1",
            align: "#crcl-1",
            autoRotate: true,
            alignOrigin: [0.5, 0.5],
            start: -.15
        },
        duration: 100,
        repeat: -1
    })
    gsap.to(".c-2", {
        motionPath: {
            path: "#crcl-1",
            align: "#crcl-1",
            autoRotate: true,
            alignOrigin: [0.5, 0.5],
            start: 0.25,
            end: 1.25
        },
        duration: 100,
        repeat: -1
    })

    gsap.to(".c-3", {
        motionPath: {
            path: "#crcl-2",
            align: "#crcl-2",
            autoRotate: true,
            alignOrigin: [0.5, 0.5],
            start: 0.50,
            end: 1.50
        },
        duration: 100,

        repeat: -1
    })
    gsap.to(".C-4", {
            motionPath: {
                path: "#crcl-3",
                align: "#crcl-3",
                autoRotate: true,
                alignOrigin: [0.5, 0.5],
                start: 0.75,
                end: 1.75
            },
            duration: 100,
            repeat: -1
        })
        // Circle Animation

    // MAGNIFIC POPUP
    $('#a-youtube').magnificPopup({
        type: 'iframe'
    });
    $('.y-frame-market').magnificPopup({
        type: 'iframe'
    });


    // $('#subject').niceSelect();

    var swiper = new Swiper(".studentSay", {
        slidesPerView: 3,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
            },
            // when window width is >= 480px
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window width is >= 640px
            1024: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        }
    });





    // course Swiper
    var swiper = new Swiper(".courseSwiper", {
        direction: "vertical",
        freeMode: true,
        slidesToScroll: 1,
        watchSlidesProgress: true,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 3,
            },
            // when window width is >= 480px
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 640px
            1024: {
                slidesPerView: 6,
                spaceBetween: 40
            }
        }
    });
    var swiper = new Swiper(".courseContentSwiper", {
        loop: true,
        autoplay: true,

        loopFillGroupWithBlank: true,
        thumbs: {
            swiper: swiper,
        }
    });


    $('.nav__name').on('click', function(e) {
        let link = $('.nav__name');
        link.removeClass('active');
        $(this).addClass('active')

    })


    // count Down
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.now();
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);

            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }
    // count down timer:
    var deadline = new Date(Date.now() + 1 * 30 * 60 * 60 * 1000);

    initializeClock('clockdiv', deadline);





    // Course carousel

    // Course section
    var owl = $('.course-content');
    owl.owlCarousel({
        loop: true,
        margin: 40,
        responsiveClass: true,
        dots: false,
        autoplay: false,
        nav: false,
        lazyLoad: true,
        items: 3,
        center: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 2,
                nav: false
            },
            1024: {
                items: 3,
                loop: true
            }
        },

    });
    owl.on('changed.owl.carousel', function() {
        id = $('.course-content .owl-item.active section')[1].getAttribute('id');
        const sections = document.querySelectorAll('.course-content section[id]')
        sections.forEach(current => {
            sectionId = current.getAttribute('id')
            if (id == sectionId) {
                document.querySelector('.course-sidebar a[href*=' + sectionId + ']').classList.add('active-link')
            } else {
                document.querySelector('.course-sidebar a[href*=' + sectionId + ']').classList.remove('active-link')
            }
        })
    })




})