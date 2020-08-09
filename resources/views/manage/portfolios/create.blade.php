@extends('layouts.manage', ['title' => 'Create Project'])

@section('content')
    <h1 class="text-4xl mb-6">Create Project</h1>

    <form action="{{ route('manage.portfolios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="relative mb-6">
            <label for="name" class="block uppercase text-primary-normal absolute bg-white p-1 px-3 ml-3 -mt-3">Name</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="off"
                class="block w-full rounded bg-white p-3 border border-primary-normal @error('name') border-red-500 @enderror"
            >
        </div>

        <div class="relative mb-6">
            <label for="slug" class="block uppercase text-primary-normal absolute bg-white p-1 px-3 ml-3 -mt-3">Slug</label>
            <input
                type="text"
                name="slug"
                id="slug"
                value="{{ old('slug') }}"
                required
                autocomplete="off"
                class="block w-full rounded bg-white p-3 border border-primary-normal @error('slug') border-red-500 @enderror"
            >
        </div>

        <div class="relative mb-6">
            <label for="url" class="block uppercase text-primary-normal absolute bg-white p-1 px-3 ml-3 -mt-3">URL</label>
            <input
                type="text"
                name="url"
                id="url"
                value="{{ old('url') }}"
                required
                autocomplete="off"
                class="block w-full rounded bg-white p-3 border border-primary-normal @error('url') border-red-500 @enderror"
            >
        </div>

        <div class="relative mb-6">
            <label for="cover_image" class="block uppercase text-primary-normal absolute bg-white p-1 px-3 ml-3 -mt-3">Cover Image</label>
            <input
                type="file"
                name="cover_image"
                id="cover_image"
                value="{{ old('cover_image') }}"
                required
                autocomplete="off"
                class="block w-full rounded bg-white p-3 border border-primary-normal @error('cover_image') border-red-500 @enderror"
            >
        </div>

        <div class="relative mb-6">
            <label for="preview" class="block uppercase text-primary-normal absolute bg-white p-1 px-3 ml-3 -mt-3">Preview Image</label>
            <input
                type="file"
                name="preview"
                id="preview"
                value="{{ old('preview') }}"
                required
                autocomplete="off"
                class="block w-full rounded bg-white p-3 border border-primary-normal @error('preview') border-red-500 @enderror"
            >
        </div>

        <div class="relative mb-6">
            <label for="logo" class="block uppercase text-primary-normal absolute bg-white p-1 px-3 ml-3 -mt-3">Logo Image</label>
            <input
                type="file"
                name="logo"
                id="logo"
                value="{{ old('logo') }}"
                required
                autocomplete="off"
                class="block w-full rounded bg-white p-3 border border-primary-normal @error('logo') border-red-500 @enderror"
            >
        </div>

        <div class="relative mb-6">
            <label for="content" class="block uppercase text-primary-normal bg-white p-1 px-3 ml-3 mt-3 mb-2">Content</label>
            <textarea
                name="content"
                id="content"
                class="block w-full rounded bg-white p-3 border border-primary-normal h-64"
            >{{ old('content') }}</textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="py-3 text-lg px-6 bg-primary-normal text-white inline-block font-medium rounded transition duration-200 hover:bg-primary-light">Create</button>
        </div>
    </form>
@endsection

@section('head')
<script src="https://cdn.tiny.cloud/1/99jgk60eqqggwxynbc40s72k2hswviju2teos863kkn2tkig/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

@section('body')
<script>
    tinymce.init({
      selector: 'textarea',
      height: '300',
      statusbar: false,
      plugins: 'code link lists',
      toolbar: 'undo redo | bold italic underline link | numlist bullist | alignleft aligncenter alignright alignjustify | code '
    });
</script>
@endsection
