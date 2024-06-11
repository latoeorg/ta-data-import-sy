<aside class="main-sidebar sidebar-dark-light border-right bg-primary">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ url('/logo.png') }}" alt="Logo" class="brand-image" />
        <span class="brand-text text-poppins fw-medium">
            SANWA BATAM
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header font-weight-bold">Menu</li>
                <li class="nav-item">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header font-weight-bold">OEE</li>
                <li class="nav-item">
                    <a href="/oee" class="nav-link {{ Request::is('oee') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>OEE</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/oee-summary" class="nav-link {{ Request::is('oee-summary') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>OEE Summary</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/oee-standard" class="nav-link {{ Request::is('oee-standard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>OEE Standard</p>
                    </a>
                </li>
                <li class="nav-header font-weight-bold">Report</li>
                <li class="nav-item">
                    <a href="/report-oee" class="nav-link {{ Request::is('report-oee') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Report OEE</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/report-downtime" class="nav-link {{ Request::is('report-downtime') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Report Downtime</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/report-reject" class="nav-link {{ Request::is('report-reject') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Report Reject</p>
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
