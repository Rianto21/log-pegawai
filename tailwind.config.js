/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                roboto: ["Roboto", "sans-serif"],
                righteous: ["Righteous", "sans-serif"],
                "black-ops-one": ["Black Ops One", "sans-serif"],
                "kaushan-script": ["Kaushan Script", "sans-serif"],
                "noto-serif-makasar": [
                    "Noto Serif Makasar",
                    ...defaultTheme.fontFamily.sans,
                ],
                "roboto-mono": ["Roboto Mono", "sans-serif"],
            },
        },
    },
    plugins: [],
};
