<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partial._header')
</head>
<body>
    <div id="app">
        @include('partial._nav')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @include('partial._footer')


    @yield('script')
</body>
</html>
