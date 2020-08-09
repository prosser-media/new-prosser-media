<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="/css/main.css" rel="stylesheet">
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{ ucfirst($title) ?? '' }} | Prosser Media">
    <meta name="description" content="Hi there. My name is Owen and I am a full-stack web developer and designer. I mostly focus on the Laravel PHP Framework and then Laravel Livewire and Alpine.js on the front-end. With the styling, I mainly use Tailwind CSS and regular SCSS.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://prossermedia.co.uk">
    <meta property="og:title" content="{{ ucfirst($title) ?? '' }} | Prosser Media">
    <meta property="og:description" content="Hi there. My name is Owen and I am a full-stack web developer and designer. I mostly focus on the Laravel PHP Framework and then Laravel Livewire and Alpine.js on the front-end. With the styling, I mainly use Tailwind CSS and regular SCSS.">
    <meta property="og:image" content="https://res.cloudinary.com/prosser-media-co-u-k/image/upload/v1582216700/Logo_-_Green_pcfaqu.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://prossermedia.co.uk">
    <meta property="twitter:title" content="{{ ucfirst($title) ?? '' }} | Prosser Media">
    <meta property="twitter:description" content="Hi there. My name is Owen and I am a full-stack web developer and designer. I mostly focus on the Laravel PHP Framework and then Laravel Livewire and Alpine.js on the front-end. With the styling, I mainly use Tailwind CSS and regular SCSS.">
    <meta property="twitter:image" content="https://res.cloudinary.com/prosser-media-co-u-k/image/upload/v1582216700/Logo_-_Green_pcfaqu.png">

    <title>{{ ucfirst($title) ?? '' }} | {{ config('app.name', 'Owen Prosser') }}</title>

</head>
<body class="antialiased font-sans leading-none bg-white">
    <div x-data="{ dark: false }">
        <div id="app" :class="{ 'text-white bg-text': dark }" class="text-text">
            <header class="shadow-lg flex justify-between flex-col lg:flex-row" x-data="{ isOpen: false }">
                <div class="flex justify-between w-full lg:w-auto">
                    <a href="{{ route('pages.home') }}" class="block px-8 py-6 text-primary-normal hover:text-primary-light transition duration-200 text-lg">Owen Prosser</a>

                    <div class="flex">
                        <button class="block px-8 py-4 hover:text-primary-normal transition duration-200 lg:hidden" @click="isOpen = !isOpen">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                        </button>
                        {{-- <button class="block px-8 py-4 hover:text-primary-normal transition duration-200 lg:hidden" @click="dark = !dark">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                        </button> --}}
                    </div>
                </div>
                <div class="lg:flex flex-row mb-4 lg:mb-0 lg:items-center lg:mr-8 nav-shown" x-show="isOpen" @click.away="isOpen = false">
                    <a href="{{ route('pages.home') }}" class="block px-8 py-3 hover:text-primary-normal transition duration-200 lg:px-4 lg:py-6 {{ Nav::isRoute('pages.home', 'border-b-2 border-primary-normal text-primary-normal') }}">Home</a>
                    <a href="{{ route('pages.services') }}" class="block px-8 py-3 hover:text-primary-normal transition duration-200 lg:px-4 lg:py-6 {{ Nav::isRoute('pages.services', 'border-b-2 border-primary-normal text-primary-normal') }}">Services</a>
                    <a href="{{ route('pages.personalprojects') }}" class="block px-8 py-3 hover:text-primary-normal transition duration-200 lg:px-4 lg:py-6 {{ Nav::isRoute('pages.personalprojects', 'border-b-2 border-primary-normal text-primary-normal') }}">Personal Projects</a>
                    <a href="{{ route('pages.portfolio') }}" class="block px-8 py-3 hover:text-primary-normal transition duration-200 lg:px-4 lg:py-6 {{ Nav::isRoute('pages.portfolio', 'border-b-2 border-primary-normal text-primary-normal') }}">Portfolio</a>
                    <a href="{{ route('pages.contact') }}" class="mx-8 mt-3 bg-primary-normal text-white py-3 px-4 inline-block font-medium rounded transition duration-200 hover:bg-primary-light lg:mx-0 lg:mt-0 lg:ml-4">Get in Touch</a>
                    {{-- <button class="ml-4 py-4 hover:text-primary-normal transition duration-200 hidden lg:block" @click="dark = !dark">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                    </button> --}}
                </div>
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="p-8 bg-white flex flex-col lg:flex-row justify-between items-center">
                <p>Copyright © Owen Prosser 2020. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 lg:mt-0">
                    <a href="https://twitter.com/OwenProsser1" title="Twitter (Opens in a new tab)" target="_blank" class="transition duration-200 hover:text-primary-normal">
                        <svg class="h-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                    </a>
                    <a href="mailto:contact@prossermedia.co.uk" title="Email me (Opens your default mail application)" class="transition duration-200 hover:text-primary-normal">
                        <svg class="h-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </a>
                    <a href="https://codepen.io/o-prosser" title="Codepen (Opens in a new tab)" target="_blank" class="transition duration-200 hover:text-primary-normal">
                        <svg class="h-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codepen"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon><line x1="12" y1="22" x2="12" y2="15.5"></line><polyline points="22 8.5 12 15.5 2 8.5"></polyline><polyline points="2 15.5 12 8.5 22 15.5"></polyline><line x1="12" y1="2" x2="12" y2="8.5"></line></svg>
                    </a>
                    <a href="https://github.com/prosser-media/" title="Github (Opens in a new tab)" target="_blank" class="transition duration-200 hover:text-primary-normal">
                        <svg class="h-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                    </a>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
