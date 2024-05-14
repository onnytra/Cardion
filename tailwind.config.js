/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                login: "url('../../public/img/bg-login.png')",
                register: "url('../../public/img/bg-register.png')",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
