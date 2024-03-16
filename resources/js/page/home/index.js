// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

const swiper = new Swiper('.swiper', {
    speed: 1000,
    slidesPerView: "auto",
    loop: true,
    centeredSlides: true,
    spaceBetween: 48,
    autoplay: {
        delay: 3000,
    },
});

const swiperPrevButton = document.getElementById('gallerySwiperPreviousButton')
const swiperNextButton = document.getElementById('gallerySwiperNextButton')
swiperPrevButton.addEventListener("click", function() {
    swiper.slidePrev()
});

swiperNextButton.addEventListener("click", function() {
    swiper.slideNext()
})

