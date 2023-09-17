import "flowbite";
import Swiper from 'swiper';


const swiper = new Swiper('.swiper', {
    observer: true,
    observeParents: true,
    spaceBetween: 0,
    slidesPerView: 1,
    navigation: {

        nextEl: "swiper-button-next",
        prevEl: "swiper-button-prev",
    },
    speed: 100,
    loop: true,
    autoplay: {
        delay: 2500,
    }
})
