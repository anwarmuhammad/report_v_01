<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Report') }}</title>

    <!-- Styles -->

    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}} />
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}} />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Report</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('admin/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('admin/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
</head>
<body>

@yield('content')


    <!-- Scripts -->


    <!--   Core JS Files   -->



</body>
<script src="{{url('admin/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{url('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('admin/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{url('admin/js/chartist.min.js')}}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{url('admin/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{url('admin/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{url('admin/js/bootstrap-notify.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{url('admin/js/material-dashboard.js?v=1.2.0')}}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{url('admin/js/demo.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</html>
