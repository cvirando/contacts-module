<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('contacts.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-contacts', 'Resources/assets/sass/app.scss') }} --}}

    </head>
    <body>
        <div class="mt-5">
            <div>
                <a href="{{route('home')}}" class="btn btn-primary btn-sm" >Back</a>
            </div>
            @yield('content')
        </div>

        {{-- Laravel Vite - JS File --}}
        {{-- {{ module_vite('build-contacts', 'Resources/assets/js/app.js') }} --}}
    </body>
</html>
