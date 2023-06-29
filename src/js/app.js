// Set The Shopify Path To Dynamic Imports
if (process.env.NODE_ENV !== "development") {
  __webpack_public_path__ = window.__webpack_public_path__;
}

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import AOS from "aos";
import "aos/dist/aos.css";

import Header from "./lib/Header";
import Locations from "./lib/Locations";
import Loader from "./lib/Loader";

gsap.registerPlugin(ScrollTrigger);

class App {
  constructor() {
    // Add App to window object to use in external cases
    window.$APP = this;

    // Sections
    this.loader = new Loader();

    // Init loading
    this.loader.loadContent(this.init);
  }

  init() {
    AOS.init({
      once: true,
    });

    new Header();
    new Locations();
  }
}

new App();
