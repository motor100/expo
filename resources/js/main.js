import IMask from 'imask';
// import Swiper from 'swiper';
// import { Navigation, Pagination } from 'swiper/modules';

// import mainSectionBg from '/public/img/main-section-bg.png';


// Common
const body = document.querySelector('body');
const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // csrf token


// Preloader
const preloader = document.querySelector('.preloader');

window.setTimeout(function () {
  preloader.classList.add('loaded-hiding');
}, 500);
window.setTimeout(function () {
  preloader.classList.add('loaded');
  preloader.classList.remove('loaded-hiding');
}, 1100);


// Main slider section
const mainSliderWrapper = document.querySelector('.main-slider-wrapper')

if (mainSliderWrapper) {
  const mainSlider = new Swiper('.main-slider', {
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 5000,
    },
  });
}


// Input mask
function inputPhoneMask() {
  const elementPhone = document.querySelectorAll('.js-input-phone-mask');

  const maskOptionsPhone = {
    mask: '+{7} 000 000 00 00'
  };

  elementPhone.forEach((item) => {
    const mask = IMask(item, maskOptionsPhone);
  });
}

inputPhoneMask();


// Slider section
const sliderSection = document.querySelector('.slider-section')

if (sliderSection) {
  const snSlider = new Swiper('.sn-slider', {
    slidesPerView: 3,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}

// Nav menu item set active
const asideItemLink = document.querySelectorAll('.top-menu .menu-item-link');

if (typeof(menuItem) != "undefined" && menuItem !== null) {
  asideItemLink[menuItem].classList.add('active');
}

