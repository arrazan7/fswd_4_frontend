/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            keyframes: {
                zoom: {
                    "0%": { transform: "scale(0.1)" },
                    "100%": { transform: "scale(1)" },
                },
            },
            animation: {
                zoom: "zoom 0.6s",
            },
        },
    },
    plugins: [],
};
