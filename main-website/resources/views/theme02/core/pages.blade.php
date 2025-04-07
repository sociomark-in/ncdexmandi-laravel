{{-- Core Template for Basic Pages --}}
<!DOCTYPE html>
<html lang="en">

<head>
    @include('theme02.components.head')
    <title>{{ $page['title'] }}</title>
</head>

<body>
    @include('theme02.components.navbar')
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @include('theme02.components.footer')
    @include('theme02.components.javascript')
    @yield('javascript')
</body>

</html>
