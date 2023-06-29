import { gsap } from "gsap";

class Loader {
  constructor() {
    this.loader = document.querySelector("[data-loader]");
    this.images = document.querySelectorAll("img");
  }

  async loadContent(cb) {
    try {
      await Promise.all(
        Array.from(this.images)
          .filter((img) => !img.complete)
          .map(
            (img) =>
              new Promise((resolve) => {
                img.onload = img.onerror = resolve;
              })
          )
      );

      this.removeLoader();
      cb();
    } catch (error) {
      console.log(error);
      this.removeLoader();
      cb();
    }
  }

  removeLoader() {
    gsap.to(this.loader, {
      clipPath: "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)",
      delay: 0.5,
      duration: 1.2,
      ease: "expo.inOut",
    });
  }
}

export default Loader;
