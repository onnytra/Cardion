<header class="bg-gray-900 p-4 mb-4 text-white rounded">
    @include('sweetalert::alert')
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <h1 class="text-lg font-bold">{{ $title }}</h1>
            <nav class="text-sm">
                <ul class="flex items-center space-x-2">
                    <!-- Breadcrumb -->
                    @if(request()->is('admin'))
                    <li><a class="text-gray-300">Dashboard</a></li>

                    @elseif(request()->is('admin/main/' . $slug) |
                    Str::of(url()->current())->contains('main'))
                    <li><a href="/admin" class="text-white">Dashboard</a></li>
                    <li>/</li>
                    <li><a class="text-gray-300">{{ $title }}</a></li>

                    <!-- Olimpiade -->
                    @elseif(request()->is('admin/olimpiade'))
                    <li><a href="/admin" class="text-white">Dashboard</a></li>
                    <li>/</li>
                    <li><a class="text-gray-300">Olimpiade</a></li>

                    @elseif(request()->is('admin/olimpiade/'. $slug ) |
                    Str::of(url()->current())->contains('olimpiade'))
                    <li><a href="/admin" class="text-white">Dashboard</a></li>
                    <li>/</li>
                    <li><a href="/admin/olimpiade" class="text-white">Olimpiade</a></li>
                    <li>/</li>
                    <li><a class="text-gray-300">{{ $title }}</a></li>

                    <!-- Public Poster -->
                    @elseif(request()->is('admin/public-poster'))
                    <li><a href="/admin" class="text-white">Dashboard</a></li>
                    <li>/</li>
                    <li><a class="text-gray-300">Public Poster</a></li>

                    @elseif(request()->is('admin/public-poster/'. $slug ) |
                    Str::of(url()->current())->contains('public-poster'))
                    <li><a href="/admin" class="text-white">Dashboard</a></li>
                    <li>/</li>
                    <li><a href="/admin/public-poster" class="text-white">Public Poster</a></li>
                    <li>/</li>
                    <li><a class="text-gray-300">{{ $title }}</a></li>

                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>