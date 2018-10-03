<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
            @include('LaraAdminLTE.layouts.parts.messages')

            @include('LaraAdminLTE.layouts.parts.notifications')

            @include('LaraAdminLTE.layouts.parts.tasks')

            @include('LaraAdminLTE.layouts.parts.userAccount')

            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
    </div>
</nav>
</header>