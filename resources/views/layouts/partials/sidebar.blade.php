<div class="sidebar">
    <!-- Sidebar Menu -->

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->

            <li class="nav-header">MENU</li>

            <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            @can('master_access')
                <li
                    class="nav-item {{ Request::is('instansi') || Request::is('kecamatan') || Request::is('desa') || Request::is('kecamatan') || Request::is('binaan') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::is('instansi') || Request::is('kecamatan') || Request::is('desa') || Request::is('kecamatan') || Request::is('binaan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Master Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('instansi.index') }}"
                                class="nav-link {{ Request::is('instansi') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Instansi</p>
                            </a>
                        </li>

                        @can('kecamatan_access')
                            <li class="nav-item">
                                <a href="{{ route('kecamatan.index') }}"
                                    class="nav-link {{ Request::is('kecamatan') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kecamatan</p>
                                </a>
                            </li>
                        @endcan

                        <li class="nav-item">
                            <a href="{{ route('desa.index') }}" class="nav-link {{ Request::is('desa') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Desa</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('binaan.index') }}"
                                class="nav-link {{ Request::is('binaan') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Binaan</p>
                            </a>
                        </li>

                    </ul>
                </li>
            @endcan

            <li
                class="nav-item {{ Request::is('donatur') || Request::is('distribusi') ? 'menu-is-opening menu-open' : '' }}">
                <a href="#"
                    class="nav-link {{ Request::is('donatur') || Request::is('distribusi') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-burn"></i>
                    <p>
                        GASPOL
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('donatur.index') }}"
                            class="nav-link {{ Request::is('donatur') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Donatur</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('distribusi.index') }}"
                            class="nav-link {{ Request::is('distribusi') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Distribusi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Desa Binaan</p>
                        </a>
                    </li>
                </ul>
            </li>

            @can('management_access')
                <li
                    class="nav-item {{ Request::is('permission') || Request::is('role') || Request::is('typeuser') || Request::is('user') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::is('role') || Request::is('permission') || Request::is('typeuser') || Request::is('user') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Management Access
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('permission.index') }}"
                                class="nav-link {{ Request::is('permission') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Permission</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('role.index') }}"
                                class="nav-link {{ Request::is('role') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('typeuser.index') }}"
                                class="nav-link {{ Request::is('typeuser') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Type User</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('user.index') }}"
                                class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>

                    </ul>
                </li>
            @endcan
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
