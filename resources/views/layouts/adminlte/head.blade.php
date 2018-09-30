<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    @include('layouts.partials.css')
    @include('layouts.partials.meta')
    
</head>
<body class="hold-transition @if(Auth::user()->settings){{ Auth::user()->settings()->skin . ' ' . Auth::user()->settings()->sidebar  }}@else skin-blue sidebar-mini @endif ">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>