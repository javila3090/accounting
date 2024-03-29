<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>IContable</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Empire, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Srthemesvilla" />
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shreerang-material.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/uikit.css')}}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{asset('assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/flot/flot.css')}}">
    <style type="text/css">
        .fixed-button{
            display: none;
        }
    </style>
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            @include('layouts.sidebar')
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                @include('partials.header')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    @section('content')
                    @show
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                   @include('partials.footer')
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Core scripts -->
    <script src="{{asset('assets/js/pace.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/sidenav.js')}}"></script>
    <script src="{{asset('assets/js/layout-helpers.js')}}"></script>
    <script src="{{asset('assets/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{asset('assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/libs/eve/eve.js')}}"></script>
    <script src="{{asset('assets/libs/flot/flot.js')}}"></script>
    <script src="{{asset('assets/libs/flot/curvedLines.js')}}"></script>
    <script src="{{asset('assets/libs/chart-am4/core.js')}}"></script>
    <script src="{{asset('assets/libs/chart-am4/charts.js')}}"></script>
    <script src="{{asset('assets/libs/chart-am4/animated.js')}}"></script>

    <!-- Demo -->
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <script src="{{asset('assets/js/analytics.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboards_index.js')}}"></script>
</body>

</html>
