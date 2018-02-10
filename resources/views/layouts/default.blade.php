<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('includes.head')
<body>

    <div class="container">
        <div class="row">
            @include('includes.mainMenu')
        </div>
        <main role="main">
        <div class="row">
            <!-- Displays main content -->
            @yield('content')
        </div>
        </main>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    </div>
    @include('includes.jsfooter')
</body>
</html>