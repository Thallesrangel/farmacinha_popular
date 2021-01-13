<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Thalles Rangel Lopes">
        <meta name="description" content="PetVacina">
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <title>Farmacinha Popular</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel='icon' href="{{ asset('favicon.png') }}" type='image/x-icon' sizes="16x16" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#f8b195">
        <meta name="theme-color" content="#f8b195">

</head>

<body>
    @include('includes.navbar-home')
    @yield('content')
    @include('includes.footer-home')

    <script type="text/javascript">
        /* Responsive - Define como ativo a classe toggleMenu */
        function menuToggle(){
            const toggleMenu = document.querySelector('.toggleMenu');
            const navigation = document.querySelector('.navigation');
            toggleMenu.classList.toggle('active')
            navigation.classList.toggle('active')
        }
    </script>
</body>
</html>