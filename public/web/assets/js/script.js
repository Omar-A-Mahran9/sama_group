const swiper = new Swiper('.swiper', {
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

const swiperDivisio = new Swiper('.divisio .swiper', {
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 4,
      spaceBetween: 40
    }
  }
});


let btns = document.querySelectorAll('[data-navbar-btn]');
let navbar = document.querySelector('[data-navbar]');
let overlay = document.querySelector('.overlay');

btns.forEach(btn => {
  btn.addEventListener('click', function () {
    navbar.classList.toggle('active')
    overlay.classList.toggle('active')
  })
});

overlay.addEventListener('click', function () {
  navbar.classList.remove('active')
  overlay.classList.remove('active')
})