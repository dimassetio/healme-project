/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "blue-health": "#121481",
                "footer-white": "#D9D9D9",
                "button-blue": "#121481",
            },
            fontFamily: {
                "poppins-regular": ["Poppins", "sans-serif"],
                "poppins-semibold": ["Poppins:wght@400", "sans-serif"],
                "manrope-regular": ["Manrope", "sans-serif"],
                "roboto-regular": ["Roboto", "sans-serif"],
            },
            backgroundImage: {
                "community-bg": "url('/assets/img/komunitas/bg-community.png')",
                "community-bg2": "url('/assets/img/komunitas/komunitas2.png')",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
