<!-- Sidebar -->
<ul class="sidebar navbar-nav">
            <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('form')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/form') }}">
                <i class="fas fa-scroll"></i>
                <span>Happiness Indicator</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('provinsi')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/provinsi') }}">
                <i class="fa fa-map-marked-alt"></i>
                <span>Province Data</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('kab_kota')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/kab_kota') }}">
                <i class="fa fa-map-marked"></i>
                <span>Regency or City Data</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('data')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/data') }}">
                <i class="fas fa-book-open"></i>
                <span>Survey Data</span>
                </a>
            </li>
</ul>
