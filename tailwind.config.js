const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class", // or 'media' or 'class'

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "brand-black": "#000E38",
                "brand-gray": "#6a6f7a",
            },
            keyframes: {
                "card-rotate": {
                    "0%": {
                        transform: "rotateX(0deg) rotateY(0deg)",
                    },
                    "100%": {
                        transform:
                            "rotateX(var(--rotate-x, 0deg)) rotateY(var(--rotate-y, 0deg))",
                    },
                },

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
                "fade-in": {
                    "0%": {
                        opacity: "0",
                    },
                    "100%": {
                        opacity: "1",
                    },
                },
                "fade-out": {
                    "0%": {
                        opacity: "1",
                    },
                    "100%": {
                        opacity: "0",
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
                "fade-in": "fade-in 1s ease-in-out",
                "fade-out": "fade-out 1s ease-in-out",
                "handle-mouse-move":
                    "handle-mouse-move var(--mouse-move-x) var(--mouse-move-y) infinite",
            },
        },
    },

    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
    ],
};
