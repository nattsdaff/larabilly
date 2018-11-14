<!DOCTYPE html>
<html lang="es" dir="ltr">
@include ('parts/part-head')
<body>
    @include ('parts/part-header')
    
    @yield('content')

    @include ('parts/part-footer')

    @include ('parts/part-scripts')
</body>
</html>