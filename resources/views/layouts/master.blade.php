<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Page title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('CSS/main.css') }}">
    @stack('css')

    @livewireStyles
</head>

<body>

    <header>
        @yield('header')
    </header>

    <main class="min-vh-100">
        @hasSection ('sidebar-main')
            <div class="container-fluid text-center">
                <div class="row">
                    {{-- start of sidebar --}}
                    @include('layouts.sidebar')
                    {{-- end of sidebar --}}

                    {{-- start of content --}}
                    
                    <div class="col-11 offset-1 d-flex flex-column min-vh-100 @yield('main-class')">

                        @yield('sidebar-main')
                    </div>
                    {{-- start of content --}}
                </div>
            </div>
        @else
            @yield('main')
        @endif
    </main>

    <footer>
        @yield('footer')
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    {{-- custom script --}}
    @stack('js')

    @yield('js')

    @livewireScripts
</body>

</html>
