<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    @yield('metasection')
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    @yield('mandatorystyle')
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    @yield('pagelevelstyle')
    <!-- END PAGE LEVEL STYLE -->
    @yield('modernizr')
</head>

<body class="login fade-in" data-page="login">
    <!-- BEGIN LOGIN BOX -->
    @yield('loginbox')
    <!-- END LOCKSCREEN BOX -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    @yield('mandatoryscripts')
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    @yield('pagelevelscripts')
    <!-- END PAGE LEVEL SCRIPTS -->

    @yield('scripts')
</body>

</html>
