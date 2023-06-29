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
  blocklist: ["container"],
  theme: {
    colors: {
      ...colors,
      root: {
        green: "var(--green)",
        ["green-secondary"]: "var(--green-secondary)",
        ["green-tertiary"]: "var(--green-tertiary)",
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
