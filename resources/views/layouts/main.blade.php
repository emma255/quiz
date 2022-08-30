@include('components.head')

<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed {{ auth()->user()->theme }}-mode"
    style="height: auto;">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('img/logo.png') }}" alt="UNTOLD" height="60" width="60">
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-warning navbar-{{ auth()->user()->theme }}">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('chats') }}" class="nav-link">Chats</a>
                </li> --}}
            </ul>

            <!-- SEARCH FORM -->
            {{-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> --}}
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">11</span>
                    </a>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <div class="row">
                            <button class="btn nav-link">{{ __('Logout') }}</button>
                        </div>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4 sidebar-no-expand">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link text-center">
                {{-- <img src="{{ asset('img/logo.png') }}" alt="Logo" class="brand-image elevation-2 img-circle"
                    style="opacity: .8"> --}}
                <span class="brand-text font-weight-light" style="letter-spacing: 20px;">UNTOLD</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        @if (auth()->user()->passport)
                        <img src="{{ asset('storage/' . auth()->user()->passport) }}" class="img-circle elevation-2"
                            alt="User Image">
                        @else
                        <img src="{{ asset('img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
                        @endif
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-child-indent"
                        data-widget="treeview" role="menu" data-accordion="false">
                        @include('components.sidebar')
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 617px;">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid pt-2">
                    @yield('contents')
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark" style="top: 60px;">
            <!-- Control sidebar content goes here -->
            {{--
            <livewire:chattings /> --}}
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>© {{ date('Y') }} <a href="https://www.pa.emma255.gq/" target="_blank">Emma255</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>
        <div id="sidebar-overlay"></div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('components.scripts')
    @yield('scripts')
</body>

</html>
