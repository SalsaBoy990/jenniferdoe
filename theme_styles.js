/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    theme: {
        themeVariants: ["dark"],
        extend: {
            maxHeight: {
                0: "0",
                xl: "36rem",
            },
            colors: {
                ...defaultTheme.colors,
                gray: {
                    50: "#f9fafb",
                    100: "#f4f5f7",
                    200: "#e5e7eb",
                    300: "#d5d6d7",
                    400: "#9e9e9e",
                    500: "#707275",
                    600: "#4c4f52",
                    700: "#24262d",
                    800: "#1a1c23",
                    900: "#121317",
                    // default values from Tailwind UI palette
                    // '300': '#d2d6dc',
                    // '400': '#9fa6b2',
                    // '500': '#6b7280',
                    // '600': '#4b5563',
                    // '700': '#374151',
                    // '800': '#252f3f',
                    // '900': '#161e2e',
                },
                transparent: "transparent",
                black: "#000",
                white: "#fff",
                white80pc: "rgba(255,255,255,0.8)",
                white70pc: "rgba(255,255,255,0.7)",
                white50pc: "rgba(255,255,255,0.5)",
                white30pc: "rgba(255,255,255,0.3)",
                "accent-turquoise": "#48D1C1",
                "main-blue": "#242E42",
                "main-blue80pc": "rgba(36, 46, 66, 0.8)",
                "main-blue-lighter": "#3B4963",
                "main-blue-gray": "#242E42",
                "light-blue": "#EBF2FF",
            },

            fontFamily: {
                sans: ["Commissioner", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        backgroundColor: [
            "hover",
            "focus",
            "active",
            "odd",
            "dark",
            "dark:hover",
            "dark:focus",
            "dark:active",
            "dark:odd",
        ],
        display: ["responsive", "dark"],
        textColor: [
            "focus-within",
            "hover",
            "active",
            "dark",
            "dark:focus-within",
            "dark:hover",
            "dark:active",
        ],
        placeholderColor: ["focus", "dark", "dark:focus"],
        borderColor: ["focus", "hover", "dark", "dark:focus", "dark:hover"],
        divideColor: ["dark"],
        boxShadow: ["focus", "dark:focus"],
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
