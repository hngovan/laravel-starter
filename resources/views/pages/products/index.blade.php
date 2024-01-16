@php
    $breadcrumbs = [
        [
            'text' => 'home',
            'link' => '/',
        ],
        [
            'text' => 'product',
            'link' => null,
        ],
    ];
@endphp

@extends('layouts.app')

@section('breadcrumb')
    <x-navigation :breadcrumbs="$breadcrumbs">
        @slot('actionRight')
            <div class="">
                <button class="button-base bg-hight-light-4" id="btnNavigation">action right</button>
            </div>
        @endslot
    </x-navigation>
@stop

@section('content')
    <h1>Products</h1>
    @foreach ($my_phone as $item)
        <h3>
            {{ $item }}
        </h3>
    @endforeach
@endsection
