import Swiper, {
    Navigation,
    Scrollbar,
    Mousewheel,
    Pagination,
    EffectFade,
    Autoplay,
    Virtual,
    FreeMode 
  } from 'swiper';
  
import 'swiper/swiper.min.css';
// import 'swiper/components/scrollbar/scrollbar.min.css';

function reviewsSlider () {
    const slider = new Swiper('.reviews__slider', {
        modules: [Scrollbar, Mousewheel, FreeMode, Navigation ],
        slidesPerView: 2.1,
        speed: 700,
        spaceBetween: 0,
        watchOverflow: true,
        mousewheelControl: true,
        freeMode: {
          enabled: true
        },
        mousewheel: {
          forceToAxis: true,
        },
        scrollbar: {
          el: '.reviews__scroll',
        },
        navigation: {
          nextEl: '.reviews__nav_btn--next',
          prevEl: '.reviews__nav_btn--prev',
        },
        breakpoints: {
          300: {
            slidesPerView: 1.05,
          },
          768: {
            slidesPerView: 1.5,
          },
          1220: {
            slidesPerView: 1.8,
          },
          1900: {
            slidesPerView: 2.1,
          },
        },
    });
}

export default reviewsSlider;