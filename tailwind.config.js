const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],  
    darkMode :'class',

    theme: {
        container :{
            center:true,
            padding:'16px',
        },
        extend: {

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                jef:['Dancing'],
            },
            screens:{
                '2xl' :'1320px',
            },
            animation: {
                'boun' :'ping 3s linear infinite',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};   
