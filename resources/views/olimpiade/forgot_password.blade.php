<!doctype html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../../../img/logo.png" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>{{ $title }} | Cardion</title>
</head>

<body class="min-h-full bg-login bg-center bg-cover">
    <div class="grid min-h-full grid-cols-1 px-6 py-0 md:grid-cols-3 lg:px-8 lg:py-12">
        <div
            class="mt-10 bg-slate-100 bg-opacity-30 col-span-2 backdrop-blur-lg p-5 rounded-xl sm:mx-auto sm:w-full sm:max-w-lg">
            <h2 class="mt-2 text-center text-3xl font-bold leading-9 tracking-tight text-gray-900">Forgot Password
            </h2>

            @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Ups! Ada yang salah.</strong>
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="{{route($event.'.forgotpassword.mail')}}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}"
                                class="block w-full bg-transparent border-0 border-b-2 border-gray-500 py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 focus:ring-0 focus:border-red-700 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-[#D1A17E] px-3 py-3 text-sm font-semibold leading-6 shadow-sm hover:bg-red-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                            Submit</button>
                    </div>
                </form>

                <p class="mt-4 text-center text-sm text-white">
                    Back To 
                    <a href="{{route($event.'.login')}}"
                        class="font-semibold leading-6 text-red-600 hover:text-red-500 hover:underline">Sign
                        In</a>
                </p>
            </div>
        </div>
    </div>

</body>

</html>