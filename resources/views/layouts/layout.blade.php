<!DOCTYPE html>
<html lang="en">
    <head>
        <title>form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="preconnect" href="https://fonts.gstatic.com">

        {{-- <link rel="stylesheet" type="text/css" href="resources/form.css"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('/resources/css/form.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('/resources/css/bootstrap-datepicker.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/resources/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/resources/fontawesome/css/fontawesome.min.css') }}">
        <link href="{{ asset('/resources/css/bootstrap.min.css') }}" rel="stylesheet" >
        <!-- jQuery library -->
        <script src="{{ asset('/resources/js/jquery.min.js') }}"></script>
        <!-- Latest compiled JavaScript -->
        <script src="{{ asset('/resources/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/resources/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('/resources/js/main.js') }}"></script>
    </head>
    <body>
        @yield('content')
    </body>
</html>
