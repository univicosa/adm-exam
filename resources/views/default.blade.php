<!doctype html>
<!--[if IE 8]> <html lang="pt_BR" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="pt_BR" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>
        @yield('title')Avaliação Inicial
    </title>

    <!-- Load -->
    <script src="https://cdn.univicosa.com.br/plugins/metronic/4.7.5/theme/assets/global/plugins/pace/pace.min.js" type="text/javascript"></script>
    <link href="https://cdn.univicosa.com.br/plugins/metronic/4.7.5/theme/assets/global/plugins/pace/themes/pace-theme-flash.css" rel="stylesheet" type="text/css">

    <!-- Meta Head -->
    <meta name="description" content="@yield('description', '')">
    <meta name="robots" content="no-index, no-follow">
    <meta name="author" content="Univiçosa">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="@yield('theme-color', '')">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.univicosa.com.br/img/ico.png">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.univicosa.com.br/plugins/sweetalert2/sweetalert2.min.css">
    @stack('stylesheet')
</head>

<body>

@yield('content')

<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://cdn.univicosa.com.br/plugins/sweetalert2/sweetalert2.min.js"></script>

@stack('scripts')
</body>
</html>
