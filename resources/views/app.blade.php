<!doctype html>
<html data-theme="cmyk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/title.png') }}" />
    @include('layout.css')
</head>

<body>
    {{-- drawer --}}
    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->

            {{-- Navbar --}}
            @include('layout.navbar')
            {{-- end navbar --}}

            {{-- content --}}
            <div class="flex w-full flex-col">
                <div class="card rounded-box ml-2 mr-2 mt-2 grid h-[530px] place-items-stretch">
                    @yield('content')
                </div>
            </div>
            {{-- end content --}}

            {{-- footer --}}
            @include('layout.footer')
            {{-- end footer --}}

        </div>
        <div class="drawer-side">
            <label for="my-drawer" class="drawer-overlay"></label>
            <ul class="menu w-80 bg-base-100 p-4 text-base-content">
                <!-- Sidebar content here -->
                <li><a>Customer</a></li>
                <li><a href="/mobil">Mobil</a></li>
                <li><a>Rental</a></li>
                <li><a>Denda</a></li>
            </ul>
        </div>
    </div>
    {{-- end drawer --}}
    @include('layout.script')
</body>

</html>
