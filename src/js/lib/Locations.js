// import Swiper JS
import Swiper, { Navigation, Autoplay } from "swiper";

// import Swiper styles
import "swiper/css";

class Slider {
  constructor() {
    this.sliders = document.querySelectorAll("[data-slider]");

    if (!!this.sliders.length) {
      this.sliders.forEach((slider) => this.run(slider));
    }
  }

  run(slider) {
    const config = {
      slidesPerView: 1.3,
      spaceBetween: 20,
      centeredSlides: true,
      loop: true,

      breakpoints: {
        768: {
          centeredSlides: false,
          initialSlide: 1,
          slidesPerView: 3,
        },

        1024: {
          centeredSlides: false,
          initialSlide: 2,
          slidesPerView: 4,
          spaceBetween: 36,
        },
      },
    };

    const elements = slider.querySelectorAll(".locations--location");

    new Swiper(slider, config);
  }
}

export default Slider;
