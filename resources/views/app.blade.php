<!doctype html>
<html data-theme="emerald">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    {{-- drawer --}}
    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->
            {{-- Navbar --}}
            <div class="navbar rounded-xl bg-base-100 shadow-xl">
                <div class="flex-none">
                    <label for="my-drawer" class="btn-ghost btn-square btn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1">
                    <a class="btn-ghost btn text-xl normal-case">daisyUI</a>
                </div>
                <div class="flex-none">
                    <button class="btn-ghost btn-square btn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            {{-- end navbar --}}
            {{-- content --}}
            <div class="flex w-full flex-col">
                <div class="card rounded-box mt-1 grid h-[530px] place-items-center">
                    @yield('content')
                </div>
            </div>
            {{-- end content --}}
            {{-- footer --}}
            <footer class="footer footer-center fixed bottom-0 bg-base-300 p-4 text-base-content">
                <div>
                    <p>Copyright © 2023 - Created By Rayhan Althaf</p>
                </div>
            </footer>
            {{-- end footer --}}
        </div>
        <div class="drawer-side">
            <label for="my-drawer" class="drawer-overlay"></label>
            <ul class="menu w-80 bg-base-100 p-4 text-base-content">
                <!-- Sidebar content here -->
                <li><a>Sidebar Item 1</a></li>
                <li><a>Sidebar Item 2</a></li>
                <li><a>Sidebar Item 3</a></li>
                <li><a>Sidebar Item 4</a></li>

            </ul>
        </div>
    </div>
    {{-- end drawer --}}
</body>

</html>
