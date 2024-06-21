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
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5">
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
                <div class="hidden lg:flex lg:gap-x-12 lg:items-center">
                    <a href="#about"
                        class="text-xl font-andalus leading-6 text-gray-900 hover:text-red-500 transition ease-in-out">ABOUT</a>
                    <a href="#timeline"
                        class="text-xl font-andalus leading-6 text-gray-900 hover:text-red-500 transition ease-in-out">TIMELINE</a>
                    <a href="#prize"
                        class="text-xl font-andalus leading-6 text-gray-900 hover:text-red-500 transition ease-in-out">PRIZE</a>
                    <a href="/public-poster/login"
                        class="text-xl font-andalus leading-6 text-gray-900 hover:text-red-500 transition ease-in-out">LOGIN</a>
                    <a href="/public-poster/register"
                        class="text-xl font-andalus rounded-xl px-8 py-3 leading-6 text-gray-900 bg-[#D9D9D9] hover:text-white hover:bg-red-500 transition ease-in-out">REGISTER</a>
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
                                <a href="#timeline"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-andalus leading-7 text-gray-900 hover:bg-red-500 hover:text-white transition ease-in-out">TIMELINE</a>
                                <a href="#prize"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-andalus leading-7 text-gray-900 hover:bg-red-500 hover:text-white transition ease-in-out">PRIZE</a>
                                <a href="/public-poster/login"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-andalus leading-7 text-gray-900 hover:bg-red-500 hover:text-white transition ease-in-out">LOGIN</a>
                                <a href="/public-poster/register"
                                    class="-mx-3 block text-center text-xl font-andalus rounded-xl px-8 py-3 leading-6 text-gray-900 bg-[#D9D9D9] hover:text-white hover:bg-red-500 transition ease-in-out">REGISTER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="home" class="min-h-screen px-16 pt-14 bg-page-1 bg-center bg-cover">
            <div class="max-w-2xl py-48 mx-auto lg:py-64">
                <div class="text-center mx-auto">
                    <h1 class="text-4xl font-osaka text-gray-900 sm:text-6xl">
                        Public Poster
                    </h1>
                </div>
            </div>
        </div>

        <div id="about" class="bg-page-2 bg-center bg-cover xl:pr-40">
            <div class="min-h-screen px-6 pt-20 lg:px-8 sm:bg-about-olimpiade bg-illustration-about bg-cover bg-right">
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 py-36 pr-24 mx-auto lg:py-32 md:px-48 sm:hidden">
                    <div></div>
                    <div class="md:text-center pl-0 md:pl-20 lg:pl-0">
                        <h1 class="text-[3rem] font-asian-ninja leading-tight text-gray-900 sm:text-[4.2rem]">
                            About
                        </h1>
                        <p
                            class="text-[1.1rem] leading-8 font-abhaya mt-5 text-gray-900 sm:leading-9 sm:text-[1.25rem]">
                            The Cardion Public Poster 2025 theme is Sensory System. Cardion Public Poster consist of two
                            rounds, there are preliminary and final. The preliminary round will be held on Official
                            Acount Instagram @cardion.2025 by online voting. The final round will be held by offline in
                            Malang.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="timeline" class="min-h-screen px-6 pt-14 lg:px-8 bg-page-3 bg-bottom bg-cover">
            <div class="max-w-6xl py-10 mx-auto lg:py-16">
                <div class=" text-center">
                    <h1 class="text-[3rem] font-asian-ninja leading-tight text-gray-900 sm:text-[4.2rem]">
                        Timeline
                    </h1>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-5">
                        <div class="text-left">
                            <div class="bg-timeline-1-poster bg-contain bg-no-repeat p-10">
                            </div>
                            <div class="text-left pl-20">
                                <p class="font-abhaya mt-5 text-lg">
                                    15 May 2024 - 25 January 2025
                                </p>
                                <p class="font-abhaya text-lg">
                                    * Maximum 3 person in 1 team
                                </p>
                                <p class="font-abhaya text-lg">
                                    * Quota is limited to each registration period
                                </p>
                            </div>
                        </div>
                        <img src="img/footstep.png" alt="Footstep" class="w-full hidden lg:block">
                        <div class="text-left">
                            <div class="bg-timeline-2-poster bg-contain bg-no-repeat p-10">
                            </div>
                            <div class="text-left pl-20">
                                <p class="font-abhaya mt-5 text-lg">
                                    Sunday, 26 January 2025
                                </p>
                                <p class="font-abhaya text-lg">
                                    * Online voting on Official Account Instagram @cardion.2025 at 26 January - 29
                                    January 2025
                                </p>
                            </div>
                        </div>
                        <div class="hidden lg:block"></div>
                        <div class="text-left">
                            <div class="bg-timeline-3-poster bg-contain bg-no-repeat p-10">
                            </div>
                            <div class="text-left pl-20">
                                <p class="font-abhaya mt-5 text-lg">
                                    Sunday, 09 February 2025
                                </p>
                                <p class="font-abhaya text-lg">
                                    * Offline in Malang
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="min-h-screen px-6 pt-14 lg:px-8 bg-page-4 bg-bottom bg-cover">
            <div class="max-w-5xl py-10 mx-auto lg:py-16">
                <div class=" text-center">
                    <h1 class="text-[3rem] font-asian-ninja leading-tight text-gray-900 sm:text-[4.2rem]">
                        Schedule
                    </h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-5">
                        <div class="bg-[#F7EEDD] text-left p-8 rounded-tl-[60px] rounded-br-[60px]">
                            <h3 class="text-2xl font-osaka">First Period</h3>
                            <h4 class="text-lg font-abhaya mt-2">15 May 2024 - 09 August 2024</h4>
                            <div class="bg-[#FABE84] mt-2 px-5 py-2 rounded-lg text-center">
                                <p class="text-xl font-andalus">Rp75.000,-</p>
                            </div>
                            <p class="text-lg font-abhaya mt-2">
                                10 Scheduled Primary Medical Subject
                            </p>
                        </div>
                        <div class="bg-[#F7EEDD] text-left p-8 rounded-tr-[60px] rounded-bl-[60px]">
                            <h3 class="text-2xl font-osaka">Second Period</h3>
                            <h4 class="text-lg font-abhaya mt-2">10 August 2024 - 13 October 2024</h4>
                            <div class="bg-[#FABE84] mt-2 px-5 py-2 rounded-lg text-center">
                                <p class="text-xl font-andalus">Rp85.000,-</p>
                            </div>
                            <p class="text-lg font-abhaya mt-2">
                                8 Scheduled Primary Medical Subject
                            </p>
                        </div>
                        <div class="bg-[#F7EEDD] text-left p-8 rounded-bl-[60px] rounded-tr-[60px]">
                            <h3 class="text-2xl font-osaka">Third Period</h3>
                            <h4 class="text-lg font-abhaya mt-2">14 October 2024 - 14 December 2024</h4>
                            <div class="bg-[#FABE84] mt-2 px-5 py-2 rounded-lg text-center">
                                <p class="text-xl font-andalus">Rp95.000,-</p>
                            </div>
                            <p class="text-lg font-abhaya mt-2">
                                6 Scheduled Primary Medical Subject
                            </p>
                        </div>
                        <div class="bg-[#F7EEDD] text-left p-8 rounded-br-[60px] rounded-tl-[60px]">
                            <h3 class="text-2xl font-osaka">Fourth Period</h3>
                            <h4 class="text-lg font-abhaya mt-2">15 December 2024 - 20 January 2025</h4>
                            <div class="bg-[#FABE84] mt-2 px-5 py-2 rounded-lg text-center">
                                <p class="text-xl font-andalus">Rp105.000,-</p>
                            </div>
                            <p class="text-lg font-abhaya mt-2">
                                4 Scheduled Primary Medical Subject
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="prize" class="min-h-screen px-6 lg:px-8 bg-page-5 bg-center bg-cover">
            <div class="max-w-2xl py-10 mx-auto lg:py-20">
                <div class=" text-center">
                    <h1 class="text-[3rem] font-asian-ninja leading-tight text-white sm:text-[4.2rem]">
                        Prize
                    </h1>
                    <p class="text-[1.1rem] leading-8 font-abhaya mt-10 text-white sm:leading-9 sm:text-[1.25rem]">
                        By participating in this competition, you have the opportunity to win prizes worth millions
                        of rupiah, certificates and trophies.
                    </p>
                    <div class="relative mt-16 bg-prize-1-poster h-96 bg-no-repeat bg-center bg-contain">
                    </div>
                </div>
            </div>
        </div>

        <div class="min-h-screen px-6 lg:px-8 bg-page-6 bg-bottom bg-cover">
            <div class="max-w-4xl py-10 mx-auto lg:py-72">
                <div class=" text-center">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-20 md:gap-0">
                        <div class="relative bg-prize-2-poster h-96 bg-no-repeat bg-center bg-contain">
                        </div>
                        <div class="relative bg-prize-3-poster h-96 bg-no-repeat bg-center bg-contain">
                        </div>
                        <div class="relative bg-prize-4-poster h-96 bg-no-repeat bg-center bg-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="min-h-screen px-6 lg:px-8 bg-page-7 bg-center bg-cover">
            <div class="max-w-4xl py-10 mx-auto lg:py-20">
                <div class=" text-center">
                    <h1 class="text-[3rem] font-asian-ninja leading-tight text-white sm:text-[4.2rem]">
                        Get To Know More!
                    </h1>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-80">
                        <a href="https://drive.google.com/drive/folders/1OpJKR3RUv1GL0OPXxNt4bynP3xST7QSu?usp=drive_link"
                            target="_blank"
                            class="rounded-xl font-andalus flex items-center justify-center bg-[#D9D9D9] px-12 py-4 text-xl shadow-sm hover:bg-red-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 focus-visible:text-white transition ease-in-out">
                            Download FAQ
                        </a>
                        <a href="https://drive.google.com/drive/folders/1OpJKR3RUv1GL0OPXxNt4bynP3xST7QSu?usp=drive_link"
                            target="_blank"
                            class="rounded-xl font-andalus flex items-center justify-center bg-[#D9D9D9] px-12 py-4 text-xl shadow-sm hover:bg-red-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 focus-visible:text-white transition ease-in-out">
                            Download Guideline
                        </a>
                        <a href="https://drive.google.com/drive/folders/1O8Ca0-Dt9hQ0MPCFCWZ8iRqapbm6bXxv?usp=sharing"
                            target="_blank"
                            class="rounded-xl font-andalus flex items-center justify-center bg-[#D9D9D9] px-12 py-4 text-xl shadow-sm hover:bg-red-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 focus-visible:text-white transition ease-in-out">
                            Download Submission Package
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="min-h-screen px-6 pt-5 lg:px-8 bg-page-8 bg-bottom bg-cover">
            <div class="max-w-3xl py-10 mx-auto lg:py-20">
                <div class="text-center">
                    <h1 class="text-[3rem] font-asian-ninja leading-tight text-white sm:text-[4.2rem]">
                        How to register
                    </h1>
                    <div class="h-96 md:h-[30rem] mt-10">
                        <iframe class="w-full h-96 md:h-[30rem] rounded-3xl"
                            src="https://www.youtube.com/embed/9SAWNooGW_w?si=uNihJSp0Lqi1f0J1"
                            title="Tutorial Mendaftar Cadion" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact" class="min-h-screen px-6 lg:px-8 bg-page-9 bg-top bg-cover">
            <div class="max-w-6xl py-10 mx-auto lg:py-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
                    <div class="order-2 md:order-1">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3951.7440030850285!2d112.547667!3d-7.921786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78815e17df316d%3A0xbd3a2df8b4512d3c!2sFakultas%20Kedokteran%20dan%20Ilmu%20Kesehatan%20%22FKIK%22%20-%20UIN%20Malang!5e0!3m2!1sid!2sus!4v1715771631309!5m2!1sid!2sus"
                            class="w-full h-96 md:h-[34rem] rounded-3xl" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="order-1 text-center text-white md:text-left md:order-2">
                        <h1 class="text-[3rem] font-asian-ninja sm:text-[4rem]">
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
                                class="block mt-5 w-40 text-center rounded-xl font-andalus text-gray-900 bg-[#D9D9D9] py-2 text-lg shadow-sm hover:bg-red-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 focus-visible:text-white transition ease-in-out">
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

        <div class="min-h-screen px-6 pt-14 lg:px-8 bg-page-10 bg-center bg-cover">
            <div class="max-w-2xl py-32 mx-auto lg:py-48">
                <div class="text-center mx-auto">
                    <h1 class="text-4xl text-white font-asian-ninja leading-tight sm:text-6xl">
                        Are You Ready
                    </h1>
                    <h1 class="text-4xl text-white font-asian-ninja leading-tight sm:text-6xl">
                        To Win The Competition?
                    </h1>
                    <div class="mt-10">
                        <a href="/public-poster/register"
                            class="rounded-xl font-andalus bg-[#D9D9D9] px-12 py-4 text-xl shadow-sm hover:bg-red-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 focus-visible:text-white transition ease-in-out">
                            REGISTER NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="min-h-screen px-6 lg:px-8 bg-page-11 bg-center bg-cover">
            <div class="max-w-5xl py-32 mx-auto lg:py-60">
                <div class="text-center mx-auto">
                    <p class="text-xl lg:text-2xl font-abhaya text-white leading-tight">
                        Presented by:
                    </p>
                    <p class="text-xl lg:text-2xl font-abhaya text-white leading-tight">
                        Himpunan Mahasiswa Program Studi Pendidikan Dokter
                    </p>
                    <p class="text-xl lg:text-2xl font-abhaya text-white leading-tight">
                        Faculty of Medicine and health Sciences, Maulana Malik Ibrahim State Islamic University
                    </p>
                    <div class="mt-12 flex justify-center gap-12">
                        <a href="https://www.instagram.com/cardion.2025/" target="_blank"
                            class="bg-white p-5 rounded-full hover:bg-red-500 transition ease-in-out">
                            <img src="img/instagram.png" alt="Instagram" class="w-8">
                        </a>
                        <a href="https://www.tiktok.com/@cardionfkuinmaliki" target="_blank"
                            class="bg-white p-5 rounded-full hover:bg-red-500 transition ease-in-out">
                            <img src="img/tiktok.png" alt="Tiktok" class="w-8">
                        </a>
                        <a href="https://youtube.com/@cardionfkuinmalang?feature=shared" target="_blank"
                            class="bg-white p-5 rounded-full hover:bg-red-500 transition ease-in-out">
                            <img src="img/youtube.png" alt="Youtube" class="w-8">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>