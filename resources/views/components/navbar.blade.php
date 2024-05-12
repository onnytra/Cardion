<div
    class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

    <!-- logo -->
    <div>
        <div class="flex-none w-56 flex flex-row items-center">
            <a href="/admin" class="flex-none flex flex-row items-center">
                <img src="../../../img/logo.png" class="w-10 flex-none">
                <strong class="capitalize ml-1 flex-1">cardion</strong>
            </a>

            <button id="sliderBtn" class="ml-4 flex-none text-right text-gray-900 hidden md:block">
                <i class="fad fa-list-ul"></i>
            </button>
        </div>
    </div>
    <!-- end logo -->

    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <div id="navbar"
        class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
        <!-- left -->
        <div
            class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
            <a href="/admin"
                class="{{ request()->is('admin') | request()->is('admin/main/' . $slot) | Str::of(url()->current())->contains('main')  ? 'bg-gray-900 text-white' : 'text-gray-600 hover:bg-gray-700 hover:text-white'}}  rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ request()->is('admin') ? 'page' : false }}">Main Dashboard</a>
            <a href="/admin/olimpiade"
                class="{{ request()->is('admin/olimpiade') | request()->is('admin/olimpiade/' . $slot) | Str::of(url()->current())->contains('olimpiade')   ? 'bg-gray-900 text-white' : 'text-gray-600 hover:bg-gray-700 hover:text-white'}}  rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ request()->is('olimpiade') ? 'page' : false }}">Olimpiade</a>
            <a href="/admin/public-poster"
                class="{{ request()->is('admin/public-poster') | request()->is('admin/public-poster/' . $slot) | Str::of(url()->current())->contains('public-poster')   ? 'bg-gray-900 text-white' : 'text-gray-600 hover:bg-gray-700 hover:text-white'}}  rounded-md px-3 py-2 text-sm font-medium"
                aria-current="{{ request()->is('public-poster') ? 'page' : false }}">Public Poster</a>
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
                        <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Admin</h1>
                        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                    </div>
                </button>
                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>
                <div
                    class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">
                    <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                        href="/admin/account">
                        <i class="fad fa-user-edit text-xs mr-1"></i>
                        akun saya
                    </a>
                    <hr>
                    <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                        href="/admin/logout">
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