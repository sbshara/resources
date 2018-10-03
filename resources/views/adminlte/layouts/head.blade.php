<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('contentTitle', config('adminLTE.name', 'NOT_DEFINED')) | {{ config('app.name', 'NOT_DEFINED') }}</title>
    
    @include('adminlte.layouts.parts.meta')
    @include('adminlte.layouts.parts.css')

</head>
<body 
    class="
    @auth
    {{ Auth::user()->settings() }}
    @else
    {{ config('adminLTE.bodyTags','skin-blue sidebar-mini') }}
    @endauth
    ">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">{!! config('adminLTE.shortName') !!}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{!! config('adminLTE.name') !!}</span>
            </a>


