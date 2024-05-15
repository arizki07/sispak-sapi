@include('layouts.head')

<body>
    <script src="assets/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- Navbar -->
        @include('layouts.header')
        <div class="page-wrapper">
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.script')
</body>

</html>
