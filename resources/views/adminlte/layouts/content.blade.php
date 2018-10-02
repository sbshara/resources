<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @yield('contentTitle')
            <small>@yield('contentTitleDesc')</small>
        </h1>
        @include('adminlte.layouts.parts.breadcrumbs')
    </section>
    <!-- Main content -->
    <section class="content">
        @include('adminlte.layouts.parts.topboxes')
        
        <!-- Main row -->
        <div class="row">
            @yield('contents')
        </div>
        <!-- /.row (main row) -->
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->