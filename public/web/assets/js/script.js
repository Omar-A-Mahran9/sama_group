const projectSwiper = new Swiper(".project-swiper", {
    loop: true,
    slidesPerView: 3, // عدد الصور في كل سلايد
    spaceBetween: 20, // مسافة بين الصور
    speed: 1500, // سرعة الانتقال بين السلايدات
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    effect: "slide", // بدون أي تأثير ثلاثي الأبعاد
    pagination: {
        el: ".project-swiper .swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".project-swiper .swiper-button-next",
        prevEl: ".project-swiper .swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        576: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
    },
});

const swiper = new Swiper(".swiper", {
    loop: true, // Enable looping
    autoplay: {
        delay: 6000, // Change slide every 3 seconds
        disableOnInteraction: true, // Continue autoplay after interaction
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    effect: "fade", // You can use other effects like 'fade', 'cube', 'coverflow'

    speed: 1500, // Transition speed
});

const swiperDivisio = new Swiper(".divisio .swiper", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    },
});

var animate_swiper = new Swiper(".swiper-container", {
    slidesPerView: 3,
    spaceBetween: 10,
    loop: true, // Enable looping
    autoplay: {
        delay: 3000, // Change slide every 3 seconds
        disableOnInteraction: true, // Continue autoplay after interaction
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true, // Pagination bullets are clickable
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    effect: "slide", // You can use other effects like 'fade', 'cube', 'coverflow'
    speed: 1500, // Transition speed
});

let btns = document.querySelectorAll("[data-navbar-btn]");
let navbar = document.querySelector("[data-navbar]");
let overlay = document.querySelector(".overlay");

btns.forEach((btn) => {
    btn.addEventListener("click", function () {
        navbar.classList.toggle("active");
        overlay.classList.toggle("active");
    });
});

overlay.addEventListener("click", function () {
    navbar.classList.remove("active");
    overlay.classList.remove("active");
});
