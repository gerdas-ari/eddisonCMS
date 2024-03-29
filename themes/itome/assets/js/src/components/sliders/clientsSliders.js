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

function clientsSliders () {
    const sliderTop = new Swiper('.clients__slider--top', {
        modules: [Scrollbar, Mousewheel, FreeMode, Autoplay ],
        slidesPerView: 'auto',
        speed: 3000,
        spaceBetween: 0,
        loop: true,
        freeMode: {
          enabled: true
        },
        autoplay: {
          delay: 0,
          disableOnInteraction: false,
        },
    });
    const sliderBottom = new Swiper('.clients__slider--bottom', {
        modules: [Scrollbar, Mousewheel, FreeMode, Autoplay ],
        slidesPerView: 'auto',
        speed: 3000,
        spaceBetween: 0,
        loop: true,
        freeMode: {
          enabled: true
        },
        autoplay: {
          delay: 0,
          reverseDirection: true,
          disableOnInteraction: false,
        },
    });
}

export default clientsSliders;