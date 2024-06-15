<div id="navbar-u"
    class="fixed w-full top-0 z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

    <!-- logo -->
    <div>
        <div class="flex-none w-20 flex flex-row items-center">
            <a href="/olympiad/dashboard" class="flex-none flex flex-row items-center">
                <img src="../../../img/logo.png" class="w-10 flex-none">
            </a>
        </div>
    </div>
    <!-- end logo -->

    <!-- navbar content toggle -->
    <button id="navbarToggle2" class="hidden lg:block lg:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <div id="navbar2"
        class="animated lg:hidden lg:fixed lg:top-0 lg:w-full lg:left-0 lg:mt-16 lg:border-t lg:border-b lg:border-gray-200 lg:p-10 lg:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center lg:flex-col lg:items-center">
        <!-- left -->
        <div
            class="text-gray-600 lg:w-full lg:flex lg:flex-row lg:flex-wrap lg:gap-2 lg:justify-evenly lg:pb-10 lg:mb-10 lg:border-b lg:border-gray-200">
            <a href="{{route('user.dashboard')}}"
                class="{{ Str::of(url()->current())->contains('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-600 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ Str::of(url()->current())->contains('dashboard') ? 'page' : false }}">Dashboard</a>
            <a href="{{ Str::of(url()->current())->contains('olimpiade') ? '/olimpiade/registrasi' : '/public-poster/registrasi' }}"
                class="{{ Str::of(url()->current())->contains('registrasi') ? 'bg-gray-900 text-white' : 'text-gray-600 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ Str::of(url()->current())->contains('registrasi') ? 'page' : false }}">Registrasi</a>
                <a href="{{ Str::of(url()->current())->contains('olimpiade') ? '/olimpiade/pembayaran' : '/public-poster/pembayaran' }}"
                    class="{{ Str::of(url()->current())->contains('pembayaran') ? 'bg-gray-900 text-white' : 'text-gray-600 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
                    aria-current="{{ Str::of(url()->current())->contains('pembayaran') ? 'page' : false }}">Pembayaran</a>
            <a href="{{ Str::of(url()->current())->contains('olimpiade') ? '/olimpiade/cetak-kartu' : '/public-poster/cetak-kartu' }}"
                class="{{ Str::of(url()->current())->contains('cetak-kartu') ? 'bg-gray-900 text-white' : 'text-gray-600 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ Str::of(url()->current())->contains('cetak-kartu') ? 'page' : false }}">Cetak Kartu</a>
            <a href="{{ Str::of(url()->current())->contains('olimpiade') ? '/olimpiade/sertifikat' : '/public-poster/sertifikat' }}"
                class="{{ Str::of(url()->current())->contains('sertifikat') ? 'bg-gray-900 text-white' : 'text-gray-600 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ Str::of(url()->current())->contains('sertifikat') ? 'page' : false }}">Sertifikat</a>
            @if(Str::of(url()->current())->contains('olimpiade'))
            <a href="/olimpiad/ujian"
                class="{{ Str::of(url()->current())->contains('ujian') ? 'bg-gray-900 text-white' : 'text-gray-600 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ Str::of(url()->current())->contains('ujian') ? 'page' : false }}">Ujian</a>
            <a href="/olimpiad/pengumuman"
                class="{{ Str::of(url()->current())->contains('pengumuman') ? 'bg-gray-900 text-white' : 'text-gray-600 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ Str::of(url()->current())->contains('pengumuman') ? 'page' : false }}">Pengumuman</a>
            <a href="https://instagram.com/cardion.2024?igshid=MWZjMTM2ODFkZg==" target="_blank"
                class="text-gray-600 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Berita
                Terbaru</a>
            @elseif(Str::of(url()->current())->contains('public-poster'))
            <a href="/public-poster/pengumpulan-karya"
                class="{{ Str::of(url()->current())->contains('pengumpulan-karya') ? 'bg-gray-900 text-white' : 'text-gray-600 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ Str::of(url()->current())->contains('pengumpulan-karya') ? 'page' : false }}">Pengumpulan
                Karya</a>
            @endif
        </div>
        <!-- end left -->

        <!-- right -->
        <div class="flex flex-row-reverse items-center">
            <!-- user -->
            <div class="dropdown relative md:static">
                <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img class="w-full h-full object-cover" src="../../../img/user.svg">
                    </div>
                    <div class="ml-2 capitalize flex ">
                        <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">
                        @if (Auth::guard('peserta')->user()->nama_team == null)
                            {{Auth::guard('peserta')->user()->nama}}
                        @else
                            {{Auth::guard('peserta')->user()->nama_team}}
                        @endif
                            </h1>
                        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                    </div>
                </button>
                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>
                <div
                    class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">
                    <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                        href="
                        {{route('olimpiade.account', Auth::guard('peserta')->user()->id_peserta)}}
                        ">
                        <i class="fad fa-user-edit text-xs mr-1"></i>
                        akun saya
                    </a>
                    <hr>
                    <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                        href="
                        {{route('olimpiade.logout')}}
                        ">
                        <i class="fad fa-user-times text-xs mr-1"></i>
                        log out
                    </a>
                </div>
            </div>
            <!-- end user -->
        </div>
        <!-- end right -->
    </div>
    <!-- end navbar content -->

</div>