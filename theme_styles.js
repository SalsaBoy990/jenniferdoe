/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

let colors = {
    ...defaultTheme.colors,
    black: "#000",
    white: "#fff",
    white70pc: "rgba(255,255,255,0.7)",
    white50pc: "rgba(255,255,255,0.5)",
    white30pc: "rgba(255,255,255,0.3)",
    "accent-turquise": "#48D1C1",
    "main-blue": "#242E42",
    "main-blue-lighter": "#3B4963",
    "main-blue-gray": "#242E42",
    "light-blue": "#EBF2FF",
};

module.exports = {
    theme: {
        extend: {
            colors,
            fontFamily: {
                sans: ["Commissioner", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
