<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Thalles Rangel Lopes">
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <title>Farmacinha Popular</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel='icon' href="{{ asset('favicon.png') }}" type='image/x-icon' sizes="16x16" />
</head>
<body>
    <div class="wrapper">

        <nav id="sidebar">
            @include('includes.sidebar')
        </nav>
        
        <div id="content">
            <div class="navbar-div d-flex justify-content-end">
                @include('includes.navbar')
            </div>
            @yield('content')
        </div>
    
    </div>      

    <script>
        feather.replace()
    </script> 
</body>
</html>