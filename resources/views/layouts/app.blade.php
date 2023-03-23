<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">



    <!-- CORE CSS FRAMEWORK - START -->
    <link
        href="../../external.html?link=https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/modernmag-assets.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">


</head>

<body>

    <!-- Container -->
    <div id="container">


        @include('layouts.inc.frontend-navbar')

        @yield('content')



    </div>





    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="title-section">
                        <h1>Login</h1>
                    </div>
                    <form id="login-form">
                        <p>Welcome! Login to your account.</p>
                        <label for="username">Username or Email Address*</label>
                        <input id="username" name="username" type="text">
                        <label for="password">Password*</label>
                        <input id="password" name="password" type="password">
                        <button type="submit" id="submit-register">
                            <i class="fa fa-paper-plane"></i> Login
                        </button>
                    </form>
                    <p>Don't have account? <a href="register.html">Register Here</a></p>

                </div>
            </div>
        </div>
    </div>
    <!-- End Login Modal -->

    <script src="{{ asset('frontend/js/modernmag-plugins.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script
        src="../../external.html?link=http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en">
    </script>
    <script src="{{ asset('frontend/js/gmap3.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>

</html>
