@extends('layouts.app', ['title' => 'My Portfolio'])

@section('content')
<div class="my-16 container px-8">
    <h1 class="text-5xl font-medium text-center text-primary-normal"> My Portfolio</h1>
    @foreach ($pageContent->where('name', 'Portfolio') as $item)
        {!! $item->content !!}
    @endforeach

    <div class="grid gap-6 grid-cols-1 lg:grid-cols-2 mt-6">
        @foreach ($projects as $project)
            <div class="rounded bg-white shadow-lg hover:shadow-md transition duration-200">
                <a href="{{ route('pages.portfolioshow', $project->slug) }}">
                    <img src="/{{ $project->cover_image }}" alt="{{ $project->name }} - Owen Prosser Portfolio Projects" class="w-full h-48 object-cover rounded-t">
                </a>
                <a href="{{ route('pages.portfolioshow', $project->slug) }}" class="p-6 text-center text-xl block">{{ $project->name }}</a>
            </div>
        @endforeach
    </div>
</div>

<x-contact></x-contact>
@endsection
