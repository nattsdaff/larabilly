<!DOCTYPE html>
<html lang="es" dir="ltr">
@include ('partials.head')
<body>
    @include ('partials.header')
    
    @yield('content')

    @include ('partials.footer')

    @include ('partials.scripts')
    @yield('extra-js')
</body>
</html>