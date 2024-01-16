@php
    $breadcrumbs = [
        [
            'text' => 'home',
            'link' => '/',
        ],
        [
            'text' => 'posts',
            'link' => null,
        ],
    ];
@endphp

@extends('layouts.app')

@section('breadcrumb')
    <x-navigation :breadcrumbs="$breadcrumbs">
    </x-navigation>
@stop

@section('content')
    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold">Our Blog</h2>
        <p class="font-light text-gray-500 sm:text-xl">We use an agile approach to test assumptions and connect with the
            needs of your audience early and often.</p>
    </div>
    <div class="grid gap-8 lg:grid-cols-3">
        @foreach ($posts as $post)
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md flex flex-col justify-between">
                <div>
                    <div class="flex justify-end items-center mb-5 text-gray-500">
                        <span class="text-sm">
                            <x-time-since :date="$post->created_at">
                            </x-time-since>
                        </span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                        <a href="#">{{ $post->title }}</a>
                    </h2>
                    <p class="mb-5 font-light text-gray-500">
                        {{ $post->content }}
                    </p>
                </div>
                <div class="flex justify-end items-center">
                    <a href="#" class="inline-flex items-center font-medium text-primary-600 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
        @endforeach
    </div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const timeSinceElements = document.getElementsByClassName("time-since");
        const aDay = 24 * 60 * 60 * 1000;

        function timeSince(date) {
            var seconds = Math.floor((new Date() - date) / 1000);
            var interval = seconds / 31536000;
            if (interval > 1) {
                return Math.floor(interval) + " years";
            }
            interval = seconds / 2592000;
            if (interval > 1) {
                return Math.floor(interval) + " months";
            }
            interval = seconds / 86400;
            if (interval > 1) {
                return Math.floor(interval) + " days";
            }
            interval = seconds / 3600;
            if (interval > 1) {
                return Math.floor(interval) + " hours";
            }
            interval = seconds / 60;
            if (interval > 1) {
                return Math.floor(interval) + " minutes";
            }
            return Math.floor(seconds) + " seconds";
        };

        for (let i = 0; i < timeSinceElements.length; i++) {
            const dateString = timeSinceElements[i].innerText;
            timeSinceElements[i].innerText = timeSince(new Date(dateString) - aDay);
            console.log(timeSince(new Date(dateString) - aDay));
        }
    });
</script>
