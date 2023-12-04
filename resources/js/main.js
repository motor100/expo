import IMask from 'imask';
// import Swiper from 'swiper';
// import { Navigation, Pagination } from 'swiper/modules';

// import mainSectionBg from '/public/img/main-section-bg.png';


// Common
const body = document.querySelector('body');
const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // csrf token


// Preloader
const preloader = document.querySelector('.preloader');

if (preloader) {
  window.setTimeout(function () {
    preloader.classList.add('loaded-hiding');
  }, 1500);
  window.setTimeout(function () {
    preloader.classList.add('loaded');
    preloader.classList.remove('loaded-hiding');
  }, 2600);
}


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
    slidesPerView: 'auto',
    spaceBetween: 10,
    centeredSlides: true,
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 0,
        centeredSlides: false,
      },
    },
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


// Выпадающее меню выбор города
const cityMobile = document.querySelector('.cities-menu-wrapper .city-mobile');
const cityMobileDropdown = document.querySelector('.cities-menu-wrapper .city-mobile-dropdown');

cityMobile.onclick = () => {
  cityMobileDropdown.classList.toggle('active');
}


// Окна
const modalWindow = document.querySelectorAll('.modal-window');
const callbackBtns = document.querySelectorAll('.js-callback-btn');
const callbackModal = document.querySelector('#callback-modal');
const modalCloseBtn = document.querySelector('.modal-window .modal-close');

function modalWindowOpen(win) {
  // Закрытие мобильного меню
  // closeMobileMenu();
  // Открытие окна
  body.classList.add('overflow-hidden');
  win.classList.add('active');
  setTimeout(() => {
    win.childNodes[1].classList.add('active');
  }, 200);
}

function modalWindowClose(win) {
  body.classList.remove('overflow-hidden');
  win.childNodes[1].classList.remove('active');
  setTimeout(() => {
    win.classList.remove('active');
  }, 300);
}

callbackBtns.forEach((item) => {
  item.onclick = () => {
    modalWindowOpen(callbackModal);
  }
});

modalCloseBtn.onclick = () => {
  modalWindowClose(callbackModal);
}

// Закрытие окна если клик за его пределами
for (let i = 0; i < modalWindow.length; i++) {
  modalWindow[i].onclick = function(event) {
    let classList = event.target.classList;
    for (let j = 0; j < classList.length; j++) {
      if (classList[j] == "modal-wrapper" || classList[j] == "modal-window" || classList[j] == "ticket-wrapper") {
        modalWindowClose(modalWindow[i])
      }
    }
  }
}


// Анимация
const animItems = document.querySelectorAll('._anim-items');

if (animItems.length > 0) {
  window.addEventListener('scroll', animOnScroll);
  function animOnScroll(param) {

    for (let index = 0; index < animItems.length; index++) {
      const animItem = animItems[index];
      const animItemHeight = animItem.offsetHeight;
      const animItemOffset = offset(animItem).top;
      const animStart = 4;

      let animItemPoint = window.innerHeight - animItemHeight / animStart;

      if (animItemHeight > window.innerHeight) {
        animItemPoint = window.innerHeight - window.innerHeight / animStart;
      }

      if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
        animItem.classList.add('_active');
      } else {
        if (!animItem.classList.contains('_anim-no-hide')) {
          animItem.classList.remove('_active');
        }
      }
    }
  }

  function offset(el) {
    const rect = el.getBoundingClientRect(),
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return { top: rect.top + scrollTop, left: rect.left + scrollLeft}
  }

  setTimeout(() => {
    animOnScroll();
  }, 300);
}

