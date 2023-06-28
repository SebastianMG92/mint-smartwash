/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");
const glob = require("fast-glob");

module.exports = {
  content: glob.sync([
    "./**.php",
    "./**/**.php",
    "./src/js/**.js",
    "./src/js/**/**.js",
  ]),
  theme: {
    colors: {
      ...colors,
      root: {
        green: "var(--green)",
        blue: "var(--blue)",
        white: "var(--white)",
        grey: "var(--grey)",
        ["grey-secondary"]: "var(--grey-secondary)",
      },
    },
    extend: {
      fontFamily: {
        base: ["Work Sans", "system-ui", "sans-serif"],
      },
    },
  },
  plugins: [],
};
