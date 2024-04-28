
@include('layouts.header')
<body>
    <div id="app">
        <div id="wrapper">
            @include('layouts.sidebar')

            {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ $message }}
                </div>
            @endif --}}
            <div id="content-wrapper" class="d-flex flex-column">
                        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('layouts.nav')
                @yield('content')
                <!-- Footer -->
                           
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2024</span>
                    </div>
                </div>
            </footer>
        </div>

        <!-- End of Footer --> 
    </div>
</body>
@include('layouts.footer')
