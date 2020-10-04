{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title') 
    </title>
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
</head>
<body>
    @include('layouts.inc.navbar')
    
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('frontend/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

    @yield('scripts')
</body>
</html>
 --}}


 <!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
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
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('../vendor/assets/img/profile_city.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="title">Your Story Starts With Us.</h1>
              <h4>Every landing page needs a small description after the big bold title, that&apos;s why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
              <br>
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                <i class="fa fa-play"></i> Watch video
              </a>
            </div>
          </div>
        </div>
      </div>
      @include('frontend.servicemodal')
      <div class="main main-raised">
        <div class="container">
            @yield('content')
        </div>
      </div>
    
    
      <footer class="footer footer-default">
        <div class="container">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com/">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/blog">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.theservicekart.com/" target="_blank">The Servicekart</a> for a better web.
          </div>
        </div>
      </footer>
    
      
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
      <!-- The core Firebase JS SDK is always required and must be listed first -->
      <script src="/__/firebase/7.22.0/firebase-app.js"></script>

      <!-- TODO: Add SDKs for Firebase products that you want to use
          https://firebase.google.com/docs/web/setup#available-libraries -->
      <script src="/__/firebase/7.22.0/firebase-analytics.js"></script>

      <!-- Initialize Firebase -->
      <script src="/__/firebase/init.js"></script>
      @yield('scripts')
    </body>
    
    </html>