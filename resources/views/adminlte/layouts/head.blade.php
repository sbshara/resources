<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('contentTitle') | {{ config('app.name', 'Application Name') }}</title>
    
    @include('adminlte.layouts.parts.meta')
    @include('adminlte.layouts.parts.css')

</head>
<body 
    class="hold-transition 
    @auth
        {{ Auth::user()->settings() }}
        {{ Auth::user()->settings() }}
    @else
        skin-blue sidebar-mini
    @endauth

    ">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">{!! config('app.shortName') !!}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{{ config('app.name', 'SBSHARA') }}</span>
            </a>


