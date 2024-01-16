@php
    $breadcrumbs = [
        [
            'text' => 'home',
            'link' => '/',
        ]
    ];
@endphp

@extends('layouts.app')

@section('breadcrumb')
    <x-navigation :breadcrumbs="$breadcrumbs">
    </x-navigation>
@stop

@section('content')
    <h1>home</h1>
@endsection
