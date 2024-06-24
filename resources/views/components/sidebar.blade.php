<div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 lg:-ml-64 lg:fixed lg:top-0 lg:z-30 lg:h-screen lg:shadow-xl animated faster">

    @if(request()->is('admin') | Str::of(url()->current())->contains('main')|
    Str::of(url()->current())->contains('admin/main'))
    <div class="flex flex-col pt-20">
        <div class="text-right hidden lg:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">dashboard</p>
        <a href="{{route('dashboard.index')}}"
            class="{{ request()->is('admin/main/dashboard') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>
            dashboard
        </a>
        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">navigation</p>
        <a href="{{route('dashboard.user.index')}}"
            class="{{ request()->is('admin/main/user') | Str::of(url()->current())->contains('user/') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user text-xs mr-2"></i>
            user
        </a>
        <a href="{{route('dashboard.user-type.index')}}"
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

    @elseif(request()->is('admin/olimpiade') |
    Str::of(url()->current())->contains('olimpiade'))
    <div class="flex flex-col pt-20">
        <div class="text-right hidden lg:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">dashboard</p>
        <a href="{{route('olimpiade.dashboard')}}"
            class="{{ request()->is('admin/olimpiade/olimpiade') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>
            dashboard
        </a>
        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">navigation</p>
        <a href="{{route('olimpiade.cabang.index')}}"
            class="{{ request()->is('admin/olimpiade/cabang/data') | Str::of(url()->current())->contains('olimpiade/cabang/') | Str::of(url()->current())->contains('olimpiade/rayon/') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-project-diagram text-xs mr-2"></i>
            cabang
        </a>
        <a href="{{route('olimpiade.peserta.index')}}"
            class=" {{ request()->is('admin/olimpiade/peserta/data') | Str::of(url()->current())->contains('olimpiade/peserta/data')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user text-xs mr-2"></i>
            peserta
        </a>
        <a href="{{route('olimpiade.peserta.create')}}"
            class=" {{ request()->is('admin/olimpiade/peserta/add') | Str::of(url()->current())->contains('olimpiade/peserta/add')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-plus text-xs mr-2"></i>
            tambah peserta offline
        </a>
        <a href="{{route('olimpiade.peserta.create-excel')}}"
            class=" {{ Str::of(url()->current())->contains('olimpiade/peserta/excel')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-friends text-xs mr-2"></i>
            tambah peserta (excel)
        </a>
        <a href="{{route('olimpiade.ujian.index')}}"
            class="{{ request()->is('admin/olimpiade/ujian/data') | Str::of(url()->current())->contains('olimpiade/ujian/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-file-alt text-xs mr-2"></i>
            ujian
        </a>
        <a href="{{route('olimpiade.monitoring_ujian.show_tests_monitoring')}}"
            class="{{ request()->is('admin/olimpiade/monitoringujian') | Str::of(url()->current())->contains('olimpiade/monitoringujian/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-secret text-xs mr-2"></i>
            monitoring ujian
        </a>
        <a href="{{route('olimpiade.pengumuman.index')}}"
            class="{{ request()->is('admin/olimpiade/pengumuman') | Str::of(url()->current())->contains('olimpiade/pengumuman/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-bullhorn text-xs mr-2"></i>
            pengumuman
        </a>
        <a href="{{route('olimpiade.assign_test.show_tests')}}"
            class="{{ request()->is('admin/olimpiade/assigntest') | Str::of(url()->current())->contains('olimpiade/assigntest/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-book-reader text-xs mr-2"></i>
            assign test
        </a>
        <a href="{{route('olimpiade.pembayaran.index')}}"
            class="{{ request()->is('admin/olimpiade/pembayaran') | Str::of(url()->current())->contains('olimpiade/pembayaran/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-coins text-xs mr-2"></i>
            pembayaran
        </a>
        <a href="{{route('olimpiade.gelombang_pembayaran.index')}}"
            class="{{ request()->is('admin/olimpiade/gelombang-pembayaran') | Str::of(url()->current())->contains('olimpiade/gelombang-pembayaran/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-money-bill-wave text-xs mr-2"></i>
            gelombang pembayaran
        </a>
    </div>

    @elseif(request()->is('admin/poster') |
    Str::of(url()->current())->contains('poster'))
    <div class="flex flex-col pt-20">
        <div class="text-right hidden lg:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">dashboard</p>
        <a href="{{route('poster.dashboard')}}"
            class="{{ request()->is('admin/poster/poster') ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>
            dashboard
        </a>
        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">navigation</p>
        <a href="{{route('poster.cabang.index')}}"
            class="{{ request()->is('admin/poster/cabang') | Str::of(url()->current())->contains('poster/cabang/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-project-diagram text-xs mr-2"></i>
            cabang
        </a>
        <a href="{{route('poster.peserta.index')}}"
            class=" {{ Str::of(url()->current())->contains('poster/peserta/data')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user text-xs mr-2"></i>
            peserta
        </a>
        <a href="{{route('poster.peserta.create')}}"
            class=" {{ Str::of(url()->current())->contains('poster/peserta/add')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-plus text-xs mr-2"></i>
            tambah peserta offline
        </a>
        <a href="{{route('poster.peserta.create-excel')}}"
            class=" {{ Str::of(url()->current())->contains('poster/peserta/excel')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-user-friends text-xs mr-2"></i>
            tambah peserta (excel)
        </a>
        <a href="{{route('poster.pengumpulan_karya.index')}}"
            class="{{ request()->is('admin/poster/pengumpulan-karya') | Str::of(url()->current())->contains('poster/pengumpulan-karya/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-folder-open text-xs mr-2"></i>
            pengumpulan karya
        </a>
        <a href="{{route('poster.penilaian.pengumpulan_karya')}}"
            class="{{ request()->is('admin/poster/penilaian') | Str::of(url()->current())->contains('poster/penilaian/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-feather-alt text-xs mr-2"></i>
            penilaian
        </a>
        <a href="{{route('poster.pengumuman.index')}}"
            class="{{ request()->is('admin/poster/pengumuman') | Str::of(url()->current())->contains('poster/pengumuman/')  ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-bullhorn text-xs mr-2"></i>
            pengumuman
        </a>
        <a href="{{route('poster.assign_test.show_tests')}}"
            class="{{ request()->is('admin/poster/assigntest') | Str::of(url()->current())->contains('poster/assigntest/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-book-reader text-xs mr-2"></i>
            assign test
        </a>
        <a href="{{route('poster.pembayaran.index')}}"
            class="{{ request()->is('admin/poster/pembayaran') | Str::of(url()->current())->contains('poster/pembayaran/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-coins text-xs mr-2"></i>
            pembayaran
        </a>
        <a href="{{route('poster.gelombang_pembayaran.index')}}"
            class="{{ request()->is('admin/poster/gelombang-pembayaran') | Str::of(url()->current())->contains('poster/gelombang-pembayaran/')   ? 'text-teal-600' :  'hover:text-teal-600'}} mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-money-bill-wave text-xs mr-2"></i>
            gelombang pembayaran
        </a>
    </div>

    @endif
</div>