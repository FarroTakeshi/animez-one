<!DOCTYPE html>
<html class=" js no-touch cssanimations" style="" lang="en">
  <head>

    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">

    <title>RENAISSANCE | Dashboard</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/metisMenu/dist/metisMenu.min.css">
    <link rel="stylesheet" href="css/Waves/dist/waves.min.css">
    <link rel="stylesheet" href="css/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="js/selects/cs-select.css">
    <link rel="stylesheet" href="js/selects/cs-skin-elastic.css">

    <link rel="stylesheet" href="css/c3/c3.min.css">
    <link rel="stylesheet" href="css/zabuto_calendar/zabuto_calendar.min.css">

    <script src="js/menu/modernizr.custom.js"></script>

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
  </head>
    <body style="overflow: hidden;">
      <div id="main-wrapper" class="main-wrapper">
        @include('layouts.head')
      </div>
      <!--content-->
      <section id="content">
        <div class="container">
          <div class="row">
            <!-- content here-->
            <div class="col-sm-10 content-area">
              @yield('content')
            </div>
          </div><!-- / row -->
        </div><!-- / container -->
      </section>
      <!-- / content -->
      <script src="{{ asset('js/jquery/dist/jquery.min.js') }}"></script>
      <script src="{{ asset('js/menu/classie.js') }}"></script>
      <script src="{{ asset('js/menu/gnmenu.js') }}"></script>
      <script src="{{ asset('js/menu/modernizr.custom.js') }}"></script>
      <script src="{{ asset('js/common.js') }}"></script>
      <script src="{{ asset('js/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>
