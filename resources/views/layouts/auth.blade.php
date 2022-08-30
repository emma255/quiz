@include('components.head')

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{ asset('img/netphone.jpg') }}" width="50%" style="opacity: 0.4">
        </div>
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-body login-card-body">
                @yield('content')
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- Mainly scripts -->
    @include('components.scripts')
</body>

</html>