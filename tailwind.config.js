/** @type {import('tailwindcss').Config} */
export default {
    content: [],
    theme: {
        extend: {},
    },
    plugins: [],
};

/** @type {import('tailwindcss').Config} */
module.exports = {
    theme: {
        colors: {
            blue: "#1fb6ff",
            orange: "#ff7849",
            green: "#13ce66",
            yellow: "#ffc82c",
        },
        fontFamily: {
            sans: ["sans-serif"],
        },
        extend: {
            spacing: {
                "8xl": "96rem",
            },
        },
    },
};
