const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const path = require("path");

// Directories
const RESOURCES_DIR = path.resolve(__dirname, "src");
const DIST_DIR = path.resolve(__dirname, "dist");

// Url's
const LOCAL_URL = "http://mint-smartwash.local/";

/* Webpack configuration */
mix
  .webpackConfig({
    plugins: [
      new CleanWebpackPlugin({
        verbose: false,
        cleanOnceBeforeBuildPatterns: [DIST_DIR],
      }),
    ],
  })
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("tailwind.config.js")],
  })
  .setPublicPath(__dirname)
  .sourceMaps();

/* Assets configuration */
mix
  .js(`${RESOURCES_DIR}/js/app.js`, DIST_DIR)
  .sass(`${RESOURCES_DIR}/scss/app.scss`, DIST_DIR)
  .copyDirectory(`${RESOURCES_DIR}/fonts`, DIST_DIR)
  .copyDirectory(`${RESOURCES_DIR}/images`, DIST_DIR);

/* Browser sync configuration */
mix.browserSync({
  proxy: LOCAL_URL,
  files: [
    `${__dirname}/**/*.php`,
    `${__dirname}/**/*.js`,
    `${__dirname}/**/*.css`,
  ],
});

/* Production mode */
if (mix.inProduction()) {
  mix.sourceMaps(false).options({
    terser: {
      terserOptions: {
        compress: {
          drop_console: true,
        },
      },
    },
  });
}
