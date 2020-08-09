<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ucfirst($title) ?? '' }} - Manage | {{ config('app.name', 'Owen Prosser') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    @yield('head')
</head>
<body class="antialiased font-sans leading-none bg-white text-text">
    <div id="app">
        <header class="py-4 px-6 flex justify-between items-center shadow-lg">
            <div class="flex justify-between w-full lg:w-auto">
                <a href="https://prossermedia.co.uk" class="flex space-x-3 items-center lg:w-64">
                    <img src="https://res.cloudinary.com/prosser-media-co-u-k/image/upload/v1582216700/Logo_-_Green_pcfaqu.png" alt="" class="h-12">
                    <span class="text-primary-normal text-xl hidden lg:block">Prosser Media</span>
                </a>
                <button class="block hover:text-primary-normal transition duration-200 lg:hidden">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
            </div>
            <div class="flex-1 flex justify-between items-center lg:pl-4">
                <h3 class="hidden lg:block text-lg font-light">Owen Prosser</h3>
                <div class="relative" x-data="{ profile: false }">
                    <button class="block hover:text-primary-normal transition duration-200" @click="profile = !profile">
                        <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="" class="h-10 w-10 object-cover rounded-full">
                    </button>
                    <div class="absolute bg-white rounded shadow-lg py-2 right-0 w-48" x-show="profile" @click.away="profile = false">
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-gray-100 transition duration-200">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <span>Profile</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-4 py-3 hover:bg-gray-100 transition duration-200">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            <span>Help</span>
                        </a>
                        <a href="{{ route('logout.user') }}" class="border-t flex items-center space-x-3 px-4 py-3 hover:bg-gray-100 transition duration-200">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <div class="flex">
            <div class="shadow-lg bg-white py-6 fixed left-0 top-0 bottom-0 w-64 lg:static" style="min-height: calc(100vh - 80px)">
                <a href="{{ route('manage.dashboard') }}" class="flex items-center space-x-4 px-6 py-4 hover:bg-gray-100 transition duration-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('manage.pagecontent.index') }}" class="flex items-center space-x-4 px-6 py-4 hover:bg-gray-100 transition duration-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
                    <span>Page Content</span>
                </a>
                <a href="{{ route('manage.services.index') }}" class="flex items-center space-x-4 px-6 py-4 hover:bg-gray-100 transition duration-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                    <span>Services</span>
                </a>
                <a href="{{ route('manage.personalprojects.index') }}" class="flex items-center space-x-4 px-6 py-4 hover:bg-gray-100 transition duration-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                    <span>Personal Projects</span>
                </a>
                <a href="{{ route('manage.portfolios.index') }}" class="flex items-center space-x-4 px-6 py-4 hover:bg-gray-100 transition duration-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
                    <span>Portfolio</span>
                </a>
                <a href="#" class="flex items-center space-x-4 px-6 py-4 hover:bg-gray-100 transition duration-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <span>Contacts</span>
                </a>
                <a href="{{ route('manage.pages.index') }}" class="flex items-center space-x-4 px-6 py-4 hover:bg-gray-100 transition duration-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                    <span>Pages</span>
                </a>
                <a href="{{ route('pages.home') }}" class="flex items-center space-x-4 px-6 py-4 hover:bg-gray-100 transition duration-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                    <span>Website</span>
                </a>
            </div>
            <main class="p-6 flex-1" style="min-height: calc(100vh - 80px)">
                {{-- @if (session('success'))
                    <x-alert type="success" message="{{ session('success') }}"></x-alert>
                @endif

                @if (session('error'))
                    <x-alert type="error" message="{{ session('error') }}"></x-alert>
                @endif

                @if (session('info'))
                    <x-alert type="info" message="{{ session('info') }}"></x-alert>
                @endif --}}

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('body')
</body>
</html>
