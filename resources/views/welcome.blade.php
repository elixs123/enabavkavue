<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ENABAVKA</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <!-- Bootstrap is included in its original form, unaltered -->
         <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="{{asset('css/plugins.css')}}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="{{asset('css/themes.css')}}">
        <script src="js/vendor/modernizr.min.js"></script>
        @vite(['resources/js/app.js'])
    </head>
    <body>
    <div id="page-wrapper">
        <div id="app">
            <router-view></router-view>
        </div>
        </div>
        <!-- END Page Wrapper -->
        <script src="{{asset('js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
