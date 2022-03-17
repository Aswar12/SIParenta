const { height } = require("tailwindcss/defaultTheme");
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./pages/**/*.{html,js}",
        "./components/**/*.{html,js}",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["inter", ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                128: "32rem",
            },
            width: {
                128: "32rem",
            },
            height: {
                128: "32rem",
                isidb: "26rem",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
