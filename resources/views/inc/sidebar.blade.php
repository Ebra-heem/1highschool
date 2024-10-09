<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">IAIT-School</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">HOME</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ Route::is('schools.*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Schools</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('schools.create') }}">Add New School</a></li>
                    <li><a class="nav-link" href="{{ route('schools.index') }}">View All School</a></li>

                </ul>
            </li>
            <li class="menu-header">Students</li>
            <li class="dropdown {{ Route::is('students.*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Students</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('students.create') }}">Add New Student</a></li>
                    <li><a class="nav-link" href="{{ route('students.index') }}">Admission Pending</a></li>
                    <li><a class="nav-link" href="{{ route('students.approve_list') }}">Admission Approved</a></li>

                </ul>
            </li>

            <li class="menu-header">User Management</li>
            <li
                class="dropdown {{ Route::is('users.*') || Route::is('roles.*') || Route::is('permissions.*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i>
                    <span>User</span></a>
                <ul class="dropdown-menu">
                    @can('create-user')
                        <li class="{{ Route::is('users.*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('users.index') }}">Users List</a></li>
                    @endcan
                    @can('create-role')
                        <li class="{{ Route::is('roles.*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('roles.index') }}">Roles List</a></li>
                    @endcan
                    @can('create-permission')
                        <li class="{{ Route::is('permissions.*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('permissions.index') }}">Permissions List</a></li>
                    @endcan
                </ul>
            </li>
    </aside>
</div>
