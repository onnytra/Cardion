<div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 lg:-ml-64 lg:fixed lg:top-0 lg:z-30 lg:h-screen lg:shadow-xl animated faster">

    @if(request()->is('admin') | request()->is('admin/account') | request()->is('admin/main/' . $slot) |
    Str::of(url()->current())->contains('main'))
    <div class="flex flex-col">
        <div class="text-right hidden lg:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">dashboard</p>
        <a href="/admin"
            class="{{ request()->is('admin') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>
            dashboard
        </a>
        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">navigation</p>
        <a href="/admin/main/user"
            class="{{ request()->is('admin/main/user') | Str::of(url()->current())->contains('user/') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user text-xs mr-2"></i>
            user
        </a>
        <a href="/admin/main/user-type"
            class=" {{ request()->is('admin/main/user-type') | Str::of(url()->current())->contains('user-type/') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-tag text-xs mr-2"></i>
            user type
        </a>
        <a href="/admin/main/sertifikat"
            class="{{ request()->is('admin/main/sertifikat') | Str::of(url()->current())->contains('sertifikat/') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-file text-xs mr-2"></i>
            sertifikat
        </a>
        <a href="/admin/main/settings"
            class="{{ request()->is('admin/main/settings') | Str::of(url()->current())->contains('settings/') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-cog text-xs mr-2"></i>
            settings
        </a>
    </div>

    @elseif(request()->is('admin/olimpiade') | request()->is('admin/olimpiade/' . $slot) |
    Str::of(url()->current())->contains('olimpiade'))
    <div class="flex flex-col">
        <div class="text-right hidden lg:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">dashboard</p>
        <a href="/admin/olimpiade"
            class="{{ request()->is('admin/olimpiade') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>
            dashboard
        </a>
        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">navigation</p>
        <a href="/admin/olimpiade/cabang/data"
            class="{{ request()->is('admin/olimpiade/cabang/data') | Str::of(url()->current())->contains('olimpiade/cabang/') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-project-diagram text-xs mr-2"></i>
            cabang
        </a>
        <a href="/admin/olimpiade/peserta"
            class=" {{ request()->is('admin/olimpiade/peserta') | Str::of(url()->current())->contains('olimpiade/peserta/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user text-xs mr-2"></i>
            peserta
        </a>
        <a href="/admin/olimpiade/tambah-peserta-offline"
            class=" {{ request()->is('admin/olimpiade/tambah-peserta-offline') | Str::of(url()->current())->contains('olimpiade/tambah-peserta-online/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-plus text-xs mr-2"></i>
            tambah peserta offline
        </a>
        <a href="/admin/olimpiade/tambah-peserta-panitia"
            class=" {{ request()->is('admin/olimpiade/tambah-peserta-panitia') | Str::of(url()->current())->contains('olimpiade/tambah-peserta-panitia/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-friends text-xs mr-2"></i>
            tambah peserta (panitia)
        </a>
        <a href="/admin/olimpiade/ujian"
            class="{{ request()->is('admin/olimpiade/ujian') | Str::of(url()->current())->contains('olimpiade/ujian/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-file-alt text-xs mr-2"></i>
            ujian
        </a>
        <a href="/admin/olimpiade/monitoring-ujian"
            class="{{ request()->is('admin/olimpiade/monitoring-ujian') | Str::of(url()->current())->contains('olimpiade/monitoring-ujian/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-secret text-xs mr-2"></i>
            monitoring ujian
        </a>
        <a href="/admin/olimpiade/pengumuman"
            class="{{ request()->is('admin/olimpiade/pengumuman') | Str::of(url()->current())->contains('olimpiade/pengumuman/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-bullhorn text-xs mr-2"></i>
            pengumuman
        </a>
        <a href="/admin/olimpiade/assign-test"
            class="{{ request()->is('admin/olimpiade/assign-test') | Str::of(url()->current())->contains('olimpiade/assign-test/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-book-reader text-xs mr-2"></i>
            assign test
        </a>
        <a href="/admin/olimpiade/sesi"
            class="{{ request()->is('admin/olimpiade/sesi') | Str::of(url()->current())->contains('olimpiade/sesi/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-calendar-alt text-xs mr-2"></i>
            sesi
        </a>
        <a href="/admin/olimpiade/pembayaran"
            class="{{ request()->is('admin/olimpiade/pembayaran') | Str::of(url()->current())->contains('olimpiade/pembayaran/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-coins text-xs mr-2"></i>
            pembayaran
        </a>
        <a href="/admin/olimpiade/gelombang-pembayaran"
            class="{{ request()->is('admin/olimpiade/gelombang-pembayaran') | Str::of(url()->current())->contains('olimpiade/gelombang-pembayaran/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-money-bill-wave text-xs mr-2"></i>
            gelombang pembayaran
        </a>
    </div>

    @elseif(request()->is('admin/public-poster') | request()->is('admin/public-poster/' . $slot) |
    Str::of(url()->current())->contains('public-poster'))
    <div class="flex flex-col">
        <div class="text-right hidden lg:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">dashboard</p>
        <a href="/admin/public-poster"
            class="{{ request()->is('admin/public-poster') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>
            dashboard
        </a>
        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">navigation</p>
        <a href="/admin/public-poster/cabang"
            class="{{ request()->is('admin/public-poster/cabang') | Str::of(url()->current())->contains('public-poster/cabang/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-project-diagram text-xs mr-2"></i>
            cabang
        </a>
        <a href="/admin/public-poster/peserta"
            class=" {{ request()->is('admin/public-poster/peserta') | Str::of(url()->current())->contains('public-poster/peserta/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user text-xs mr-2"></i>
            peserta
        </a>
        <a href="/admin/public-poster/tambah-peserta-offline"
            class=" {{ request()->is('admin/public-poster/tambah-peserta-offline') | Str::of(url()->current())->contains('public-poster/tambah-peserta-offline/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-plus text-xs mr-2"></i>
            tambah peserta offline
        </a>
        <a href="/admin/public-poster/tambah-peserta-panitia"
            class=" {{ request()->is('admin/public-poster/tambah-peserta-panitia') | Str::of(url()->current())->contains('public-poster/tambah-peserta-panitia/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-friends text-xs mr-2"></i>
            tambah peserta (panitia)
        </a>
        <a href="/admin/public-poster/pengumpulan-karya"
            class="{{ request()->is('admin/public-poster/pengumpulan-karya') | Str::of(url()->current())->contains('public-poster/pengumpulan-karya/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-folder-open text-xs mr-2"></i>
            pengumpulan karya
        </a>
        <a href="/admin/public-poster/penilaian"
            class="{{ request()->is('admin/public-poster/penilaian') | Str::of(url()->current())->contains('public-poster/penilaian/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-feather-alt text-xs mr-2"></i>
            penilaian
        </a>
        <a href="/admin/public-poster/assign-test"
            class="{{ request()->is('admin/public-poster/assign-test') | Str::of(url()->current())->contains('public-poster/assign-test/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-book-reader text-xs mr-2"></i>
            assign test
        </a>
        <a href="/admin/public-poster/sesi"
            class="{{ request()->is('admin/public-poster/sesi') | Str::of(url()->current())->contains('public-poster/sesi/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-calendar-alt text-xs mr-2"></i>
            sesi
        </a>
        <a href="/admin/public-poster/pembayaran"
            class="{{ request()->is('admin/public-poster/pembayaran') | Str::of(url()->current())->contains('public-poster/pembayaran/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-coins text-xs mr-2"></i>
            pembayaran
        </a>
        <a href="/admin/public-poster/gelombang-pembayaran"
            class="{{ request()->is('admin/public-poster/gelombang-pembayaran') | Str::of(url()->current())->contains('public-poster/gelombang-pembayaran/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-money-bill-wave text-xs mr-2"></i>
            gelombang pembayaran
        </a>
    </div>

    @endif
</div>