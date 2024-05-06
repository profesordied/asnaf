/** @type {import('tailwindcss').Config} */
export default {
    darkMode: ["selector", '[data-theme="dark"]'],
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                xs: "531px",
            },
            rotate: {
                225: "225deg",
                270: "270deg",
                360: "360deg",
                720: "720deg",
            },
            colors: {
                primary: "#ed0055",
                secondary: "#95e1dc",
                flower: "#84a0df",
                main: "#f8f9fa",
            },
            backgroundImage: {
                hero: "linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('../../public/img/backpic2.png')",
            },
            boxShadow: {
                btn: "0 9px 37px 3px var(--tw-shadow-color), 0 4px 38px -4px var(--tw-shadow-color)",
            },
        },
    },
    plugins: [],
};
