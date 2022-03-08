const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    
    content: [
        
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './pages/**/*.{html,js}',
        './components/**/*.{html,js}',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
