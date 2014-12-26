<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>{{ $title or 'Leave Management' }}</title>

    <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
    {{ HTML::style('assets/css/bootstrap.min.css') }}

    <!-- PLUGINS CSS -->
    {{ HTML::style('assets/plugins/magnific-popup/magnific-popup.min.css') }}
    {{ HTML::style('assets/plugins/chosen/chosen.min.css') }}
    {{ HTML::style('assets/plugins/icheck/skins/all.css') }}
    {{ HTML::style('assets/plugins/datepicker/datepicker.min.css') }}
    {{ HTML::style('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}
    {{ HTML::style('assets/plugins/validator/bootstrapValidator.min.css') }}
    {{ HTML::style('assets/plugins/summernote/summernote.min.css') }}
    {{ HTML::style('assets/plugins/datatable/css/bootstrap.datatable.min.css') }}
    {{ HTML::style('assets/plugins/toastr/toastr.css') }}

    <!-- MAIN CSS (REQUIRED ALL PAGE)-->
    {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/style-responsive.css') }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {{ HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
    {{ HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
</head>

<body class="tooltips">

<!--
===========================================================
BEGIN PAGE
===========================================================
-->
<div class="wrapper">

    <nav class="navbar square navbar-info" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Leave Management Application</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li class="active">{{ link_to_route('home','Home') }}</li>
                </ul>
                @if ( Auth::check() )
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{ Auth::user()->email }} <b class="caret"></b></a>
                        <ul class="dropdown-menu primary square margin-list-rounded with-triangle">
                            <li>{{ link_to_route('dashboard','Dashboard') }}</li>
                            <li class="divider"></li>
                            <li>{{ link_to_route('logout_path','Logout') }}</li>
                        </ul>
                    </li>
                </ul>
                @else
                @endif
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- BEGIN PAGE CONTENT -->
    <div style="min-height: 600px;" class="page-content no-left-sidebar">


        <div class="container-fluid">
            <div class="container">
                @include('partials.errors')
                @include('partials.notifications')
                @yield('content')
            </div>
        </div>
        <!-- /.container-fluid -->


    </div>
    <!-- /.page-content -->

</div>
<!-- /.wrapper -->
<!-- END PAGE CONTENT -->


<!-- BEGIN BACK TO TOP BUTTON -->
<div id="back-top">
    <a href="#top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END BACK TO TOP -->

<!--
===========================================================
Placed at the end of the document so the pages load faster
===========================================================
-->
<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
{{ HTML::script('assets/js/jquery.min.js') }}
{{ HTML::script('assets/js/bootstrap.min.js') }}
{{ HTML::script('assets/plugins/retina/retina.min.js') }}
{{ HTML::script('assets/plugins/nicescroll/jquery.nicescroll.js') }}
{{ HTML::script('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}
{{ HTML::script('assets/plugins/backstretch/jquery.backstretch.min.js') }}

<!-- PLUGINS -->
{{ HTML::script('assets/plugins/skycons/skycons.js') }}
{{ HTML::script('assets/plugins/prettify/prettify.js') }}
{{ HTML::script('assets/plugins/magnific-popup/jquery.magnific-popup.min.js') }}
{{ HTML::script('assets/plugins/owl-carousel/owl.carousel.min.js') }}
{{ HTML::script('assets/plugins/chosen/chosen.jquery.min.js') }}
{{ HTML::script('assets/plugins/icheck/icheck.min.js') }}
{{ HTML::script('assets/plugins/datepicker/bootstrap-datepicker.js') }}
{{ HTML::script('assets/plugins/timepicker/bootstrap-timepicker.js') }}
{{ HTML::script('assets/plugins/mask/jquery.mask.min.js') }}
{{ HTML::script('assets/plugins/validator/bootstrapValidator.min.js') }}
{{ HTML::script('assets/plugins/datatable/js/jquery.dataTables.min.js') }}
{{ HTML::script('assets/plugins/datatable/js/bootstrap.datatable.js') }}
{{ HTML::script('assets/plugins/summernote/summernote.min.js') }}
{{ HTML::script('assets/plugins/markdown/markdown.js') }}
{{ HTML::script('assets/plugins/markdown/to-markdown.js') }}
{{ HTML::script('assets/plugins/markdown/bootstrap-markdown.js') }}
{{ HTML::script('assets/plugins/slider/bootstrap-slider.js') }}

{{ HTML::script('assets/plugins/toastr/toastr.js') }}

<!-- FULL CALENDAR JS -->
{{ HTML::script('assets/plugins/fullcalendar/lib/jquery-ui.custom.min.js') }}
{{ HTML::script('assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}
{{ HTML::script('assets/js/full-calendar.js') }}

<!-- EASY PIE CHART JS -->
{{ HTML::script('assets/plugins/easypie-chart/easypiechart.min.js') }}
{{ HTML::script('assets/plugins/easypie-chart/jquery.easypiechart.min.js') }}

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js') }}
<![endif]-->
{{ HTML::script('assets/plugins/jquery-knob/jquery.knob.js') }}
{{ HTML::script('assets/plugins/jquery-knob/knob.js') }}

<!-- FLOT CHART JS -->
{{ HTML::script('assets/plugins/flot-chart/jquery.flot.js') }}
{{ HTML::script('assets/plugins/flot-chart/jquery.flot.tooltip.js') }}
{{ HTML::script('assets/plugins/flot-chart/jquery.flot.resize.js') }}
{{ HTML::script('assets/plugins/flot-chart/jquery.flot.selection.js') }}
{{ HTML::script('assets/plugins/flot-chart/jquery.flot.stack.js') }}
{{ HTML::script('assets/plugins/flot-chart/jquery.flot.time.js') }}

<!-- MORRIS JS -->
{{ HTML::script('assets/plugins/morris-chart/raphael.min.js') }}
{{ HTML::script('assets/plugins/morris-chart/morris.min.js') }}


<!-- MAIN APPS JS -->
{{ HTML::script('assets/js/apps.js') }}

</body>
</html>