/***************************************************
==================== JS INDEX ======================
01. Preloader activation
02. Mobile Menu Js
03. Sidebar Toggle
04. Body overlay Js
05. Search form Js
06. Sticky Header Js
07. Data Css js
08. settings append in body Js
09. Banner-4 active js
10. Masonary Js
11. MagnificPopup image view
12. MagnificPopup video view
13. Counter Js
14. Nice select Js
15. Banner slider Js
16. Brand slider Js
17. Facilities slider Js
18. Testimonial slider Js start
19. Service2 slider Js
20. Contact Us Map activation js
21. aobut-3 activation js
22. service-3 js
23. counter js
24. testimonial-3 js
25. facilities-4 js
26. News-4 js
27. Banner-5 active js
28. movies-5 js
29. Feature-5 js
30. inner about > mission js
31. inner about > journey js
32. inner service > single js
33. inner team-member js
34. index-5 category part js
35. Nav Hover js
36. ScrollSmoother js
37. GsapRegisterPlugin js
38. Config GSAP js
39. Title Animation js
40. Text Animation js
41. Home Hero Animation js
42. Fade In Bottom Animation js
43. Fade in Left Animation js
44. fade in right animation js
45. Fade in Down Animation js
46. FadeUp animation js
47. bdFade-2 js
48. bdFade-3 js
49. bdFade-4 js
50. bdFade-5 js
51. fade_bottom_3 js
52. fade_bottom_4 js
53. Image Zoom Animation js
54. Accordion-fix js
55. Accordion-2-fix js
56. nav-tab fix js
****************************************************/

(function ($) {
    "use strict";
    var windowOn = $(window);

    /*======================================
  01. Preloader activation
  ========================================*/
    var windowOn = $(window);
    windowOn.on("load", function () {
        $("#loading").fadeOut(1000);
    });

    /*======================================
  02. Mobile Menu Js
  ========================================*/
    $("#mobile-menu").meanmenu({
        meanMenuContainer: ".mobile-menu",
        meanScreenWidth: "1199",
        meanExpand: ['<i class="fal fa-plus"></i>'],
    });

    /*======================================
  03. Sidebar Toggle
  ========================================*/
    $(".offcanvas__close,.offcanvas__overlay").on("click", function () {
        $(".offcanvas__info").removeClass("info-open");
        $(".offcanvas__overlay").removeClass("overlay-open");
    });
    $(".sidebar__active, .sidebar_open_btn").on("click", function () {
        $(".offcanvas__info").addClass("info-open");
        $(".offcanvas__overlay").addClass("overlay-open");
    });

    /*======================================
  04. Body overlay Js
  ========================================*/
    $(".body-overlay").on("click", function () {
        $(".offcanvas__area").removeClass("opened");
        $(".body-overlay").removeClass("opened");
    });

    /*======================================
  05. Search form Js
  ========================================*/
    $(".ak-search-btn").on("click", function () {
        $(".search__popup").addClass("search-opened");
    });
    $(".search-close-btn, .offcanvas-overlay").on("click", function () {
        $(".search__popup").removeClass("search-opened");
    });

    /*======================================
  06. Sticky Header Js
  ========================================*/
    windowOn.on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 100) {
            $("#header-sticky").removeClass("sticky");
        } else {
            $("#header-sticky").addClass("sticky");
        }
    });

    windowOn.on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 100) {
            $("#header-sticky-2").removeClass("sticky-2");
        } else {
            $("#header-sticky-2").addClass("sticky-2");
        }
    });

    /*======================================
  07. Data Css js
  ========================================*/
    $("[data-background").each(function () {
        $(this).css(
            "background-image",
            "url( " + $(this).attr("data-background") + "  )"
        );
    });

    $("[data-width]").each(function () {
        $(this).css("width", $(this).attr("data-width"));
    });

    $("[data-bg-color]").each(function () {
        $(this).css("background-color", $(this).attr("data-bg-color"));
    });

    /*======================================
	08. settings append in body Js
	========================================*/
    function bd_settings_append($x) {
        var settings = $("body");
        let dark;
        $x == true ? (dark = "d-block") : (dark = "d-none");
        var settings_html = `<div class="bd-theme-settings-area transition-3">
		<div class="bd-theme-wrapper">
		   <div class="bd-theme-header text-center">
			  <h4 class="bd-theme-header-title">Template Settings</h4>
		   </div>

		   <!-- THEME TOGGLER -->
		   <div class="bd-theme-toggle mb-20 ${dark}">
			  <label class="bd-theme-toggle-main" for="bd-theme-toggler">
				 <span class="bd-theme-toggle-dark"><i class="fa-light fa-moon"></i> Dark</span>
					<input type="checkbox" id="bd-theme-toggler">
					<i class="bd-theme-toggle-slide"></i>
				 <span class="bd-theme-toggle-light active"><i class="fa-light fa-sun-bright"></i> Light</span>
			  </label>
		   </div>

		   <!--  RTL SETTINGS -->
		   <div class="bd-theme-dir mb-20">
			  <label class="bd-theme-dir-main" for="bd-dir-toggler">
				 <span class="bd-theme-dir-rtl"> RTL</span>
					<input type="checkbox" id="bd-dir-toggler">
					<i class="bd-theme-dir-slide"></i>
				 <span class="bd-theme-dir-ltr active"> LTR</span>
			  </label>
		   </div>

		   <!-- COLOR SETTINGS -->
		   <div class="bd-theme-settings">
			  <div class="bd-theme-settings-wrapper">
				 <div class="bd-theme-settings-open">
					<button class="bd-theme-settings-open-btn">
					   <span class="bd-theme-settings-gear">
						  <i class="fa-light fa-gear"></i>
					   </span>
					   <span class="bd-theme-settings-close">
						  <i class="fa-regular fa-xmark"></i>
					   </span>
					</button>
				 </div>
				 <div class="row row-cols-4 gy-2 gx-2">
					<div class="col">
					   <div class="bd-theme-color-item bd-color-active">
						  <button class="bd-theme-color-btn bd-color-settings-btn d-none" data-color-default="#F50963" type="button" data-color="#F50963"></button>
						  <button class="bd-theme-color-btn bd-color-settings-btn" type="button" data-color="#F50963"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="bd-theme-color-item bd-color-active">
						  <button class="bd-theme-color-btn bd-color-settings-btn" type="button" data-color="#008080"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="bd-theme-color-item bd-color-active">
						  <button class="bd-theme-color-btn bd-color-settings-btn" type="button" data-color="#2CAE76"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="bd-theme-color-item bd-color-active">
						  <button class="bd-theme-color-btn bd-color-settings-btn" type="button" data-color="#3661FC"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="bd-theme-color-item bd-color-active">
						  <button class="bd-theme-color-btn bd-color-settings-btn" type="button" data-color="#2CAE76"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="bd-theme-color-item bd-color-active">
						  <button class="bd-theme-color-btn bd-color-settings-btn" type="button" data-color="#F87A58"></button>
					   </div>
					</div>
					<div class="col">
                        <div class="bd-theme-color-item bd-color-active">
                           <button class="bd-theme-color-btn bd-color-settings-btn" type="button" data-color="#03041C"></button>
                        </div>
                     </div>
					<div class="col">
					   <div class="bd-theme-color-item bd-color-active">
						  <button class="bd-theme-color-btn bd-color-settings-btn" type="button" data-color="#ED212C"></button>
					   </div>
					</div>
				 </div>
			  </div>
			  <div class="bd-theme-color-input">
				 <h6>Choose Custom Color</h6>
				 <input type="color" id="bd-color-setings-input" value="#F50963">
				 <label id="bd-theme-color-label" for="bd-color-setings-input"></label>
			  </div>
		   </div>
		</div>
	 </div>`;

        settings.append(settings_html);
    }
    bd_settings_append(true); // if want to enable dark light mode then send "true";

    // settings open btn
    $(".bd-theme-settings-open-btn").on("click", function () {
        $(".bd-theme-settings-area").toggleClass("settings-opened");
    });

    // rtl settings
    function bd_rtl_settings() {
        $("#bd-dir-toggler").on("change", function () {
            toggle_rtl();
            window.location.reload(true);
        });

        // set toggle theme scheme
        function bd_set_scheme(bd_dir) {
            localStorage.setItem("bd_dir", bd_dir);
            document.documentElement.setAttribute("dir", bd_dir);

            if (bd_dir === "rtl") {
                var list = $("[href='assets/app/css/bootstrap.min.css']");
                $(list).attr("href", "assets/app/css/bootstrap.rtl.min.css");
            } else {
                var list = $("[href='assets/app/css/bootstrap.min.css']");
                $(list).attr("href", "assets/app/css/bootstrap.min.css");
            }
        }

        // toogle theme scheme
        function toggle_rtl() {
            if (localStorage.getItem("bd_dir") === "rtl") {
                bd_set_scheme("ltr");
                var list = $("[href='assets/app/css/bootstrap.rtl.min.css']");
                $(list).attr("href", "assets/app/css/bootstrap.min.css");
            } else {
                bd_set_scheme("rtl");
                var list = $("[href='assets/app/css/bootstrap.min.css']");
                $(list).attr("href", "assets/app/css/bootstrap.rtl.min.css");
            }
        }

        // set the first theme scheme
        function bd_init_dir() {
            if (localStorage.getItem("bd_dir") === "rtl") {
                bd_set_scheme("rtl");
                var list = $("[href='assets/app/css/bootstrap.min.css']");
                $(list).attr("href", "assets/app/css/bootstrap.rtl.min.css");
                document.getElementById("bd-dir-toggler").checked = true;
            } else {
                bd_set_scheme("ltr");
                document.getElementById("bd-dir-toggler").checked = false;
                var list = $("[href='assets/app/css/bootstrap.min.css']");
                $(list).attr("href", "assets/app/css/bootstrap.min.css");
            }
        }
        bd_init_dir();
    }
    if ($("#bd-dir-toggler").length > 0) {
        bd_rtl_settings();
    }

    // dark light mode toggler
    function bd_theme_toggler() {
        $("#bd-theme-toggler").on("change", function () {
            toggleTheme();
        });

        // set toggle theme scheme
        function bd_set_scheme(bd_theme) {
            localStorage.setItem("bd_theme_scheme", bd_theme);
            document.documentElement.setAttribute("bd-theme", bd_theme);
        }

        // toogle theme scheme
        function toggleTheme() {
            if (localStorage.getItem("bd_theme_scheme") === "bd-theme-light") {
                bd_set_scheme("bd-theme-dark");
            } else {
                bd_set_scheme("bd-theme-light");
            }
        }

        // set the first theme scheme
        function bd_init_theme() {
            if (localStorage.getItem("bd_theme_scheme") === "bd-theme-light") {
                bd_set_scheme("bd-theme-light");
                document.getElementById("bd-theme-toggler").checked = false;
            } else {
                bd_set_scheme("bd-theme-dark");
                document.getElementById("bd-theme-toggler").checked = true;
            }
        }
        bd_init_theme();
    }
    if ($("#bd-theme-toggler").length > 0) {
        bd_theme_toggler();
    }

    // color settings
    function bd_color_settings() {
        // set color scheme
        function bd_set_color(ep_color_scheme) {
            localStorage.setItem("ep_color_scheme", ep_color_scheme);
            document
                .querySelector(":root")
                .style.setProperty("--clr-theme-1", ep_color_scheme);
            document.getElementById("bd-color-setings-input").value =
                ep_color_scheme;
            document.getElementById(
                "bd-theme-color-label"
            ).style.backgroundColor = ep_color_scheme;
        }

        // set color
        function bd_set_input() {
            var color = localStorage.getItem("ep_color_scheme");
            document.getElementById("bd-color-setings-input").value = color;
            document.getElementById(
                "bd-theme-color-label"
            ).style.backgroundColor = color;
        }
        bd_set_input();

        function bd_init_color() {
            var defaultColor = $(".bd-color-settings-btn").attr(
                "data-color-default"
            );
            var setColor = localStorage.getItem("ep_color_scheme");

            if (setColor != null) {
            } else {
                setColor = defaultColor;
            }

            if (defaultColor !== setColor) {
                document
                    .querySelector(":root")
                    .style.setProperty("--clr-theme-1", setColor);
                document.getElementById("bd-color-setings-input").value =
                    setColor;
                document.getElementById(
                    "bd-theme-color-label"
                ).style.backgroundColor = setColor;
                bd_set_color(setColor);
            } else {
                document
                    .querySelector(":root")
                    .style.setProperty("--clr-theme-1", defaultColor);
                document.getElementById("bd-color-setings-input").value =
                    defaultColor;
                document.getElementById(
                    "bd-theme-color-label"
                ).style.backgroundColor = defaultColor;
                bd_set_color(defaultColor);
            }
        }
        bd_init_color();

        let themeButtons = document.querySelectorAll(".bd-color-settings-btn");

        themeButtons.forEach((color) => {
            color.addEventListener("click", () => {
                let datacolor = color.getAttribute("data-color");
                document
                    .querySelector(":root")
                    .style.setProperty("--clr-theme-1", datacolor);
                document.getElementById(
                    "bd-theme-color-label"
                ).style.backgroundColor = datacolor;
                bd_set_color(datacolor);
            });
        });

        const colorInput = document.querySelector("#bd-color-setings-input");
        const colorVariable = "--clr-theme-1";

        colorInput.addEventListener("change", function (e) {
            var clr = e.target.value;
            document.documentElement.style.setProperty(colorVariable, clr);
            bd_set_color(clr);
            bd_set_check(clr);
        });

        function bd_set_check(clr) {
            const arr = Array.from(document.querySelectorAll("[data-color]"));

            var a = localStorage.getItem("ep_color_scheme");

            let test = arr
                .map((color) => {
                    let datacolor = color.getAttribute("data-color");

                    return datacolor;
                })
                .filter((color) => color == a);

            var arrLength = test.length;

            if (arrLength == 0) {
                $(".bd-color-active").removeClass("active");
            } else {
                $(".bd-color-active").addClass("active");
            }
        }

        function bd_check_color() {
            var a = localStorage.getItem("ep_color_scheme");

            var list = $(`[data-color="${a}"]`);

            list.parent()
                .addClass("active")
                .parent()
                .siblings()
                .find(".bd-color-active")
                .removeClass("active");
        }
        bd_check_color();

        $(".bd-color-active").on("click", function () {
            $(this)
                .addClass("active")
                .parent()
                .siblings()
                .find(".bd-color-active")
                .removeClass("active");
        });
    }
    if (
        $(".bd-color-settings-btn").length > 0 &&
        $("#bd-color-setings-input").length > 0 &&
        $("#bd-theme-color-label").length > 0
    ) {
        bd_color_settings();
    }

    var bd_rtl = localStorage.getItem("bd_dir");
    let rtl_setting = bd_rtl == "rtl" ? true : false;

    /*======================================
  09. Banner-4 active js
  ========================================*/
    if (jQuery(".banner4-slider-active").length > 0) {
        let sliderActive1 = ".banner4-slider-active";
        let sliderInit1 = new Swiper(sliderActive1, {
            // Optional parameters
            slidesPerView: 1,
            slidesPerColumn: 1,
            paginationClickable: true,
            loop: true,
            effect: "fade",
            autoplay: true,
            autoplay: {
                delay: 7000,
            },

            // If we need pagination
            pagination: {
                el: ".slider-pagination",
                // dynamicBullets: true,
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: ".slider-button-next",
                prevEl: ".slider-button-prev",
            },

            a11y: false,
        });

        function animated_swiper(selector, init) {
            let animated = function animated() {
                $(selector + " [data-animation]").each(function () {
                    let anim = $(this).data("animation");
                    let delay = $(this).data("delay");
                    let duration = $(this).data("duration");

                    $(this)
                        .removeClass("anim" + anim)
                        .addClass(anim + " animated")
                        .css({
                            webkitAnimationDelay: delay,
                            animationDelay: delay,
                            webkitAnimationDuration: duration,
                            animationDuration: duration,
                        })
                        .one(
                            "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
                            function () {
                                $(this).removeClass(anim + " animated");
                            }
                        );
                });
            };
            animated();
            // Make animated when slide change
            init.on("slideChange", function () {
                $(sliderActive1 + " [data-animation]").removeClass("animated");
            });
            init.on("slideChange", animated);
        }

        animated_swiper(sliderActive1, sliderInit1);
    }

    /*======================================
  10. Masonary Js
  ========================================*/
    $(".grid").imagesLoaded(function () {
        // init Isotope
        var $grid = $(".grid").isotope({
            itemSelector: ".grid-item",
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: ".grid-item",
            },
        });

        // filter items on button click
        $(".project__filter-button").on("click", "button", function () {
            var filterValue = $(this).attr("data-filter");
            $grid.isotope({ filter: filterValue });
        });

        //for menu active class
        $(".project__filter-button button").on("click", function (event) {
            $(this).siblings(".active").removeClass("active");
            $(this).addClass("active");
            event.preventDefault();
        });
    });

    /*======================================
  11. MagnificPopup image view
  ========================================*/
    $(".popup-image").magnificPopup({
        type: "image",
        gallery: {
            enabled: true,
        },
    });

    /*======================================
  12. MagnificPopup video view
  ========================================*/
    $(".popup-video").magnificPopup({
        type: "iframe",
    });

    /*======================================
  13. Counter Js
  ========================================*/
    const about_counter = window.counterUp.default;
    const about_cb = (entries) => {
        entries.forEach((entry) => {
            const el = entry.target;
            if (entry.isIntersecting && !el.classList.contains("is-visible")) {
                about_counter(el, {
                    duration: 1000,
                    delay: 16,
                });
                el.classList.add("is-visible");
            }
        });
    };

    const IO = new IntersectionObserver(about_cb, {
        threshold: 1,
    });

    const els = document.querySelectorAll(".counter");
    els.forEach((el) => {
        IO.observe(el);
    });

    /*======================================
    14. Nice select Js
    ========================================*/
    $(document).ready(function () {
        $("select").niceSelect();
    });

    /*======================================
    15. Banner slider Js
  ========================================*/
    $(".banner-active").slick({
        slidesToShow: 1,
        arrows: false,
        Infinity: true,
        dots: true,
        speed: 1000,
        rtl: rtl_setting,
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    /*======================================
    16. Brand slider Js
  ========================================*/
    $(".brand-active").slick({
        slidesToShow: 4,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1300,
        rtl: rtl_setting,
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    /*======================================
    17. Facilities slider Js
  ========================================*/
    $(".facilities-active").slick({
        slidesToShow: 3,
        arrows: false,
        speed: 2000,
        dots: true,
        centerMode: true,
        infinity: true,
        autoplay: true,
        autoplaySpeed: 1000,
        centerPadding: "0px",
        rtl: rtl_setting,
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    /*======================================
  18. Testimonial slider Js start
  ========================================*/
    if ($(".testi-img-active").length > 0) {
        $(".testi-img-active").slick({
            vertical: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,

            asNavFor: ".testi-content-active",
            dots: false,
            centerMode: true,
            centerPadding: "0px",
            focusOnSelect: true,
            autoplay: true,
            speed: 200,
            autoplaySpeed: 8000,
            // cssEase: "linear",
            loop: true,
            appendArrows: $(".testi-content-slider"),
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        vertical: false,
                        rtl: rtl_setting,
                    },
                },
                {
                    breakpoint: 768,

                    settings: {
                        slidesToShow: 3,
                        vertical: false,
                        rtl: rtl_setting,
                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        vertical: false,
                        rtl: rtl_setting,
                    },
                },
            ],
        });
    }
    if ($(".testi-content-active").length > 0) {
        $(".testi-content-active").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 200,
            centerMode: true,
            centerPadding: "",
            rtl: rtl_setting,
            // cssEase: 'linear',
            asNavFor: ".testi-img-active",
            prevArrow:
                '<i class="fa-light fa-angle-left testi-content-active-left-btn"></i>',
            nextArrow:
                '<i class="fa-light fa-angle-right testi-content-active-right-btn"></i>',
        });
    }

    /*======================================
  19. Service2 slider Js
  ========================================*/
    $(".ak-service2-slider-active").slick({
        slidesToShow: 4,
        speed: 1500,
        arrows: false,
        dots: true,
        infinity: true,
        rtl: rtl_setting,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    /*======================================
  20. Contact Us Map activation js
  ========================================*/
    $(".location-dot").on("mouseenter", function () {
        $(this)
            .addClass("active")
            .parent()
            .siblings()
            .find(".location-dot")
            .removeClass("active");
    });

    /*======================================
  21. aobut-3 activation js
  ========================================*/
    var about3 = new Swiper(".ak-about3-active", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        rtl: rtl_setting,
        pagination: {
            el: ".about3-slider-dot",
            clickable: true,
        },
        breakpoints: {
            1200: {
                slidesPerView: 1,
            },
            992: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 1,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
  22. service-3 js
  ========================================*/
    var service3 = new Swiper(".ak-service3-active", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        speed: 1000,
        pagination: {
            el: ".service3-slider-dot",
            clickable: true,
        },
        breakpoints: {
            1200: {
                centeredSlides: true,
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            576: {
                slidesPerView: 1,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
  23. counter js
  ========================================*/
    $("#percentage").waypoint(
        function () {
            // circle-1
            $("#circle-1")
                .circleProgress({
                    value: 0.75,
                    size: 151,
                    thickness: 12,
                    // lineCap: 'round',
                    emptyFill: "#450B0F",
                    fill: {
                        gradient: [
                            "rgba(212, 33, 47, 0.10",
                            "rgba(212, 33, 47, 1",
                        ],
                    },
                })
                .on("circle-animation-progress", function (event, progress) {
                    $(this)
                        .find(".counter_percentage")
                        .html(Math.round(95 * progress) + "<i>%</i>");
                });

            $("#circle-2")
                .circleProgress({
                    value: 0.55,
                    size: 151,
                    thickness: 12,
                    // lineCap: 'round',
                    emptyFill: "#450B0F",
                    fill: {
                        gradient: [
                            "rgba(212, 33, 47, 0.10",
                            "rgba(212, 33, 47, 1",
                        ],
                    },
                })
                .on("circle-animation-progress", function (event, progress) {
                    $(this)
                        .find(".counter_percentage")
                        .html(Math.round(47 * progress) + "<i>%</i>");
                });

            $(".second.circle")
                .circleProgress({
                    value: 0.6,
                })
                .on("circle-animation-progress", function (event, progress) {
                    $(this)
                        .find("strong")
                        .html(Math.round(100 * progress) + "<i>%</i>");
                });

            $("#circle-3")
                .circleProgress({
                    value: 0.45,
                    size: 151,
                    thickness: 12,
                    // lineCap: 'round',
                    emptyFill: "#450B0F",
                    fill: {
                        gradient: [
                            "rgba(212, 33, 47, 0.10",
                            "rgba(212, 33, 47, 1",
                        ],
                    },
                })
                .on("circle-animation-progress", function (event, progress) {
                    $(this)
                        .find(".counter_percentage")
                        .html(Math.round(24 * progress) + "<i>%</i>");
                });
        },
        {
            offset: "bottom-in-view",
        }
    );

    /*======================================
  24. testimonial-3 js
  ========================================*/
    var testimonial3 = new Swiper(".ak-testimonial3-active", {
        slidesPerView: 3,
        spaceBetween: 56,
        loop: true,
        centeredSlides: true,
        speed: 1000,
        pagination: {
            el: ".testimonial3-slider-dot",
            clickable: true,
        },
        breakpoints: {
            1200: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 1,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
  25. facilities-4 js
  ========================================*/
    var facilities4 = new Swiper(".ak-facilities4-active", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        pagination: {
            el: ".ak-facilities4-slider-dot",
            clickable: true,
        },
        breakpoints: {
            1200: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            576: {
                slidesPerView: 1,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
  26. News-4 js
  ========================================*/
    var news4 = new Swiper(".ak-news4-active", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".ak-news4-button-next",
            prevEl: ".ak-news4-button-prev",
        },
        breakpoints: {
            1200: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 1,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
  27. Banner-5 active js
  ========================================*/
    if (jQuery(".banner5-slider-active").length > 0) {
        let sliderActive1 = ".banner5-slider-active";
        let sliderInit1 = new Swiper(sliderActive1, {
            // Optional parameters
            slidesPerView: 1,
            slidesPerColumn: 1,
            paginationClickable: true,
            loop: true,
            effect: "fade",
            autoplay: true,
            autoplay: {
                delay: 7000,
            },

            // If we need pagination
            pagination: {
                el: ".ak-banner5-slider-dot",
                // dynamicBullets: true,
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: ".slider-button-next",
                prevEl: ".slider-button-prev",
            },

            a11y: false,
        });

        function animated_swiper(selector, init) {
            let animated = function animated() {
                $(selector + " [data-animation]").each(function () {
                    let anim = $(this).data("animation");
                    let delay = $(this).data("delay");
                    let duration = $(this).data("duration");

                    $(this)
                        .removeClass("anim" + anim)
                        .addClass(anim + " animated")
                        .css({
                            webkitAnimationDelay: delay,
                            animationDelay: delay,
                            webkitAnimationDuration: duration,
                            animationDuration: duration,
                        })
                        .one(
                            "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
                            function () {
                                $(this).removeClass(anim + " animated");
                            }
                        );
                });
            };
            animated();
            // Make animated when slide change
            init.on("slideChange", function () {
                $(sliderActive1 + " [data-animation]").removeClass("animated");
            });
            init.on("slideChange", animated);
        }

        animated_swiper(sliderActive1, sliderInit1);
    }

    /*======================================
  28. movies-5 js
  ========================================*/
    var movies = new Swiper(".ak-movies-active", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".ak-movies-slider-dot",
            clickable: true,
        },
        breakpoints: {
            1200: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 1,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
  29. Feature-5 js
  ========================================*/
    var feature5 = new Swiper(".ak-feature5-active", {
        slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: true,
        speed: 1000,
        loop: true,
        pagination: {
            el: ".ak-feature5-slider-dot",
            clickable: true,
        },
        breakpoints: {
            1200: {
                slidesPerView: 1,
            },
            992: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 1,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
  30. inner about > mission js
  ========================================*/
    var mission = new Swiper(".ak-mission-active", {
        slidesPerView: 4,
        spaceBetween: 30,
        speed: 1000,
        loop: true,
        autoplay: {
            autoplay: true,
            delay: 2000,
        },
        breakpoints: {
            1200: {
                slidesPerView: 4,
            },
            992: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 3,
            },
            576: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
  31. inner about > journey js
  ========================================*/
    $(".ak-journey-active").slick({
        slidesToShow: 5,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 6000,
        pauseOnFocus: true,
        pauseOnHover: true,
        cssEase: "linear",
        rtl: rtl_setting,
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2.5,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1.6,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1.5,
                },
            },
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                },
            },
        ],
    });

    /*======================================
  32. inner service > single js
  ========================================*/
    var single = new Swiper(".service-single-active", {
        slidesPerView: 5,
        spaceBetween: 28,
        speed: 2000,
        loop: true,
        navigation: {
            nextEl: ".service-single-button-next",
            prevEl: ".service-single-button-prev",
        },
        breakpoints: {
            1200: {
                slidesPerView: 4,
            },
            992: {
                slidesPerView: 4,
            },
            768: {
                spaceBetween: 20,
                slidesPerView: 3,
            },
            576: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
  33. inner team-member js
  ========================================*/
    var team_member = new Swiper(".team-member-active", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        pagination: {
            el: ".team-member-slider-dot",
            clickable: true,
        },
        breakpoints: {
            1200: {
                centeredSlides: true,
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            576: {
                slidesPerView: 1,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
  34. index-5 category part js
  ========================================*/
    const categoImgItem = document.querySelectorAll(".categories-list-item");
    function categoImageCursor(event, categoImgItem) {
        const contentBox = categoImgItem.getBoundingClientRect();
        const dx = event.clientX - contentBox.x;
        const dy = event.clientY - contentBox.y;
        categoImgItem.children[1].style.transform = `translate(${dx}px, ${dy}px)`;
    }
    categoImgItem.forEach((item, i) => {
        item.addEventListener("mousemove", (event) => {
            setInterval(categoImageCursor(event, item), 1000);
        });
    });

    /*======================================
  35. Nav Hover js
  ========================================*/
    // const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    const letters = "thrifatbdevs";
    const elements = [...document.querySelectorAll(".glitch")];
    elements.map((element) => {
        element.onmouseover = (event) => {
            let iterations = 0;
            const interval = setInterval(() => {
                event.target.innerText = event.target.innerText
                    .split("")
                    .map((letter, index) => {
                        if (index < iterations) {
                            return event.target.dataset.value[index];
                        }

                        return letters[Math.floor(Math.random() * 12)];
                    })
                    .join("");

                if (iterations >= event.target.dataset.value.length) {
                    clearInterval(interval);
                }

                iterations += 1 / 3;
            }, 40);
        };
    });

    // NAV Hover Js

    $("#mobile-menu li a").on("mouseover", function () {
        let height = $(this).height();
        let width = $(this).width();
        $(this).css("width", width);
        $(this).css("min-width", width);
    });

    /*======================================
    37. GsapRegisterPlugin js
    ========================================*/
    gsap.registerPlugin("ScrollTrigger, ScrollToPlugin, SplitText");

    /*======================================
  38. Config GSAP js
  ========================================*/
    gsap.config({
        nullTargetWarn: false,
    });

    /*======================================
  39. Title Animation js
  ========================================*/

    let splitTitleLines = gsap.utils.toArray(".title-anim");

    splitTitleLines.forEach((splitTextLine) => {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: splitTextLine,
                start: "top 90%",
                end: "bottom 60%",
                scrub: false,
                markers: false,
                toggleActions: "play none none none",
            },
        });

        const itemSplitted = new SplitText(splitTextLine, {
            type: "words, lines",
        });
        gsap.set(splitTextLine, { perspective: 400 });
        itemSplitted.split({ type: "lines" });
        tl.from(itemSplitted.lines, {
            duration: 1,
            delay: 0.3,
            opacity: 0,
            rotationX: -80,
            force3D: true,
            transformOrigin: "top center -50",
            stagger: 0.1,
            rtl: rtl_setting,
        });
    });

    /*======================================
  40. Text Animation js
  ========================================*/
    let splitTextLines = gsap.utils.toArray(".text-anim p");

    splitTextLines.forEach((splitTextLine) => {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: splitTextLine,
                start: "top 90%",
                duration: 1.7,
                end: "bottom 60%",
                scrub: false,
                markers: false,
                toggleActions: "play none none none",
            },
        });

        const itemSplitted = new SplitText(splitTextLine, { type: "lines" });
        gsap.set(splitTextLine, { perspective: 400 });
        itemSplitted.split({ type: "lines" });
        tl.from(itemSplitted.lines, {
            duration: 1.7,
            delay: 0.5,
            opacity: 0,
            rotationX: -80,
            force3D: true,
            transformOrigin: "top center -50",
            stagger: 0.01,
        });
    });

    /*======================================
  41. Home Hero Animation js
  ========================================*/
    let homeStratup = gsap.timeline();

    // Charchater Come long Animation
    let hero6_title = document.querySelector(".main-title-anim");
    let hero6_button = document.querySelector(".button-anim");
    let hero6_image = document.querySelector(".img-anim");

    gsap.set(hero6_image, {
        opacity: 0,
        y: 50,
    });
    gsap.set(hero6_button, {
        opacity: 0,
        y: 50,
    });

    let split_hero6_title = new SplitText(hero6_title, { type: "words,chars" });
    homeStratup.from(split_hero6_title.chars, {
        duration: 1,
        x: 70,
        autoAlpha: 0,
        stagger: 0.05,
    });
    homeStratup.to(
        hero6_button,
        { opacity: 1, y: 0, duration: 2, ease: "power2.out" },
        "-=1"
    );
    homeStratup.to(
        hero6_image,
        { opacity: 1, y: 0, duration: 1, ease: "power2.out" },
        "-=1"
    );

    /*======================================
  42. Fade In Bottom Animation js
  ========================================*/

    // Get Device width
    let device_width = window.innerWidth;
    gsap.set(".bdFadeBottom", { y: 50, opacity: 0 });
    if (device_width) {
        const fadeArray = gsap.utils.toArray(".bdFadeBottom");
        fadeArray.forEach((item, i) => {
            let fadeTl = gsap.timeline({
                scrollTrigger: {
                    trigger: item,
                    start: "top bottom-=20",
                },
            });
            fadeTl.to(item, {
                y: 0,
                opacity: 1,
                ease: "power2.out",
                duration: 1.5,
            });
        });
    } else {
        gsap.to(".bdFadeBottom", {
            scrollTrigger: {
                trigger: ".bdFadeBottom",
                start: "top bottom-=20",
                markers: false,
            },
            y: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1,
            stagger: {
                each: 0.2,
            },
        });
    }

    /*======================================
  43. Fade in Left Animation js
  ========================================*/
    gsap.set(".bdFadeLeft", { x: -100, opacity: 0 });
    if (device_width) {
        const fadeArray = gsap.utils.toArray(".bdFadeLeft");
        fadeArray.forEach((item, i) => {
            let fadeTl = gsap.timeline({
                scrollTrigger: {
                    trigger: item,
                    start: "top bottom-=100",
                },
            });
            fadeTl.to(item, {
                x: 0,
                opacity: 1,
                ease: "power2.out",
                duration: 1.5,
            });
        });
    } else {
        gsap.to(".bdFadeLeft", {
            scrollTrigger: {
                trigger: ".bdFadeLeft",
                start: "top bottom-=100",
                markers: false,
            },
            x: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1,
            stagger: {
                each: 0.2,
            },
        });
    }

    /*======================================
  44. fade in right animation js
  ========================================*/
    gsap.set(".bdFadeRight", { x: 100, opacity: 0 });

    if (device_width) {
        const fadeArray = gsap.utils.toArray(".bdFadeRight");
        fadeArray.forEach((item, i) => {
            let fadeTl = gsap.timeline({
                scrollTrigger: {
                    trigger: item,
                    start: "top bottom-=100",
                },
            });
            fadeTl.to(item, {
                x: 0,
                opacity: 1,
                ease: "power2.out",
                duration: 1.5,
            });
        });
    } else {
        gsap.to(".bdFadeRight", {
            scrollTrigger: {
                trigger: ".bdFadeRight",
                start: "top bottom-=100",
                markers: false,
            },
            x: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1,
            stagger: {
                each: 0.2,
            },
        });
    }

    /*======================================
  45. Fade in Down Animation js
  ========================================*/
    gsap.set(".bdFadeDown", { y: -50, opacity: 0 });
    if (device_width) {
        const fadeArray = gsap.utils.toArray(".bdFadeDown");
        fadeArray.forEach((item, i) => {
            let fadeTl = gsap.timeline({
                scrollTrigger: {
                    trigger: item,
                    start: "top bottom-=100",
                },
            });
            fadeTl.to(item, {
                y: 0,
                opacity: 1,
                ease: "power2.out",
                duration: 0.9,
            });
        });
    } else {
        gsap.to(".bdFadeDown", {
            scrollTrigger: {
                trigger: ".bdFadeDown",
                start: "top bottom-=100",
                markers: false,
            },
            y: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 0.9,
            stagger: {
                each: 0.2,
            },
        });
    }

    /*======================================
  46. FadeUp animation js
  ========================================*/
    gsap.set(".bdFadeUp", { y: 40, opacity: 0 });
    gsap.to(".bdFadeUp", {
        scrollTrigger: {
            trigger: ".bdFadeUp",
            start: "top bottom-=20",
            markers: false,
        },
        y: 0,
        opacity: 1,
        ease: "back.out(2.7)",
        duration: 1,
        stagger: 0.3,
    });

    /*======================================
  47. bdFade-2 js
  ========================================*/
    gsap.set(".bdFade2", { y: 40, opacity: 0 });
    gsap.to(".bdFade2", {
        scrollTrigger: {
            trigger: ".bdFade2",
            start: "top bottom-=100",
            markers: false,
        },
        y: 0,
        opacity: 1,
        ease: "back.out(2.7)",
        duration: 1,
        stagger: 0.3,
    });

    /*======================================
  48. bdFade-3 js
  ========================================*/
    gsap.set(".bdFade3", { y: 40, opacity: 0 });
    gsap.to(".bdFade3", {
        scrollTrigger: {
            trigger: ".bdFade3",
            start: "top bottom-=100",
            markers: false,
        },
        y: 0,
        opacity: 1,
        ease: "back.out(2.7)",
        duration: 1,
        stagger: 0.3,
    });

    /*======================================
  49. bdFade-4 js
  ========================================*/
    gsap.set(".bdFade4", { y: 40, opacity: 0 });
    gsap.to(".bdFade4", {
        scrollTrigger: {
            trigger: ".bdFade4",
            start: "top bottom-=20",
            markers: false,
        },
        y: 0,
        opacity: 1,
        ease: "back.out(2.7)",
        duration: 1,
        stagger: 0.2,
    });

    /*======================================
  50. bdFade-5 js
  ========================================*/
    gsap.set(".bdFade5", { y: 40, opacity: 0 });
    gsap.to(".bdFade5", {
        scrollTrigger: {
            trigger: ".bdFade5",
            start: "top bottom-=100",
            markers: false,
        },
        y: 0,
        opacity: 1,
        ease: "back.out(2.7)",
        duration: 1,
        stagger: 0.2,
    });

    /*======================================
  51. fade_bottom_3 js
  ========================================*/
    gsap.set(".fade_bottom_3", { y: 30, opacity: 0 });

    if (device_width < 1023) {
        const fadeArray = gsap.utils.toArray(".fade_bottom_3");
        fadeArray.forEach((item, i) => {
            let fadeTl = gsap.timeline({
                scrollTrigger: {
                    trigger: item,
                    start: "top bottom-=100",
                },
            });
            fadeTl.to(item, {
                y: 0,
                opacity: 1,
                ease: "power2.out",
                duration: 2,
                delay: 0.5,
            });
        });
    } else {
        gsap.to(".fade_bottom_3", {
            scrollTrigger: {
                trigger: ".fade_bottom_3",
                start: "top center+=300",
                markers: false,
            },
            y: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1,
            delay: 0.5,
            stagger: {
                each: 0.2,
            },
        });
    }

    /*======================================
    52. fade_bottom_4 js
    ========================================*/
    gsap.set(".fade_bottom_4", { y: 30, opacity: 0 });

    if (device_width < 1023) {
        const fadeArray = gsap.utils.toArray(".fade_bottom_4");
        fadeArray.forEach((item, i) => {
            let fadeTl = gsap.timeline({
                scrollTrigger: {
                    trigger: item,
                    start: "top bottom-=100",
                },
            });
            fadeTl.to(item, {
                y: 0,
                opacity: 1,
                ease: "power2.out",
                duration: 2,
                delay: 0.5,
            });
        });
    } else {
        gsap.to(".fade_bottom_4", {
            scrollTrigger: {
                trigger: ".fade_bottom_4",
                start: "top center+=300",
                markers: false,
            },
            y: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1,
            delay: 0.5,
            stagger: {
                each: 0.2,
            },
        });
    }

    /*======================================
    53. Image Zoom Animation js
    ========================================*/
    gsap.set(".image-zoom", { opacity: 0, scale: 0.5 });

    gsap.to(".image-zoom", {
        scrollTrigger: {
            trigger: ".blog-img-anim",
            start: "top bottom-=100",
            markers: false,
        },
        opacity: 1,
        scale: 1,
        ease: "power2.out",
        duration: 1,
        stagger: {
            each: 0.3,
        },
    });

    /*======================================
    54. Accordion-fix js
    ========================================*/
    ScrollTrigger.create({
        trigger: ".bd-accordion-fix",
        start: "top top",
        end: "+=50",
        pin: true,
        pinSpacing: "margin",
    });

    /*======================================
    55. Accordion-2-fix js
    ========================================*/
    ScrollTrigger.create({
        trigger: ".bd-accordion-fix-2",
        start: "top top",
        end: "+=50",
        pin: true,
        pinSpacing: "margin",
    });

    /*======================================
    56. nav-tab fix js
    ========================================*/
    ScrollTrigger.create({
        trigger: ".bd-nav-tabs-fix",
        start: "top top",
        end: "+=50",
        pin: true,
        pinSpacing: "margin",
    });
})(jQuery);
