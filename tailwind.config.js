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
                color1: "#E1ECC8",
                color2: "#AFC8AD",
                color3: "#88AB8E",
                color4: "#4F6F52",
                color5: "#1C6758",
                color6: "#83B582",
                color7: "#4F6F52",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
