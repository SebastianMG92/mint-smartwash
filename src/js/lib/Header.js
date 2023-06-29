import { gsap } from "gsap";

class Header {
  constructor() {
    this.state = {
      onProgress: false,
    };

    // Header
    this.siteHeader = document.getElementById("header");
    this.actionBar = document.querySelector(".header--action-bar");
    this.mainBar = document.querySelector(".header--main");

    // Navigation
    this.navigation = document.querySelector(".header--navigation");
    this.navigationElements = this.navigation.querySelectorAll(".menu-item");

    // NAvigation controls
    this.hamburger = document.querySelector(".header--hamburger");
    this.close = document.querySelector(".header--close-button");

    this.tl = gsap.timeline({ default: { ease: "expo.out" } });

    // Listener
    this.hamburger.addEventListener(
      "click",
      this.openNavigationHandler.bind(this)
    );

    this.close.addEventListener(
      "click",
      this.closeNavigationHandler.bind(this)
    );

    if (!!this.navigationElements.length) {
      for (const link of this.navigationElements) {
        link.addEventListener("click", this.closeNavigationHandler.bind(this));
      }
    }

    // Add Event Listener to Window to Check if Navigation Has Scrolled
    window.addEventListener("scroll", this.scrollHandler.bind(this));
  }

  openNavigationHandler() {
    if (!!this.state.onProgress) return null;
    this.state.onProgress = true;

    this.tl
      .to(this.navigation, {
        opacity: 1,
        pointerEvents: "initial",
        duration: 0.3,
      })
      .to(
        this.navigationElements,
        {
          opacity: 1,
          y: 0,
          duration: 0.3,
          stagger: 0.1,
          onComplete: () => (this.state.onProgress = false),
        },
        "-=.15"
      );
  }

  closeNavigationHandler() {
    if (!!this.state.onProgress) return null;
    this.state.onProgress = true;

    this.tl
      .to(this.navigation, {
        opacity: 0,
        pointerEvents: "none",
        duration: 0.3,
      })
      .to(
        this.navigationElements,
        {
          opacity: 0,
          y: 10,
          duration: 0.3,
          stagger: 0.1,
          onComplete: () => (this.state.onProgress = false),
        },
        "<"
      );
  }

  // Add Event Listener to Window to Check if Navigation Has Scrolled
  scrollHandler() {
    const currentScroll = document.scrollingElement
      ? document.scrollingElement.scrollTop
      : document.documentElement.scrollTop;
    const isSticky = currentScroll > this.actionBar.offsetHeight || 0;

    if (!!isSticky) {
      this.mainBar.classList.add("header--main__sticky");
    } else {
      this.mainBar.classList.remove("header--main__sticky");
    }
  }
}

export default Header;
