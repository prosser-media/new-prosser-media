@extends('layouts.manage', ['title' => 'Create Page'])

@section('content')
    <h1 class="text-4xl mb-6">Create Page</h1>

    <form action="{{ route('manage.pages.store') }}" method="POST">
        @csrf

        <div class="relative mb-6">
            <label for="page_title" class="block uppercase text-primary-normal absolute bg-white p-1 px-3 ml-3 -mt-3">Page Title</label>
            <input
                type="text"
                name="page_title"
                id="page_title"
                value="{{ old('page_title') }}"
                required
                autocomplete="off"
                class="block w-full rounded bg-white p-3 border border-primary-normal"
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
                class="block w-full rounded bg-white p-3 border border-primary-normal"
                placeholder="page-title"
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
