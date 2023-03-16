const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                blob: {
                    "0%": {
                        transform: "scale(1) ",
                    },
                    "33%": {
                        transform:
                            " translateY(100px ) translateX(-50px )  scale(1.1)",
                    },
                    "66%": {
                        transform:
                            "  translateY(200px ) translateX(-70px ) scale(0.9)   ",
                    },
                    "100%": {
                        transform: "scale(1) ",
                    },
                },

                backgroundslide: {
                    "0%": {
                        backgroundPosition: "0% 50%",
                    },
                    "50%": {
                        backgroundPosition: "100% 50%",
                    },
                    "100%": {
                        backgroundPosition: "0% 50%",
                    },
                },
            },
            animation: {
                blob: "blob 7s infinite ",
                backgroundslide: "backgroundslide 20s ease infinite",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
