<!doctype html>
<html lang="en" class="bg-white scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>

<body>
    <div>
        <header class="fixed inset-x-0 top-0 z-50" x-data="{ isOpen: false }">
            <nav class="flex items-center justify-between bg-opacity-20 backdrop-blur-md p-3 lg:px-16"
                aria-label="Global">
                <div class="flex lg:flex-1 lg:pl-16">
                    <a href="#home" class="-m-1.5">
                        <span class="sr-only">Cardion - Universitas Islam Negeri Maulana Malik Ibrahim Malang</span>
                        <img class="h-16 w-auto" src="../img/logo-text.png" alt="Cardion">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" @click="isOpen = !isOpen"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12 lg:pr-16">
                    <a href="#about"
                        class="text-xl font-andalus leading-6 text-gray-900 hover:text-red-500 transition ease-in-out">ABOUT</a>
                    <a href="#event"
                        class="text-xl font-andalus leading-6 text-gray-900 hover:text-red-500 transition ease-in-out">EVENT</a>
                    <a href="#gallery"
                        class="text-xl font-andalus leading-6 text-gray-900 hover:text-red-500 transition ease-in-out">GALLERY</a>
                    <a href="#contact"
                        class="text-xl font-andalus leading-6 text-gray-900 hover:text-red-500 transition ease-in-out">CONTACT</a>
                </div>
            </nav>
            <div x-show="isOpen" class="lg:hidden" role="dialog" aria-modal="true">
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto backdrop-blur-md bg-opacity-50 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5">
                            <span class="sr-only">Cardion - Universitas Islam Negeri Maulana Malik Ibrahim Malang</span>
                            <img class="h-12 w-auto" src="../img/logo.png" alt="Cardion">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="isOpen = !isOpen">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#about"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-andalus leading-7 text-gray-900 hover:bg-red-500 hover:text-white transition ease-in-out">ABOUT</a>
                                <a href="#event"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-andalus leading-7 text-gray-900 hover:bg-red-500 hover:text-white transition ease-in-out">EVENT</a>
                                <a href="#gallery"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-andalus leading-7 text-gray-900 hover:bg-red-500 hover:text-white transition ease-in-out">GALLERY</a>
                                <a href="#contact"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-andalus leading-7 text-gray-900 hover:bg-red-500 hover:text-white transition ease-in-out">CONTACT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="home"
            class="grid min-h-screen grid-cols-1 lg:grid-cols-2 px-6 pt-14 lg:px-8 bg-home bg-right bg-cover">
            <div></div>
            <div class="max-w-2xl col-span-1 py-32 mx-auto lg:py-48">
                <div class="text-center mx-auto w-3/4 ">
                    <h1 class="text-[4.2rem] font-asian-ninja leading-tight text-gray-900 sm:text-[4.8rem]">
                        Dare to go beyond the limit?
                    </h1>
                    <div class="mt-10">
                        <a href="#event"
                            class="rounded-xl font-andalus bg-[#D9D9D9] px-12 py-4 text-xl shadow-sm hover:bg-red-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 focus-visible:text-white transition ease-in-out">
                            REGISTER NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="about" class="relative min-h-screen px-6 pt-14 lg:px-8 bg-about bg-center bg-cover">
            <div class="w-1/5 absolute bottom-3 left-4 xl:left-24">
                <img src="img/prof-dion.png" alt="Prof Dion">
            </div>
            <div class="max-w-2xl py-20 mx-auto lg:py-32">
                <div class=" text-center">
                    <h1 class="text-[3rem] font-asian-ninja leading-tight text-gray-900 sm:text-[4.2rem]">
                        What is Cardion?
                    </h1>
                    <p
                        class="text-[1.1rem] leading-8 font-abhaya mt-10 text-gray-900 sm:mt-16 sm:leading-9 sm:text-[1.25rem]">
                        Cardion (Science and Primary Medical Competition) is the science and primary medical Olympiad
                        and Public poster held by Student Association of Medical Education UIN Maulana Malik Ibrahim
                        Malang. Cardion has been held since 2018.
                    </p>
                </div>
            </div>
            <div class="w-1/5 absolute bottom-3 right-4 xl:right-24">
                <img src="img/sus-vena.png" alt="Sus Vena">
            </div>
        </div>

        <div id="event" class="min-h-screen px-6 pt-14 lg:px-8 bg-event bg-top bg-cover">
            <div class="max-w-6xl py-10 mx-auto lg:py-16">
                <div class=" text-center">
                    <h1 class="text-[3rem] font-asian-ninja leading-tight text-gray-900 sm:text-[4.2rem]">
                        Our Event
                    </h1>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-5">
                        <a href="/olympiade"
                            class="flex items-center justify-center shadow-xl md:items-baseline md:justify-start bg-event-1 bg-cover bg-bottom hover:bg-red-500 hover:bg-none rounded-3xl h-52 md:h-[24rem] lg:h-[30rem] transform transition duration-500 ease-in-out hover:scale-105"
                            id="buttonEventOlympiad">
                            <p class="font-osaka md:w-36 text-3xl md:text-2xl mt-4 ml-4 md:mt-12 md:ml-10 lg:text-3xl lg:mt-20 xl:ml-16"
                                id="eventTitleOlympiad">
                                Science & primary medical olympiad
                            </p>
                            <div class="p-5 text-left text-white hidden" id="eventDescOlympiad">
                                <h3 class="text-2xl font-osaka">
                                    Science & Primary Medical Olimpiad
                                </h3>
                                <p class="lg:text-lg text-sm font-abhaya mt-5">
                                    About Science & Primary Medical Olympiad, The Cardion Olympiad 2025 theme is Sensory
                                    System. Cardion Olympiad consist of three rounds, there are preliminary, semifinal,
                                    and final. The preliminary round will be held in 6 cities in Indonesia by offline
                                    and centered by online. The semifinal and final round will be held in Malang.
                                </p>
                            </div>
                        </a>
                        <a href="/public-poster"
                            class="flex items-center justify-center shadow-xl md:items-baseline md:justify-start bg-event-2 bg-cover bg-top hover:bg-red-500 hover:bg-none rounded-3xl h-52 md:h-[24rem] lg:h-[30rem] transform transition duration-500 ease-in-out hover:scale-105"
                            id="buttonEventPoster">
                            <p class="font-osaka md:w-32 text-3xl md:text-2xl mt-4 ml-4 md:mx-auto md:mt-32 lg:mt-40 lg:text-3xl"
                                id="eventTitlePoster">
                                Public Poster
                            </p>
                            <div class="p-5 text-left text-white hidden" id="eventDescPoster">
                                <h3 class="text-2xl font-osaka">
                                    Public Poster
                                </h3>
                                <p class="lg:text-lg text-sm font-abhaya mt-5">
                                    About New Branch of Competition in Cardion 2023, The Cardion Public Poster 2025
                                    theme is Sensory System. Cardion Public Poster consist of two rounds, there are
                                    preliminary and final. The preliminary round will be held on Official Account
                                    Instagram @cardion.2025 by online voting. The final round will be held by offline in
                                    Malang.
                                </p>
                            </div>
                        </a>
                        <a href="#contact"
                            class="flex items-center justify-center shadow-xl md:items-baseline md:justify-start bg-event-3 bg-cover bg-top hover:bg-red-500 hover:bg-none   rounded-3xl h-52 md:h-[24rem] lg:h-[30rem] transform transition duration-500 ease-in-out hover:scale-105"
                            id="buttonEvent3">
                            <p class="font-osaka md:w-28 text-3xl md:text-2xl mt-4 ml-4 md:mx-auto md:mt-48 lg:mt-60 lg:text-3xl"
                                id="eventTitle3">
                                More Info
                            </p>
                            <div class="p-5 text-left text-white hidden" id="eventDesc3">
                                <h3 class="text-2xl font-osaka">
                                    Contact and Location
                                </h3>
                                <p class="lg:text-lg text-sm font-abhaya mt-5">
                                    Contact our Admin to get detailed information about the schedule and the procedure
                                    of the Olympiad. Keep up to date with Cardion’s event developments and locations on
                                    our social media accounts.
                                </p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div id="gallery" class="min-h-screen px-6 pt-14 lg:px-8 bg-moments bg-bottom bg-cover">
            <div class="max-w-7xl py-10 mx-auto lg:py-16">
                <div class=" text-center">
                    <h1 class="text-[3rem] font-asian-ninja leading-tight text-gray-900 sm:text-[4.2rem]">
                        Wonderfull Moments
                    </h1>

                    <div x-data="{ slide: 0, timer: null }"
                        x-init="timer = setInterval(() => slide = (slide + 1) % 3, 3000)"
                        class="relative mt-5 h-96 lg:h-[28rem] w-full max-w-screen-lg mx-auto overflow-hidden">
                        <template x-for="i in 5" :key="i">
                            <div class="absolute top-0 left-0 w-full h-full bg-center bg-cover rounded-3xl"
                                :class="{ 'opacity-0 pointer-events-none': slide !== (i - 1) }"
                                :style="`background-image: url('/img/gallery-${i}.webp'); transition: opacity 1s;`">
                            </div>
                        </template>
                        <div class="absolute bottom-0 left-0 right-0 flex justify-between p-4">
                            <button
                                @click="clearInterval(timer); slide = (slide - 1 + 3) % 5; timer = setInterval(() => slide = (slide + 1) % 3, 3000)"
                                class="w-10 h-10 bg-white bg-opacity-50 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            <button
                                @click="clearInterval(timer); slide = (slide + 1) % 5; timer = setInterval(() => slide = (slide + 1) % 3, 3000)"
                                class="w-10 h-10 bg-white bg-opacity-50 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="min-h-full px-6 lg:px-8 bg-support bg-bottom bg-cover">
            <div class="max-w-6xl py-10 mx-auto lg:py-20">
                <div class=" text-center">
                    <h1 class="text-[3rem] font-asian-ninja leading-tight text-gray-900 sm:text-[4.2rem]">
                        Supported By
                    </h1>
                    <div class="flex justify-center gap-8 mt-16">
                        <img src="img/logo.png" alt="" class="h-32">
                        <img src="img/logo.png" alt="" class="h-32">
                        <img src="img/logo.png" alt="" class="h-32">
                    </div>
                </div>
            </div>
        </div>

        <div id="contact" class="min-h-screen px-6 lg:px-8 bg-contact bg-top lg:bg-right-top bg-cover">
            <div class="max-w-6xl py-10 mx-auto lg:py-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
                    <div class="order-2 md:order-1">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3951.7440030850285!2d112.547667!3d-7.921786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78815e17df316d%3A0xbd3a2df8b4512d3c!2sFakultas%20Kedokteran%20dan%20Ilmu%20Kesehatan%20%22FKIK%22%20-%20UIN%20Malang!5e0!3m2!1sid!2sus!4v1715771631309!5m2!1sid!2sus"
                            class="w-full h-96 md:h-[34rem] rounded-3xl" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="order-1 text-center text-gray-900 md:text-left md:order-2">
                        <h1 class="text-[3rem] text-gray-900 font-asian-ninja sm:text-[4rem]">
                            Get in Touch
                        </h1>
                        <div class="flex flex-col items-center md:items-start ">
                            <p class="text-2xl font-osaka font-bold mb-2">
                                Lokasi
                            </p>
                            <p class="text-xl font-osaka">
                                Jl. Locari, Krajan, Tlekung, Kec. Junrejo, Kota Batu, Jawa Timur 6515
                            </p>
                            <a href="https://maps.app.goo.gl/1cu3BuASRms5WsFJ8" target="_blank"
                                rel="noopener noreferrer"
                                class="block mt-5 w-40 text-center rounded-xl font-andalus bg-[#D9D9D9] py-2 text-lg shadow-sm hover:bg-red-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 focus-visible:text-white transition ease-in-out">
                                View Location
                            </a>
                        </div>
                        <div class="mt-12">
                            <p class="text-2xl font-osaka font-bold mb-2">
                                Telepon/WhatsApp
                            </p>
                            <p class="text-xl font-osaka">
                                Fikriy - +62 812 3101 4966
                            </p>
                            <p class="text-xl font-osaka">
                                Khansa - +62 851 5682 0134
                            </p>
                        </div>
                        <div class="mt-12">
                            <p class="text-2xl font-osaka font-bold mb-2">
                                ID Line
                            </p>
                            <p class="text-xl font-osaka">
                                Fikriy - 812 3101 4966
                            </p>
                            <p class="text-xl font-osaka">
                                Khansa - knsa11
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="min-h-screen px-6 pt-14 lg:px-8 bg-ready bg-bottom bg-cover">
            <div class="max-w-5xl py-32 mx-auto lg:py-48">
                <div class="text-center mx-auto w-3/4">
                    <h1 class="text-[4.2rem] font-asian-ninja leading-tight text-gray-900 sm:text-[4.8rem]">
                        Dare to go beyond the limit?
                    </h1>
                    <div class="mt-10">
                        <a href="#event"
                            class="rounded-xl font-andalus bg-[#D9D9D9] px-12 py-4 text-xl shadow-sm hover:bg-red-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 focus-visible:text-white transition ease-in-out">
                            REGISTER NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="min-h-screen px-6 pt-14 lg:px-8 bg-footer bg-bottom bg-cover">
            <div class="max-w-5xl py-32 mx-auto lg:py-60">
                <div class="text-center mx-auto">
                    <p class="text-xl lg:text-2xl font-abhaya leading-tight">
                        Presented by:
                    </p>
                    <p class="text-xl lg:text-2xl font-abhaya leading-tight">
                        Himpunan Mahasiswa Program Studi Pendidikan Dokter
                    </p>
                    <p class="text-xl lg:text-2xl font-abhaya leading-tight">
                        Faculty of Medicine and Health Sciences, Maulana Malik Ibrahim State Islamic University
                    </p>
                    <div class="mt-24 flex justify-center gap-24">
                        <a href="https://www.instagram.com/cardion.2025/" target="_blank">
                            <img src="img/instagram.png" alt="Instagram" class="w-10">
                        </a>
                        <a href="https://www.tiktok.com/@cardionfkuinmaliki" target="_blank">
                            <img src="img/tiktok.png" alt="Tiktok" class="w-10">
                        </a>
                        <a href="https://youtube.com/@cardionfkuinmalang?feature=shared" target="_blank">
                            <img src="img/youtube.png" alt="Youtube" class="w-10">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document
            .getElementById("buttonEventOlympiad")
            .addEventListener("mouseover", function () {
                document.getElementById("eventTitleOlympiad").style.display = "none";
                document.getElementById("eventDescOlympiad").style.display = "block";
            });

        document
            .getElementById("buttonEventOlympiad")
            .addEventListener("mouseout", function () {
                document.getElementById("eventTitleOlympiad").style.display = "block";
                document.getElementById("eventDescOlympiad").style.display = "none";
            });

        document
            .getElementById("buttonEventPoster")
            .addEventListener("mouseover", function () {
                document.getElementById("eventTitlePoster").style.display = "none";
                document.getElementById("eventDescPoster").style.display = "block";
            });

        document
            .getElementById("buttonEventPoster")
            .addEventListener("mouseout", function () {
                document.getElementById("eventTitlePoster").style.display = "block";
                document.getElementById("eventDescPoster").style.display = "none";
            });

        document
            .getElementById("buttonEvent3")
            .addEventListener("mouseover", function () {
                document.getElementById("eventTitle3").style.display = "none";
                document.getElementById("eventDesc3").style.display = "block";
            });

        document
            .getElementById("buttonEvent3")
            .addEventListener("mouseout", function () {
                document.getElementById("eventTitle3").style.display = "block";
                document.getElementById("eventDesc3").style.display = "none";
            });
    </script>
</body>

</html>