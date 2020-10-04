<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../vendor/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../vendor/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title') 
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../vendor/assets/css/material-kit.min.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    </head>

    <body class="landing-page sidebar-collapse">
        @include('layouts.inc.navbar')
        <div class="page-header header-filter" style="background-image: url('../vendor/assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
            <div class="container">
                @yield('content')
            </div>
        
        </div>
        <!--   Core JS Files   -->
        <script src="../vendor/assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="../vendor/assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="../vendor/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
        <script src="../vendor/assets/js/plugins/moment.min.js"></script>
        <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        <script src="../vendor/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="../vendor/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        {{-- <script src="../vendor/js/plugins/form-validation.js" type="text/javascript"></script> --}}
        <!--  Google Maps Plugin    -->
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        <script src="../vendor/assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
        @yield('scripts')
    </body>

</html>
