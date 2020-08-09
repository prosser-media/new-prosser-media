@extends('layouts.app', ['title' => 'Full-Stack Web Developer'])

@section('content')
    <div class="py-20 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('images/home-hero.png') }}')">
        <div class="container px-8">
            <h1 class="text-5xl font-medium text-center text-primary-normal">Hi there. I’m a Full-stack web developer and designer.</h1>
            <div class="grid" style="place-items: center;">
                <a href="{{ route('pages.services') }}" class="mt-6 py-3 text-lg px-6 bg-primary-normal text-white inline-block font-medium rounded transition duration-200 hover:bg-primary-light ">Learn more</a>
            </div>
        </div>
    </div>

    <div class="my-16 container px-8">
        @foreach ($pageContent->where('name', 'Home Intro') as $item)
            {!! $item->content !!}
        @endforeach
    </div>

    <div class="my-16 container px-8">
        <h2 class="text-2xl text-primary-normal text-center mb-6">My Recent Projects</h2>

        <div class="grid gap-6 grid-cols-1 lg:grid-cols-2">
            @foreach ($portfolioProjects as $project)
                <div class="rounded bg-white shadow-lg hover:shadow-md transition duration-200">
                    <a href="{{ route('pages.portfolioshow', $project->slug) }}">
                        <img src="/{{ $project->cover_image }}" alt="{{ $project->name }} - Owen Prosser Portfolio Projects" class="w-full h-48 object-cover rounded-t">
                    </a>
                    <a href="{{ route('pages.portfolioshow', $project->slug) }}" class="p-6 text-center text-xl block">{{ $project->name }}</a>
                </div>
            @endforeach
        </div>

        <a href="{{ route('pages.portfolio') }}" class="justify-center mt-4 flex items-center space-x-2 uppercase transition duration-200 hover:text-primary-normal">
            <span>View my full portfolio</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 16 16 12 12 8"></polyline><line x1="8" y1="12" x2="16" y2="12"></line></svg>
        </a>
    </div>

    <div class="my-16 container px-8">
        <h2 class="text-2xl text-primary-normal text-center mb-6">Some Personal Projects</h2>

        @foreach ($pageContent->where('name', 'Personal Project Intro') as $item)
            {!! $item->content !!}
        @endforeach

        <div class="grid gap-6 grid-cols-1 lg:grid-cols-2">
            @foreach ($personalProjects as $project)
                <div class="rounded bg-white shadow-lg hover:shadow-md transition duration-200">
                    <a href="{{ route('pages.personalshow', $project->slug) }}">
                        <img src="/{{ $project->cover_image }}" alt="{{ $project->name }} - Portfolio Projects" class="w-full h-48 object-cover rounded-t">
                    </a>
                    <a href="{{ route('pages.personalshow', $project->slug) }}" class="p-6 text-center text-xl block">{{ $project->name }}</a>
                </div>
            @endforeach
        </div>

        <a href="{{ route('pages.personalprojects') }}" class="justify-center mt-4 flex items-center space-x-2 uppercase transition duration-200 hover:text-primary-normal">
            <span>See all of them</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 16 16 12 12 8"></polyline><line x1="8" y1="12" x2="16" y2="12"></line></svg>
        </a>
    </div>

    <div class="container py-8 my-16">
        <h2 class="text-2xl text-primary-normal text-center mb-6">A little more about me</h2>

        @foreach ($pageContent->where('name', 'About Me') as $item)
            {!! $item->content !!}
        @endforeach
    </div>

    <x-contact></x-contact>
@endsection
