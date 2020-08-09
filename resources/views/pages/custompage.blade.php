@extends('layouts.app', ['title' => $page->page_title])

@section('content')
<div class="my-16 container px-8">
    <h1 class="text-5xl font-medium text-center text-primary-normal mb-8">{{ $page->page_title }}</h1>

    <div class="custom-page">
        {!! $page->content !!}
    </div>
</div>

@endsection
