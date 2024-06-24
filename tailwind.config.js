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
                home: "url('../../public/img/bg-home.png')",
                about: "url('../../public/img/bg-about.png')",
                event: "url('../../public/img/bg-event.png')",
                "event-1": "url('../../public/img/event-1.png')",
                "event-2": "url('../../public/img/event-2.png')",
                "event-3": "url('../../public/img/event-3.png')",
                moments: "url('../../public/img/bg-moments.png')",
                support: "url('../../public/img/bg-support.png')",
                contact: "url('../../public/img/bg-contact.png')",
                ready: "url('../../public/img/bg-ready.png')",
                footer: "url('../../public/img/bg-footer.png')",
                "page-1": "url('../../public/img/page-1.png')",
                "page-2": "url('../../public/img/page-2.png')",
                "page-3": "url('../../public/img/page-3.png')",
                "page-4": "url('../../public/img/page-4.png')",
                "page-5": "url('../../public/img/page-5.png')",
                "page-6": "url('../../public/img/page-6.png')",
                "page-7": "url('../../public/img/page-7.png')",
                "page-8": "url('../../public/img/page-8.png')",
                "page-9": "url('../../public/img/page-9.png')",
                "page-10": "url('../../public/img/page-10.png')",
                "page-11": "url('../../public/img/page-11.png')",
                "about-poster": "url('../../public/img/about-poster.png')",
                "about-olimpiade":
                    "url('../../public/img/about-olimpiade.png')",
                "illustration-about":
                    "url('../../public/img/illustration-about.png')",
                "timeline-1": "url('../../public/img/timeline-1.png')",
                "timeline-2": "url('../../public/img/timeline-2.png')",
                "timeline-3": "url('../../public/img/timeline-3.png')",
                "timeline-1-poster":
                    "url('../../public/img/timeline-1-poster.png')",
                "timeline-2-poster":
                    "url('../../public/img/timeline-2-poster.png')",
                "timeline-3-poster":
                    "url('../../public/img/timeline-3-poster.png')",
                "timeline-1-olimpiade":
                    "url('../../public/img/timeline-1-olimpiade.png')",
                "timeline-2-olimpiade":
                    "url('../../public/img/timeline-2-olimpiade.png')",
                "timeline-3-olimpiade":
                    "url('../../public/img/timeline-3-olimpiade.png')",
                "prize-1": "url('../../public/img/prize-1.png')",
                "prize-2": "url('../../public/img/prize-2.png')",
                "prize-3": "url('../../public/img/prize-3.png')",
                "prize-4": "url('../../public/img/prize-4.png')",
                "prize-1-poster": "url('../../public/img/prize-1-poster.png')",
                "prize-2-poster": "url('../../public/img/prize-2-poster.png')",
                "prize-3-poster": "url('../../public/img/prize-3-poster.png')",
                "prize-4-poster": "url('../../public/img/prize-4-poster.png')",
                "prize-1-olimpiade":
                    "url('../../public/img/prize-1-olimpiade.png')",
                "prize-2-olimpiade":
                    "url('../../public/img/prize-2-olimpiade.png')",
                "prize-3-olimpiade":
                    "url('../../public/img/prize-3-olimpiade.png')",
                "prize-4-olimpiade":
                    "url('../../public/img/prize-4-olimpiade.png')",
                "prize-5-olimpiade":
                    "url('../../public/img/prize-5-olimpiade.png')",
            },
            fontFamily: {
                andalus: ["Andalus", "sans-serif"],
                "asian-ninja": ["aAsianNinja", "sans-serif"],
                osaka: ["Osaka", "sans-serif"],
                abhaya: ["Abhaya", "sans-serif"],
                harukaze: ["Harukaze", "sans-serif"],
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
