<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title . " - Book Store" or "Book Store" }}</title>
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('header.style')
</head>
<body>
    @include("layouts.partials._header")

    @yield('content')

    @include("layouts.partials._footer")

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });

        $('.dropdown-trigger').dropdown({
            constrainWidth: false,
            hover: true,
            inDuration: 300,
            outDuration: 200,
            coverTrigger: false
        });

        $(document).ready(function(){
            $('.tooltipped').tooltip({
                exitDelay: 150
            });
        });

        $(document).ready(function(){
            $('.materialboxed').materialbox();
        });

        $(document).ready(function(){
            $('.sidenav').sidenav();
        });

        $(document).ready(function(){
            $('.collapsible').collapsible();
        });

        $(document).ready(function(){
            $('.datepicker').datepicker();
        });

        $(document).ready(function() {
            $('input#input_text, textarea#textarea1').characterCounter();
        });
    </script>

    @yield('scripts')
</body>
</html>
