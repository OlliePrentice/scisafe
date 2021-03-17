import $ from 'jquery';
import Swiper, {Navigation, Pagination, EffectFade, Autoplay} from "swiper";
import resizeEvent from "../utilities/triggerResizeEvent";
import 'swiper/swiper-bundle.css';

Swiper.use([Navigation, Pagination, EffectFade, Autoplay]);

function Sliders() {


    const initSwiper = (el, options) => {

        options.init = false;

        const carousel = new Swiper(el, options);

        carousel.on('init', () => {
            window.dispatchEvent(resizeEvent);
        });

        carousel.init();

        carousel.on('slideChangeTransitionEnd', () => {
            window.dispatchEvent(resizeEvent);
        });
    }

    $('.timeline__events').each((_index, elem) => {

        initSwiper(elem, {
            slidesPerView: 'auto',
            spaceBetween: 50,
            breakpoints: {
                768: {
                    spaceBetween: 100
                }
            }
        });

    });


    function timelineSpacer() {
        $('.timeline__events').each((_index, elem) => {
            $(elem).find('.timeline__spacer').height($(elem).find('.swiper-wrapper').height());
        });
    }


    $('.carousel__images').each((_index, elem) => {

        initSwiper(elem, {
            slidesPerView: 1,
            spaceBetween: 30,
            effect: 'fade',
            autoHeight: true,
            loop: true,
            navigation: {
                nextEl: elem.parentNode.querySelector('.swiper-button-next'),
                prevEl: elem.parentNode.querySelector('.swiper-button-prev'),
              },
        });

    });


    const updateDimensions = () => {
        if (updateDimensions._tick) {
            cancelAnimationFrame(updateDimensions._tick);
        }
    
        updateDimensions._tick = requestAnimationFrame(function () {
            updateDimensions._tick = null;

            timelineSpacer();

        });
    };
    
    window.addEventListener('resize', updateDimensions);
    updateDimensions();


};

export default Sliders;
