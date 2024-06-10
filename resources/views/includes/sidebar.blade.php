<aside class="main-sidebar sidebar-light-navy border-right">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ url('/logo.png') }}" alt="Logo" class="brand-image" />
        <span class="brand-text text-poppins fw-medium">
            SANWA
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header font-weight-bold">OEE</li>
                <li class="nav-item">
                    <a href="/oee-standard" class="nav-link {{ Request::is('oee-standard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>OEE Standard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/oee-summary" class="nav-link {{ Request::is('oee-summary') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>OEE Summary</p>
                    </a>
                </li>
                @if (request()->session()->get('user')['role'] === 'MANAGER')
                    <li class="nav-header font-weight-bold">Setup</li>
                    <li class="nav-item">
                        <a href="/user" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Users</p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
