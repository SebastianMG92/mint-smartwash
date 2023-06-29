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

gsap.registerPlugin(ScrollTrigger);

// Components
const COMPONENTS = [];

class App {
  constructor() {
    // Add App to window object to use in external cases
    window.$APP = this;

    // Sections
    new Header();
    new Locations();

    AOS.init();
    // Init loading
    this._init();
  }

  async _init() {
    this._runComponents();
  }

  _runComponents() {
    if (!COMPONENTS.length) return null;

    COMPONENTS.forEach((Component) => {
      // Get DOM elements
      const htmlContainers = document.querySelectorAll(
        `[data-component="${Component}"]`
      );
      if (!!htmlContainers.length)
        this._loadComponent(Component, htmlContainers);
    });
  }

  async _loadComponent(ClassComponentName, htmlContainers) {
    // Dynamic component import
    const { default: ClassComponent } = await import(
      `./lib/${ClassComponentName}`
    );

    htmlContainers.forEach((container) => {
      new ClassComponent(this, container);
    });
  }
}

new App();
