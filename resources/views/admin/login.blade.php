<!doctype html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../../../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    @vite('resources/css/app.css')
    <title>{{ $title }} | Cardion</title>
</head>

<body class="min-h-full bg-login bg-center bg-cover">
    <div class="grid min-h-full grid-cols-1 px-6 py-0 md:grid-cols-3 lg:px-8 lg:py-12">
        <div
            class="mt-10 bg-slate-100 bg-opacity-30 col-span-2 backdrop-blur-lg p-5 rounded-xl sm:mx-auto sm:w-full sm:max-w-lg">
            <h2 class="mt-2 text-center text-3xl font-bold leading-9 tracking-tight text-gray-900">Login
            </h2>
            @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-2" role="alert">
                <strong class="font-bold">{{ session('error') }}</strong>
            </div>
            @endif
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="{{route('auth.admin.login.process')}}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="block w-full bg-transparent border-0 border-b-2 border-gray-500 py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:ring-0 focus:border-red-700 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                            <div class="mt-2 relative">
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    required
                                    class="block w-full bg-transparent border-0 border-b-2 border-gray-500 py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:ring-0 focus:border-red-700 sm:text-sm sm:leading-6">
                                <i class="fa fa-eye absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer" id="togglePassword"></i>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center">
                            <input id="remember-me" name="remember" type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                            <label for="remember-me" class="ml-3 min-w-0 flex-1 text-gray-900">Remember Me</label>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-[#D1A17E] px-3 py-3 text-sm font-semibold leading-6 shadow-sm hover:bg-red-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                            Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

<style>
    .relative input {
        padding-right: 2.5rem; /* Ensure there's space for the icon */
    }

    .fa-eye {
        position: absolute;
        right: 0.75rem;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #aaa;
    }

    .fa-eye:hover {
        color: #000;
    }
</style>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });
</script>
</html>