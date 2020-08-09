@extends('layouts.manage', ['title' => 'Page Content'])

@section('content')
    <h1 class="text-4xl">Page Content</h1>

    <table class="table-auto w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left pr-4 font-bold py-2">Name</th>
                <th class="text-left px-4 font-bold py-2">Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pageContent as $item)
                <tr>
                    <td class="text-left pr-4 py-2">
                        {{ $item->name }}
                    </td>
                    <td class="text-left px-4 py-2">{!! $item->content !!}</td>
                    <td class="text-left px-4 py-2"><a href="{{ route('manage.pagecontent.edit', $item->id) }}" class="rounded bg-primary-normal py-3 px-4 inline-block text-white hover:bg-primary-light transition duation-200">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
