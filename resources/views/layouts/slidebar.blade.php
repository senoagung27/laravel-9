<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">HRIS APP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                {{-- <img class="d-inline-block" width="32px" height="30.61px" src="{{  }}" alt=""> --}}
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Master Data</li>
            <li class="nav-item">
                <a href="{{ route('user') }}" class="nav-link"><i
                        class="fas fa-database"></i><span>User</span></a>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route('stokff') }}" class="nav-link"><i
                        class="fas fa-database"></i><span>Stok FF</span></a>
            </li> --}}
        </ul>
    </aside>
</div>
