/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");
const glob = require("fast-glob");

module.exports = {
  content: glob.sync([
    "./**.php",
    "./**/**.php",
    "./assets/src/js/**.js",
    "./assets/src/js/**/**.js",
  ]),
  theme: {
    colors: {
      ...colors,
      custom: {
        black: "#000000",
        black_light: "#202124",
        grey: "#F5F5F5",
      },
    },
    extend: {
      fontFamily: {
        sans: ["Founders Grotesk", "system-ui", "sans-serif"],
      },
    },
  },
  plugins: [],
};
