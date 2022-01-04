<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
            </div> --}}
            <div class="info">
                <a href="#" class="d-block">Nishat Abedin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search" />
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Writer
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.writer') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Writer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.all_writer') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Writer</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.all_category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.post') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Post Blog</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.all_post') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All blogs</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>