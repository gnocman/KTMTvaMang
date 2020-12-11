const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.disableNotifications();

mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("postcss-import"),
        require("tailwindcss")
    ])
    .webpackConfig(require("./webpack.config"));

mix.sass("resources/scss/site-styles.scss", "public/css/site-styles.css");

/* Copy library from node_modules to public folder */
mix.copy(
    "./node_modules/normalize.css/normalize.css",
    "public/libs/css/normalize.css"
);
mix.copy(
    "./node_modules/bootstrap/dist/css/bootstrap.min.css",
    "public/libs/css/bootstrap.min.css"
);

mix.copy(
    "./node_modules/jquery/dist/jquery.min.js",
    "public/libs/js/jquery.min.js"
);

mix.copy(
    "./node_modules/jquery/dist/jquery.slim.min.js",
    "public/libs/js/jquery.slim.min.js"
);

mix.copy(
    "./node_modules/@popperjs/core/dist/umd/popper.min.js",
    "public/libs/js/popper.min.js"
);

mix.copy(
    "./node_modules/bootstrap/dist/js/bootstrap.min.js",
    "public/libs/js/bootstrap.min.js"
);
// mix.styles(["resources/css/site-styles.css"], "public/css/styles.css");
