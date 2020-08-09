@extends('layouts.manage', ['title' => 'Services'])

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-4xl">Services</h1>
        <a href="{{ route('manage.services.create') }}" class="rounded inline-block bg-primary-normal py-3 px-4 text-white hover:bg-primary-light transition duration-200">New Service</a>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left pr-4 font-bold py-2">Title</th>
                <th class="text-left px-4 font-bold py-2">Image</th>
                <th class="text-left px-4 font-bold py-2">Content</th>
                <th class="text-left pl-4 font-bold py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td class="text-left pr-4 py-2">
                        {{ $service->title }}
                    </td>
                    <td class="text-left px-4 py-2">{!! $service->image !!}</td>
                    <td class="text-left px-4 py-2">{!! $service->content !!}</td>
                    <td class="text-left px-4 py-2"><a href="{{ route('manage.services.edit', $service->id) }}" class="rounded bg-primary-normal py-3 px-4 inline-block text-white hover:bg-primary-light transition duation-200">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
