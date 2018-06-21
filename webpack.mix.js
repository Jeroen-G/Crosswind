let mix = require('laravel-mix')

require('laravel-mix-purgecss')

mix/* .js('resources/assets/js/app.js', 'resources/public/js') */
    .postCss('resources/assets/css/crosswind.css', 'resources/public/css')
    .options({
        postCss: [
            require('postcss-import')(),
            require('tailwindcss')('./resources/assets/tailwind.js'),
            require('postcss-nesting')(),
        ]
    })
    .purgeCss()