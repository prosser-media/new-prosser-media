@extends('layouts.app', ['title' => 'Contact'])

@section('content')
<div class="my-16 container px-8">
    <h1 class="text-5xl font-medium text-center text-primary-normal">Contact</h1>
    <p class="leading-relaxed mt-6 mb-12 text-center text-lg">Fill in the contact form below or you can <a href="mailto:contact@prossermedia.co.uk" class="text-primary-normal font-semibold hover:text-primary-light">email me here</a>.</p>

    @if (session('success'))
        <div class="mb-12 rounded border border-primary-normal p-4">
            <p class="font-semibold text-xl text-primary-normal text-center">Thank you!</p>
            <p class="text-center mt-2">Thank you for your message. I will reply to you as soon as possible.</p>
        </div>
    @endif

    <form action="{{ route('contact') }}" method="POST">
        @csrf

        <div class="relative mb-6">
            <label for="name" class="block uppercase text-primary-normal absolute bg-white p-1 px-3 ml-3 -mt-3">Name</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name') }}"
                required
                autocomplete="name"
                autofocus
                class="block w-full rounded bg-white p-3 border border-primary-normal"
            >
        </div>

        <div class="relative mb-6">
            <label for="email" class="block uppercase text-primary-normal absolute bg-white p-1 px-3 ml-3 -mt-3">Email</label>
            <input
                type="text"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                class="block w-full rounded bg-white p-3 border border-primary-normal"
            >
        </div>

        <div class="relative mb-6">
            <label for="message" class="block uppercase text-primary-normal absolute bg-white p-1 px-3 ml-3 -mt-3">Message</label>
            <textarea
                name="message"
                id="message"
                required
                class="block w-full rounded bg-white p-3 border border-primary-normal h-48"
            >{{ old('message') }}</textarea>
        </div>

        <div class="flex justify-end">
            <button {{ session('success') ? 'disabled' : '' }} class="py-3 text-lg px-6 bg-primary-normal text-white inline-block font-medium rounded transition duration-200 hover:bg-primary-light disabled:cursor-not-allowed disabled:bg-opacity-50">Send</button>
        </div>
    </form>
</div>

@endsection
