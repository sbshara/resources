<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{ Auth::user()->picture }}" class="user-image" alt="User Image">
        <span class="hidden-xs">{{ Auth::user()->fullName() }}</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="{{ Auth::user()->picture }}" class="img-circle" alt="User Image">
            <p>
                {{ Auth::user()->fullName() }} - {{ Auth::user()->jobTitle() }}
                <small>Member since: {{ Auth::user()->joined() }}</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <div class="row">
                <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                </div>
            </div>
            <!-- /.row -->
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    >{{ __('Logout') }}
                </a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
            </form>
        </li>
    </ul>
</li>