@extends('layouts.app', ['title' => 'Services'])

@section('content')
<div class="my-16 container px-8">
    <h1 class="text-5xl font-medium text-center text-primary-normal">Services</h1>
    @foreach ($pageContent->where('name', 'Services') as $item)
        {!! $item->content !!}
    @endforeach

    @foreach ($services as $service)
        <div class="flex flex-col-reverse {{ $loop->even ? 'lg:flex-row' : 'lg:flex-row-reverse' }} my-16 lg:space-x-6">
            <div class="text-center flex-1">
                <h2 class="text-2xl text-primary-normal text-center mb-3">{{ $service->title }}</h2>
                {!! $service->content !!}
            </div>
            <div>
                {!! $service->image !!}
            </div>
        </div>
    @endforeach
</div>

<x-contact></x-contact>
@endsection
