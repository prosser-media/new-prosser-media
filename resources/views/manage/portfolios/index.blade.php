@extends('layouts.manage', ['title' => 'Portfolio Projects'])

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-4xl">Portfolio Projects</h1>
        <a href="{{ route('manage.portfolios.create') }}" class="rounded inline-block bg-primary-normal py-3 px-4 text-white hover:bg-primary-light transition duration-200">New Project</a>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left pr-4 font-bold py-2">Name</th>
                <th class="text-left px-4 font-bold py-2">Url</th>
                <th class="text-left pl-4 font-bold py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td class="text-left pr-4 py-2">
                       <a href="#" class="underline">{{ $project->name }}</a>
                    </td>
                    <td class="text-left px-4 py-2">
                        <a href="{{ $project->url }}" class="underline">{{ $project->url }}</a>
                    </td>
                    <td class="text-left px-4 py-2"><a href="{{ route('manage.portfolios.edit', $project->id) }}" class="rounded bg-primary-normal py-3 px-4 inline-block text-white hover:bg-primary-light transition duation-200">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
