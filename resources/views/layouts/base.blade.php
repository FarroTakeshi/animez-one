<!DOCTYPE html>
<html class=" js no-touch cssanimations" style="" lang="en">
  <head>

    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">

    <title>ANIMEZ-ONE | Dashboard</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/metisMenu/dist/metisMenu.min.css">
    <link rel="stylesheet" href="css/Waves/dist/waves.min.css">
    <link rel="stylesheet" href="css/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="css/selects/cs-select.css">
    <link rel="stylesheet" href="css/selects/cs-skin-elastic.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  </head>
  <body style="overflow: hidden;">
    <div id="main-wrapper" class="main-wrapper">
      @include('layouts.head')
    </div>
    <!--Content-->
    <div id="content" class="content container-fluid"">
      <div class="row">
        <div class="col-sm-12">
          <div class="content-box">
            @yield('content')
          </div>
        </div>
      </div>
    </div>

    <!--Scripts-->
    <script src="{{ asset('js/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/menu/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu/dist/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/Waves/dist/waves.min.js') }}"></script>
    <script src="{{ asset('js/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js') }}"></script>

    <!--Menu-->
    <script src="{{ asset('js/menu/classie.js') }}"></script>
    <script src="{{ asset('js/menu/gnmenu.js') }}"></script>

    <!--Selects-->
    <script src="{{ asset('js/selects/selectFx.js') }}"></script>

    <!--Notification-->
    <script src="{{ asset('js/notifications/notificationFx.js') }}"></script>

    </body>
</html>
