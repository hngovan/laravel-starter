@php
    $breadcrumbs = [
        [
            'text' => 'home',
            'link' => '/',
        ],
        [
            'text' => 'posts',
            'link' => '/posts',
        ],
        [
            'text' => 'create',
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
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold">Create</h2>
    </div>
@endsection
