# Typecho Tailwind Starter

> This is a starter to create typecho theme with tailwind css.

## How to use?

1. `cd usr/themes` in your typecho root directory.
2. `git clone https://github.com/kecrily/typecho-tailwind-starter <your-theme-name>`
3. `cd` into your theme directory
4. Run `npm i`
5. Change `proxy` item of `browserSync` in `webpack.mix.js` to your local typecho develop address, like `127.0.0.1`
6. Run `npm run watch` and start coding

You just need to do it like you would normally develop a typecho theme. Such as change theme name, activate theme and others.

## Special Thanks

1. [Typecho](https://github.com/typecho/typecho) - A simple and powerful blogging platform
2. [Tailwind CSS](https://github.com/tailwindlabs/tailwindcss) - A utility-first CSS framework
3. [Laravel Mix](https://github.com/JeffreyWay/laravel-mix) - Building a bridge between PHP and Webpack
4. [Laravel Mix Tailwind](https://github.com/JeffreyWay/laravel-mix-tailwind) - Building a bridge between PHP and Tailwind CSS
