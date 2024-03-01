<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta name="description" content="POS - Bootstrap Admin Template" />
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects" />
    <meta name="author" content="Dreamguys - Bootstrap Admin Template" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Trifecta Apps - @yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicon.png" />

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" />

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap-datetimepicker.min.css" />

    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css" />

    <link rel="stylesheet" href="{{ asset('assets') }}/css/feather.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/select2/css/select2.min.css" />

    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

    <div class="main-wrapper">

        @include('admin.layouts.header')

        @include('admin.layouts.sidebar')

        @yield('content')

        <div class="customizer-links" id="setdata">
            <ul class="sticky-sidebar">
                <li class="sidebar-icons">
                    <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="Theme">
                        <i data-feather="settings" class="feather-five"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script
      src="{{asset('assets')}}/js/jquery-3.7.1.min.js"
      type="fa0972c5f9f76a4cecc29643-text/javascript"
    ></script>

    <script
      src="{{asset('assets')}}/js/feather.min.js"
      type="fa0972c5f9f76a4cecc29643-text/javascript"
    ></script>

    <script
      src="{{asset('assets')}}/js/jquery.slimscroll.min.js"
      type="fa0972c5f9f76a4cecc29643-text/javascript"
    ></script>

    <script src="{{asset('assets')}}/js/jquery.dataTables.min.js" type="b65b9253e44b2c70162fe8cb-text/javascript"></script>
    <script src="{{asset('assets')}}/js/dataTables.bootstrap5.min.js" type="b65b9253e44b2c70162fe8cb-text/javascript"></script>

    <script
      src="{{asset('assets')}}/js/bootstrap.bundle.min.js"
      type="fa0972c5f9f76a4cecc29643-text/javascript"
    ></script>

    <script src="{{asset('assets')}}/plugins/summernote/summernote-bs4.min.js" type="b65b9253e44b2c70162fe8cb-text/javascript"></script>

    <script src="{{asset('assets')}}/plugins/select2/js/select2.min.js" type="b65b9253e44b2c70162fe8cb-text/javascript"></script>

    <script src="{{asset('assets')}}/js/moment.min.js" type="b65b9253e44b2c70162fe8cb-text/javascript"></script>
    <script src="{{asset('assets')}}/js/bootstrap-datetimepicker.min.js" type="b65b9253e44b2c70162fe8cb-text/javascript"></script>

    <script src="{{asset('assets')}}/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="b65b9253e44b2c70162fe8cb-text/javascript"></script>

    <script
      src="{{asset('assets')}}/plugins/apexchart/apexcharts.min.js"
      type="fa0972c5f9f76a4cecc29643-text/javascript"
    ></script>
    <script
      src="{{asset('assets')}}/plugins/apexchart/chart-data.js"
      type="fa0972c5f9f76a4cecc29643-text/javascript"
    ></script>

    <script
      src="{{asset('assets')}}/plugins/sweetalert/sweetalert2.all.min.js"
      type="fa0972c5f9f76a4cecc29643-text/javascript"
    ></script>
    <script
      src="{{asset('assets')}}/plugins/sweetalert/sweetalerts.min.js"
      type="fa0972c5f9f76a4cecc29643-text/javascript"
    ></script>

    <script
      src="{{asset('assets')}}/js/theme-script.js"
      type="fa0972c5f9f76a4cecc29643-text/javascript"
    ></script>
    <script
      src="{{asset('assets')}}/js/script.js"
      type="fa0972c5f9f76a4cecc29643-text/javascript"
    ></script>
    <script src="{{ asset('assets') }}/js/rocket-loader.min.js" data-cf-settings="fa0972c5f9f76a4cecc29643-|49" defer>
    </script>
</body>

</html>
