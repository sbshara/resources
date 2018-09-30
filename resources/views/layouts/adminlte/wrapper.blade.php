<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('PHeader')
                <small>@yield('PHeaderDescription')</small>
            </h1>
        </section>
    @include('layouts.partials.breadCrumbs')
    <!-- Main content -->
    <section class="content">
        @yield('contents')
        <!--
        
            YOUR CONTENT COMES HERE
            START WITH DIV:ROW

        -->
        
    </section>
</div>
