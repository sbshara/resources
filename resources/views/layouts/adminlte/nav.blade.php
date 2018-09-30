<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
            <!-- Messages: style can be found in dropdown.less-->
            @include('layouts.partials.messages')
            
            <!-- Notifications: style can be found in dropdown.less -->
            @include('layouts.partials.notifications')
            
            <!-- Tasks: style can be found in dropdown.less -->
            @include('layouts.partials.tasks')
            
            <!-- User Account: style can be found in dropdown.less -->
            @include('layouts.partials.miniProfile')
            
            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="#" data-toggle="control-sidebar">
                    <i class="fa fa-gears"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
</header>