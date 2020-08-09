@extends('layouts.app', ['title' => $project->name . ' - Portfolio'])

@section('content')
<div class="py-10 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset($project->cover_image) }}')">
    <div class="container px-8 flex justify-center">
        <img src="/{{ $project->logo }}" alt="Logo Image for {{ $project->name }} - Owen Prosser Portfolio Projects" class="h-64">
    </div>
</div>

<div class="my-16 container px-8">
    <h1 class="text-5xl font-medium text-center text-primary-normal mb-12">{{ $project->name }}</h1>
    <div class="project-content">
        {!! $project->content !!}
    </div>

    <img src="/{{ $project->preview }}" alt="Preview Image for {{ $project->name }} - Owen Prosser Portfolio Projects" class="w-full mt-12">

    <div class="flex justify-center">
        <a href="{{ $project->url }}" class="mt-12 inline-block rounded bg-primary-normal text-white font-medium py-5 px-8 transition duration-200 hover:bg-primary-light text-lg" target="_blank">View the website live</a>
    </div>
</div>

<x-contact></x-contact>
@endsection
