<li class="nav-item">
    <a class="nav-link {{ Request::is(['home','/'])?'active':'' }}" href="{{ route('home') }}">
        <i class="nav-icon feather feather-home" style="color: rgba(255, 150, 0, 1)"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item has-treeview{{ Request::is('settings/*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('settings/*')?' active':'' }}">
        <i class="nav-icon feather feather-settings" style="color: rgba(255, 150, 0, 1)"></i>
        <p>
            Settings
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @can('user_list')
        <li class="nav-item">
            <a class="nav-link {{ Request::is('settings/user*')?'active':'' }}" href="{{ route('users') }}">
                <i class="nav-icon feather feather-users" style="color: teal"></i>
                <p>Users</p>
            </a>
        </li>
        @endcan
    </ul>
</li>
