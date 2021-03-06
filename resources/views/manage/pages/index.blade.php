@extends('layouts.manage', ['title' => 'Pages'])

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-4xl">Pages</h1>
        <a href="{{ route('manage.pages.create') }}" class="rounded inline-block bg-primary-normal py-3 px-4 text-white hover:bg-primary-light transition duration-200">New Page</a>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left pr-4 font-bold py-2">Page Title</th>
                <th class="text-left px-4 font-bold py-2">Slug</th>
                <th class="text-left pl-4 font-bold py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td class="text-left pr-4 py-2">
                        <a href="{{ route('pages.custom', $page->slug) }}" class="underline">{{ $page->page_title }}</a>
                    </td>
                    <td class="text-left px-4 py-2">{{ $page->slug }}</td>
                    <td class="text-left px-4 py-2"><a href="{{ route('manage.pages.edit', $page->id) }}" class="rounded bg-primary-normal py-3 px-4 inline-block text-white hover:bg-primary-light transition duation-200">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
