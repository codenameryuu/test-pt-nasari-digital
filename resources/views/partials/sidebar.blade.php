<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="{{ url('/dashboard') }}">
                <h3 class="text-center">
                    Nasari Digital
                </h3>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li class="{{ request()->is('menu-utama*') ? 'active' : '' }}">
                <a href="{{ url('menu-utama') }}">
                    <i class="ti ti-home me-2"></i>
                    Main Menu
                </a>
            </li>
        </ul>
    </div>
</nav>
